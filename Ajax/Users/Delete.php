<?php
//Usar o NameSpace da Conexão
use Database\Connection;
session_start();

//Chamada de requisições
require '../../Developers/Config.php';
require '../../Developers/Models/DevClass.php';

//Conectar com Banco de Dados
$Conn = Connection::getInstance();
$Delete = new \Database\DeleteData();

//Chama a biblioteca de classes
$DevClass = new \Models\DevClass();

$message = null;

$PostFilters = strip_tags(filter_input(INPUT_GET,'val', FILTER_SANITIZE_STRIPPED));

usleep(500000);

$values = [$PostFilters];
$params = ['user_guid'];
$conditions = 'user_guid = :user_guid';
$Delete->Query("users", $params, $values, $conditions);

//Enquanto existir informações retorna com os dados Json
$message = [
    "message" => "Usuário removido com sucesso!",
    "status" => "success",
    "redirect" => "users"
];

echo json_encode($message);
return;