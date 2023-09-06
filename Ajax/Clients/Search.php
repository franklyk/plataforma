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
$Read->Query("clients", $values, ["client_guid"], "client_guid  = :client_guid");

$LinesTable = $Read->Lines();
foreach($Read->Result() as $Show){}

//Enquanto existir informações retorna com os dados Json
$message[] = [
    "client_id" => $Show['client_guid'],
    "client_rz" => $Show['client_rz'],
    "client_name" => $Show['client_name'],
    "client_cnpj" => $Show['client_cpf'],
    "client_email" => $Show['client_email'],
    "client_phone" => $Show['client_phone'],
    "client_zipcode" => $Show['client_zipcode'],
    "client_address" => $Show['client_street'],
    "client_number" => $Show['client_number'],
    "client_complement" => $Show['client_complement'],
    "client_neighborhood" => $Show['client_neighborhood'],
    "client_city" => $Show['client_city'],
    "client_state" => $Show['client_state'],
    "client_bank1" => $Show['client_bank'],
    "client_code" => $Show['client_code'],
    "client_agency" => $Show['client_agency'],
    "client_account" => $Show['client_account'],
    "client_digit" => $Show['client_digit'],
    "client_bank2" => $Show['client_bank2'],
    "client_code2" => $Show['client_code2'],
    "client_agency2" => $Show['client_agency2'],
    "client_account2" => $Show['client_account2'],
    "client_digit2" => $Show['client_digit2'],
    "lines" => $LinesTable,
    "status" => $Show['status']
];

echo json_encode($message);
return;