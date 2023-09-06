<?php
//Usar o NameSpace da Conexão
use Database\Connection;
session_start();

//Chamada de requisições
require '../../Developers/Config.php';

//Conectar com Banco de Dados
$Conn = Connection::getInstance();
$Read = new \Database\ReadData();

$message = null;

//Recupera o valor enviado pelo ajax
$Get = filter_input(INPUT_GET, 'val', FILTER_SANITIZE_STRIPPED);

//Campo de Pesquisa de Usuário - Verificação de Campo
if(empty($Get)){
    $message = [
        "message" => "Escolha uma opção",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Realiza a consulta
$Read->Query("users", [$Get], ["user_name"], "user_name = :user_name OR user_name LIKE '$Get%'",
    "user_guid, user_name");

//Devolve os valores para serem enviados para o ajax e apresentar para o usuário
$LinesTable = $Read->Lines();
foreach($Read->Result() as $Show) {

//Enquanto existir informações retorna com os dados Json
    $message[] = [
        "id" => $Show['user_guid'],
        "name" => $Show['user_name'],
        "lines" => $LinesTable,
        "status" => 'success'
    ];
}

echo json_encode($message);
return;