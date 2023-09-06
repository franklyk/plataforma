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
if(empty($PostFilters['input_client'])){
    $message = [
        "message" => "Preencha o campo cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Verifica se o cliente já existe no banco
$Read = new \Database\ReadData();
$values = [$PostFilters['input_client']];
$Read->Query("clients", $values, ["client_name"], "client_name  = :client_name",
    "client_guid, client_name, client_rz, client_cpf, status");

$LinesTable = $Read->Lines();
foreach($Read->Result() as $Show){}

//Enquanto existir informações retorna com os dados Json
$message[] = [
    "client_guid" => $Show['client_guid'],
    "client_rz" => $Show['client_rz'],
    "client_name" => $Show['client_name'],
    "client_cpf" => $Show['client_cpf'],
    "lines" => $LinesTable,
    "status" => $Show['status']
];

echo json_encode($message);
return;