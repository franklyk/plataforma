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

//Campo de Pesquisa de Cliente- Verificação de Campo
if(empty($PostFilters['input_user_name'])){
    $message = [
        "message" => "Preencha o campo usuário",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Verifica se o cliente já existe no banco
$Read = new \Database\ReadData();
$values = [$PostFilters['input_user_name']];
$table = 'users a INNER JOIN profile b ON(b.profile_guid = a.user_profile)';
$Read->Query($table, $values, ["user_name"], "user_name  = :user_name",
    "a.user_guid, a.user_name, a.user_profile, a.user_email, a.status, b.profile_guid, b.profile_name");

$LinesTable = $Read->Lines();
foreach($Read->Result() as $Show){}

//Enquanto existir informações retorna com os dados Json
$message[] = [
    "user_guid" => $Show['user_guid'],
    "user_name" => $Show['user_name'],
    "user_email" => $Show['user_email'],
    "user_profile" => $Show['profile_name'],
    "lines" => $LinesTable,
    "status" => $Show['status']
];

echo json_encode($message);
return;