<?php
//Usar o NameSpace da Conexão
use Database\Connection;
session_start();

///Chamada de requisições
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

$Email = $DevClass->ValidateEmail($PostFilters['user_email']);

$Password = $PostFilters['user_newPass'];
$Retype = $PostFilters['user_renewPass'];

$Count = strlen($Password);

//Verifica se a senha tem no mínimo oito caracteres digitados
if($Count < 8){
    $message = ['status'=> 'warning', 'message' => "Sua senha deve ter no mínimo 8 caracteres!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

//Verifica se o e-mail tem um formato válido.
if(!$Email || $Email == '' || $Email == null){
    $message = ['status'=> 'warning', 'message' => "Formato de e-mail inválido!", 'redirect'=> ''];
    echo json_encode($message);
	return;
}

//Verifique se o email está cadastrado no banco de dados, na tabela de usuários.
$Read = new \Database\ReadData();
$Values = [$Email];
$Params = ['user_email'];
$Conditions = 'user_email = :user_email';
$Indexes = 'user_id, user_email, user_pass, user_level, user_name';
$Read -> Query(DB_USER, $Values, $Params, $Conditions, $Indexes);
$Lines = $Read->Lines();

//Se o endereço de e-mail não existir no banco de dados, ele interrompe a execução do script e exibe uma mensagem informativa
if($Lines == 0){
    $message = ['status'=> 'info', 'message' => "O e-mail não corresponde ao registro!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}

//Verifica se a senha foi digitada corretamente em ambos os campos do formulário
if($Password != $Retype){
    $message = ["message"=>"Ops, a nova senha foi inserida de forma diferente nos dois campos do formulário ...", "status" => "info", "redirect"=> ''];
	echo json_encode($message);
    return;
}


//Criptografa a nova senha
$NewPassword = $DevClass->CreatePass($Password);

//Registre a nova senha no banco de dados e atualize a conta.
$Update = new \Database\UpdateData();

$Params = ['user_email', 'user_pass'];
$Values = [$Email, $NewPassword];
$Conditions = 'user_email = :user_email AND user_status = 1';
$Update -> Query(DB_USER, $Params, $Values, $Conditions);

//Tudo bem, o usuário cai no if e é redirecionado para a página de login.
if($Update){
	//Criamos a mensagem de sucesso para o usuário em tela
	$message = ["message"=>"Sua nova senha foi registrada com sucesso. Espere, estamos redirecionando você...!", "status" => "success", "redirect"=> '../login'];

}else{
	//Criamos a mensagem de erro para o usuário em tela
	$message = ["message"=>"Ops, ocorreu um erro ao registrar a nova senha. Tente novamente...", "status" => "error"];
}

//JSON retorna a mensagem de sucesso na tela para o usuário via AJAX.
echo json_encode($message);