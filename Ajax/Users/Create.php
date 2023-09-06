<?php
//Usar o NameSpace da Conexão
use Database\Connection;
session_start();

//Chamada de requisições
require '../../Developers/Config.php';
require '../../Developers/Models/DevClass.php';

//Conectar com Banco de Dados
$Conn = Connection::getInstance();
$Read = new \Database\ReadData();
$Create = new \Database\CreateData();

//Chama a biblioteca de classes
$DevClass = new \Models\DevClass();

$message = null;

$Post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
$PostFilters = array_map("strip_tags", $Post);

usleep(500000);

//Usuário - Verificação de Campo
if(empty($PostFilters['input_user_name'])){
    $message = [
        "message" => "Preencha o campo nome do usuário",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Password - Verificação de Campo
if(empty($PostFilters['input_user_pass'])){
    $message = [
        "message" => "Preencha o campo senha",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//E-mail- Verificação de Campo
if(empty($PostFilters['input_user_email'])){
    $message = [
        "message" => "Preencha o campo e-mail",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//CPF - Verificação de Campo
if(empty($PostFilters['input_user_cpf'])){
    $message = [
        "message" => "Preencha o cpf do usuário",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Perfil - Verificação de Campo
if(empty($PostFilters['input_user_profile'])){
    $message = [
        "message" => "Selecione um perfil para o usuário",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Verifica se o usuário já existe no banco
$Read = new \Database\ReadData();
$Read->Query("users", [$PostFilters['input_user_cpf']], ["user_cpf"], "user_cpf  = :user_cpf ", "user_cpf");

//Se o cliente já foi cadastrado anteriormente
if($Read->Lines() > 0){
    $message = ['status'=> 'info', 'message' => "Este usuário já está cadastrado!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

$bu = ($PostFilters['input_user_bu'] == '' ? '-' : $PostFilters['input_user_bu']);

//Verifica o e-mail
$Email = $DevClass->ValidateEmail($PostFilters['input_user_email']);
if(!$Email){
    $message = ['status'=> 'error', 'message' => "Insira um e-mail válido!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

//Gera Hash
$Pass = $DevClass->CreatePass($PostFilters['input_user_pass']);

$guid = strtoupper(com_create_guid());
//Cadastra o novo usuário no banco de dados
$values = [$guid, $PostFilters['input_user_name'], $PostFilters['input_user_cpf'], $PostFilters['input_user_client'], $bu,
    $Email, $Pass, $PostFilters['input_user_profile'], 1];
$params = ['user_guid', 'user_name', 'user_cpf', 'client_id', 'user_bu', 'user_email', 'user_password', 'user_profile', 'status'];
$Create -> Query('users', $params, $values);

$message = ['status'=> 'success', 'message' => "Usuário cadastrado com sucesso!", 'redirect'=> 'user-new'];
echo json_encode($message);
return;