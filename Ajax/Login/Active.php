<?php
use Database\Connection;

session_start();

//Chamada de Requisições de Classes
require '../../Developers/Config.php';
require '../../Developers/Models/DevClass.php';

$DevClass = new \Models\DevClass();
$message = null;

$counter = $_SESSION['counter'];

$Post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
$PostFilters = array_map("strip_tags", $Post);

usleep(500000);

//Informa que é a última tentativa
if ($counter == 5) {
    $_SESSION['counter'] = $counter + 1;
    $message = ['status' => 'warning', 'message' => "Você possui mais uma tentativa!", 'redirect' => ''];
    echo json_encode($message);
    return;
}

//Bloqueia o acesso do usuário
if(BLOCKED == 1 && $counter == TIMESBLOCKED || $_SESSION['blocked'] == 1){
    unset($_SESSION['user_name']);
    unset($_SESSION['user_level']);
    unset($_SESSION['logged']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_token']);

    $_SESSION['blocked'] = 1;
    $_COOKIE("LBlocked", 1, 86400, '/');

    $message = ['status'=> 'error', 'message' => "Seu acesso foi bloqueado, entre em contato conosco!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

//Válida o formato do e-mail
$DevClass = new \Models\DevClass();
$Email = $DevClass->ValidateEmail($PostFilters['login_email']);

//Verifica se o e-mail tem formato válido.
if(!$Email || $Email == '' || $Email == null){
    $message = ['status'=> 'warning', 'message' => "Formato de e-mail inválido!", 'redirect'=> ''];
    echo json_encode($message);
}

//Confere se o e-mail esta cadastrado no banco de dados, na tabela users.
$Read = $Conn->prepare("SELECT user_id, user_email, user_pass, user_level, user_name, user_token FROM users WHERE user_email = :user_email");
$Read -> bindValue(':user_email', $Email);
$Read -> execute();

$Lines = $Read->rowCount();

//Se o e-mail não existir no cadastro da banco de dados, interrompe a execução do script e mostra mensagem informativa
if($Lines == 0){
    $_SESSION['counter'] = $counter + 1;

    if($counter == 5){
        $message = ['status'=> 'warning', 'message' => "Você possui mais uma tentativa!", 'redirect'=> ''];
        echo json_encode($message);
        return;
    }else{
        $message = ['status'=> 'info', 'message' => "E-mail ou senha estão incorretos!", 'redirect'=> ''];
        echo json_encode($message);
        return;
    }
}

//Recupera as informações do usuário logado diretamente da tabela users
foreach($Read as $Show){}

//Checa se a senha combina com a cadastrada na tabela.
$VerifyPass = $DevClass->VerifyPass($PostFilters['login_password'], $Show['user_pass']);

//Caso positivo, cria as sessões para manipulação.
if($VerifyPass){

    $_SESSION['user_id'] = $Show['user_id'];
    $_SESSION['user_name'] = $Show['user_name'];
    $_SESSION['user_email'] = $Show['user_email'];
    $_SESSION['user_level'] = $Show['user_level'];
    $_SESSION['user_token'] = $Show['user_token'];
    $_SESSION['logged'] = "Sim";

    unset($_SESSION['counter']);

    $message = ["message"=>"Bem vindo ao Sistema!", "status" => "success", "redirect"=> 'Admin/home.php'];
}else{
    $_SESSION['counter'] = $counter + 1;
    $message = ["message"=>"E-mail ou senha estão incorretos", "status" => "info", "redirect"=> ''];
}

//O JSON retorna para o usuário via AJAX a mensagem de sucesso na tela.
echo json_encode($message);