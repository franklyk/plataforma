<?php
//Usar o NameSpace da Conexão
use Database\Connection;
session_start();

//Chamada de requisições
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
$Email = $DevClass->ValidateEmail($PostFilters['login_email']);

//Checar se o formáto de e-mail é válido, se não for válido retorna uma mensagem
if(!$Email || $Email == '' || $Email == null){
    $message = ['status'=> 'warning', 'message' => "Formato de e-mail inválido!", 'redirect'=> 'login.php'];
    echo json_encode($message);
}

//Verifique se o email e o token estão cadastrados no banco de dados, na tabela de usuários.
$Read = new \Database\ReadData();
$Values = [$Email];
$Params = ['user_email'];
$Conditions = 'user_email = :user_email';
$Indexes = 'user_id, user_email, user_pass, user_level, user_name';
$Read -> Query(DB_USER, $Values, $Params, $Conditions, $Indexes);
$Lines = $Read->Lines();

//Se o endereço de e-mail e o token não existirem no banco de dados, ele interromperá a execução do script e exibirá uma mensagem informativa
if($Lines == 0){
    $message = ['status'=> 'info', 'message' => "E-mail ou token não conferem com o cadastrado!", 'redirect'=> ''];
    echo json_encode($message);
    return;
}
//Envio de E-mail
$EmailSender = new \Controllers\Email();

$Subject = "[{$titleSite}]Recuperação de Senha";
$Body = '<a href="'.$configBase.'new-password/'.$Email.'" target="_blank">Clique aqui para recuperar nova senha</a>';
$Send = $EmailSender->EmailSender($Email, $Subject, $Body);

//Em caso afirmativo, mostra mensagem de sucesso
if($Send){

    $message = ["message"=>"Muito bem, poderemos verificar a autenticidade, aguarde iremos redirecioná-lo!", "status" => "success", "redirect"=> 'new-password.php?email='.$Email.''];
}else{
    $message = ["message"=>"E-mail ou token estão incorretos", "status" => "error", "redirect"=> ''];
}

//JSON retorna a mensagem de sucesso na tela para o usuário via AJAX.
echo json_encode($message);