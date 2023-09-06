<?php
session_start();

$message = null;

$Post = strip_tags(filter_input(INPUT_GET, 'action',FILTER_SANITIZE_STRIPPED));

//Verifica se há algum valor no action
if(!$Post || $Post == '' || $Post == null){
    $message = ['status'=> 'warning', 'message' => "Oops! nenhuma ação pôde ser realizada", 'redirect'=> 'home.php'];
    echo json_encode($message);
}else{
    session_destroy();
    $message = ["message"=>"Logout realizado com sucesso!", "status" => "success", "redirect"=> '../login.php'];
}

//O JSON retorna para o usuário via AJAX a mensagem de sucesso na tela.
echo json_encode($message);