<?php
use Database\Connection;

session_start();

//Chamada de Requisições de Classes
require '../../Developers/Config.php';
require '../../Developers/Models/DevClass.php';

$DevClass = new \Models\DevClass();
$message = null;

$counter = 0; //$_SESSION['counter'];

$Post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
$PostFilters = array_map("strip_tags", $Post);

usleep(500000);

$Count = strlen($Password);

//Informa que á última tentativa
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
    setcookie("LBlocked", 1, 86400, '/');

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
$Read = new \Database\ReadData();
$Values = [$Email];
$Params = ['user_email'];
$Conditions = 'user_email = :user_email';
$Indexes = 'user_id, user_email, user_pass, user_level, user_name';
$Read -> Query(DB_USER, $Values, $Params, $Conditions, $Indexes);
$Lines = $Read->Lines();

//Se o e-mail não existir no cadastro da banco de dados, interrompe a execução do script e mostra mensagem informativa
if($Lines == 0){
   $_SESSION['counter'] = $counter + 1;

   if($counter == 5){
       $message = ['status'=> 'warning', 'message' => "Você possui mais uma tentativa!", 'redirect'=> ''];
       echo json_encode($message);
       return;
   }else{
       $message = ['status'=> 'info', 'message' => "E-mail ou senha estão incorreto8s!", 'redirect'=> ''];
       echo json_encode($message);
       return;
   }
}

//Recupera as informações do usuário logado diretamente da tabela users
foreach($Read->Result() as $Show){}

//Checa se a senha combina com a cadastrada na tabela.
$VerifyPass = $DevClass->VerifyPass($PostFilters['login_password'], $Show['user_pass']);

//Caso positivo, cria as sessões para manipulação.
if($VerifyPass){
    //Verifica se o módulo remember foi checado ou não
    if(!empty($PostFilters['login_remember'])){
        //Cookie válido por 30 dias
        $time = 3600*24*30;
        $email = $PostFilters['login_email'];
        $pass = $PostFilters['login_password'];

        setcookie("LE", $email, time() + 3600, '/');
        setcookie("LP", $pass, time() + 3600, '/');
    }

    //Cria as sessões
    $_SESSION['user_id'] = $Show['user_id'];
    $_SESSION['user_name'] = $Show['user_name'];
    $_SESSION['user_email'] = $Show['user_email'];
    $_SESSION['user_level'] = $Show['user_level'];
    $_SESSION['logged'] = "Sim";

    unset($_SESSION['counter']);

    $message = ["message"=>"Bem vindo ao Sistema!", "status" => "success", "redirect"=> 'admin'];
}else{
    $_SESSION['counter'] = $counter + 1;
    $message = ["message"=>"E-mail ou senha estão incorretos", "status" => "info", "redirect"=> ''];
}

//O JSON retorna para o usuário via AJAX a mensagem de sucesso na tela.
echo json_encode($message);