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

$PostFilters = filter_input(INPUT_GET, 'val',FILTER_SANITIZE_STRIPPED);

usleep(500000);

//Verifica se o cliente já existe no banco
$Read = new \Database\ReadData();
$values = [$PostFilters];
$Read->Query("users", $values, ["user_guid"], "user_guid  = :user_guid");

$LinesTable = $Read->Lines();
foreach($Read->Result() as $Show){}

//Enquanto existir informações retorna com os dados Json
$message[] = [
    "user_guid" => $Show['user_guid'],
    "user_name" => $Show['user_name'],
    "user_cpf" => $Show['user_cpf'],
    "client_id" => $Show['client_id'],
    "user_bu" => $Show['user_bu'],
    "user_email" => $Show['user_email'],
    "user_profile" => $Show['user_profile'],
    "lines" => $LinesTable,
    "status" => $Show['status']
];

echo json_encode($message);
return;