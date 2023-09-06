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

//Razão Social - Verificação de Campo
if(empty($PostFilters['client_rz'])){
    $message = [
        "message" => "Preencha o campo razão social",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Nome Fantasia - Verificação de Campo
if(empty($PostFilters['client_name'])){
    $message = [
        "message" => "Preencha o campo razão social",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//CNPJ - Verificação de Campo
if(empty($PostFilters['client_cnpj'])){
    $message = [
        "message" => "Preencha o cnpj do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//E-mail - Verificação de Campo
if(empty($PostFilters['client_email'])){
    $message = [
        "message" => "Preencha o e-mail do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Telefone - Verificação de Campo
if(empty($PostFilters['client_phone'])){
    $message = [
        "message" => "Preencha o telefone do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Cep - Verificação de Campo
if(empty($PostFilters['client_zipcode'])){
    $message = [
        "message" => "Preencha o cep do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Endereço - Verificação de Campo
if(empty($PostFilters['client_address'])){
    $message = [
        "message" => "Preencha o endereço do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Número - Verificação de Campo
if(empty($PostFilters['client_number'])){
    $message = [
        "message" => "Preencha o número do endereço do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Bairro - Verificação de Campo
if(empty($PostFilters['client_neighborhood'])){
    $message = [
        "message" => "Preencha o bairro do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Cidade - Verificação de Campo
if(empty($PostFilters['client_city'])){
    $message = [
        "message" => "Preencha a cidade do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Estado - Verificação de Campo
if(empty($PostFilters['client_state'])){
    $message = [
        "message" => "Preencha o estado do cliente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Banco 1 - Verificação de Campo
if(empty($PostFilters['client_bank1'])){
    $message = [
        "message" => "Preencha o nome do banco",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Código do Banco 1 - Verificação de Campo
if(empty($PostFilters['client_code'])){
    $message = [
        "message" => "Preencha o código do banco",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Agência do Banco 1 - Verificação de Campo
if(empty($PostFilters['client_agency'])){
    $message = [
        "message" => "Preencha o agência do banco",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Conta Corrente do Banco 1 - Verificação de Campo
if(empty($PostFilters['client_account'])){
    $message = [
        "message" => "Preencha a conta corrente do banco",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Dígito da Conta Corrente do Banco 1 - Verificação de Campo
if($PostFilters['client_digit']=== ''){
    $message = [
        "message" => "Preencha o dígito da conta corrente",
        "status" => "info",
        "redirect" => ""
    ];

    //O JSON retorna para o usuário via AJAX a mensagem na tela.
    echo json_encode($message);
    return;
}

//Verifica se o cliente já existe no banco
$Read = new \Database\ReadData();
$Read->Query("clients", [$PostFilters['client_cnpj']], ["client_cpf"], "client_cpf  = :client_cpf ", "client_cpf");

//Se o cliente já foi cadastrado anteriormente
if($Read->Lines() > 0){
    $message = ['status'=> 'info', 'message' => "Este cliente já está cadastrado!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

$guid = strtoupper(com_create_guid());
//Cadastra o novo cliente no banco de dados
$values = [$guid, $_SESSION['user_guid'], $PostFilters['client_name'], $PostFilters['client_rz'], $PostFilters['client_email'], $PostFilters['client_phone'],
    $PostFilters['client_zipcode'], $PostFilters['client_address'], $PostFilters['client_number'], $PostFilters['client_complement'], $PostFilters['client_neighborhood'],
    $PostFilters['client_city'], $PostFilters['client_state'], $PostFilters['client_cnpj'], $PostFilters['client_bank1'], $PostFilters['client_code'],
    $PostFilters['client_agency'], $PostFilters['client_account'], $PostFilters['client_digit'], $PostFilters['client_bank2'],
    $PostFilters['client_code2'], $PostFilters['client_agency2'], $PostFilters['client_account2'], $PostFilters['client_digit2'], 1];
$params = ['client_guid', 'user_id', 'client_name', 'client_rz', 'client_email', 'client_phone', 'client_zipcode', 'client_street', 'client_number', 'client_complement',
    'client_neighborhood', 'client_city', 'client_state', 'client_cpf', 'client_bank', 'client_code', 'client_agency', 'client_account',
    'client_digit', 'client_bank2', 'client_code2', 'client_agency2', 'client_account2', 'client_digit2','status'];
$Create -> Query('clients', $params, $values);

$message = ['status'=> 'success', 'message' => "Cliente cadastrado com sucesso!", 'redirect'=> 'client-new'];
echo json_encode($message);
return;