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
$Update = new \Database\UpdateData();

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

$bu = ($PostFilters['input_user_bu'] == '' ? '-' : $PostFilters['input_user_bu']);

//Verifica o e-mail
$Email = $DevClass->ValidateEmail($PostFilters['input_user_email']);
if(!$Email){
    $message = ['status'=> 'error', 'message' => "Insira um e-mail válido!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

//Altera o novo cliente no banco de dados
$values = [$PostFilters['input_user_name'], $PostFilters['input_user_cpf'], $PostFilters['input_user_client'], $bu,
    $Email, $PostFilters['input_user_profile'], $PostFilters['user_guid']];
$params = ['user_name', 'user_cpf', 'client_id', 'user_bu', 'user_email', 'user_profile', 'user_guid'];

$conditions = 'user_guid = :user_guid';
$Update -> Query('users', $params, $values, $conditions);

$message = ['status'=> 'success', 'message' => "Dados do usuário atualizado com sucesso!", 'redirect'=> 'users'];
echo json_encode($message);
return;