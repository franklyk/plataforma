<?php
//Usar o NameSpace da Conexão
use Database\Connection;
session_start();

//Chamada de requisições
require '../../Developers/Config.php';
require '../../Developers/Models/DevClass.php';

//Conectar com Banco de Dados
$Conn = Connection::getInstance();

$message = null;

$Post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
$PostFilters = array_map("strip_tags", $Post);

usleep(500000);

//Validar o formato do e-mail
$DevClass = new \Models\DevClass();
$Email = $DevClass->ValidateEmail($PostFilters['user_mail']);
$Pass= $PostFilters['user_pass'];
$User = $PostFilters['user_name'];

$CountPass = strlen($Pass);
$CountName = strlen($User);
$CountEmail = strlen($Email);

//Verifica se o nome tem no mínimo doze caracteres digitados
if($CountName < 12){
    $message = ['status'=> 'warning', 'message' => "Sua nome deve ter no mínimo 12 caracteres!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

//Verifica se o email tem no mínimo dez caracteres digitados
if($CountEmail < 10){
    $message = ['status'=> 'warning', 'message' => "Seu e-mail deve ter no mínimo 10 caracteres!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

//Verifica se a senha tem no mínimo oito caracteres digitados
if($CountPass < 8){
    $message = ['status'=> 'warning', 'message' => "Sua senha deve ter no mínimo 8 caracteres!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

//Checar se o formáto de e-mail é válido, se não for válido retorna uma mensagem
if(!$Email || $Email == '' || $Email == null){
    $message = ['status'=> 'warning', 'message' => "Formato de e-mail inválido!", 'redirect'=> 'login.php'];
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
if($Lines == 1){
    $message = ['status'=> 'warning', 'message' => "Você já possui cadastro conosco", 'redirect'=> ''];
    echo json_encode($message);
    return;
}else{
    //Criptografar a Senha
    $Password = $DevClass->CreatePass($Pass);

    $Create = new \Database\CreateData();

    $Params = ['user_name', 'user_email', 'user_pass', 'user_level'];
    $Values = [$User, $Email, $Password, '1'];
    $Create ->Query(DB_USER, $Params, $Values);

    if($Create){
        //Cria as sessões
        $_SESSION['user_id'] = $Create->LastInsert();
        $_SESSION['user_name'] = $User;
        $_SESSION['user_email'] = $Email;
        $_SESSION['user_level'] = 1;
        $_SESSION['logged'] = "Sim";

        $message = ['status'=> 'success', 'message' => "Sua conta foi criada, aguarde estamos te redirecionando!", 'redirect'=> 'admin'];
        echo json_encode($message);
        return;
    }else{
        $message = ['status'=> 'error', 'message' => "Oops... ocorreu um erro", 'redirect'=> ''];
        echo json_encode($message);
        return;
    }
}
