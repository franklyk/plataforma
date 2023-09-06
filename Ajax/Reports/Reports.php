<?php
session_start();

//Chamada de Requisições de Classes
require '../../Developers/Config.php';
require '../../Developers/Database/Connection.php';
require '../../Developers/Database/ReadData.php';
require '../../Developers/Models/DevClass.php';

$Conn = \Database\Connection::getInstance();
$Read = new \Database\ReadData();
$DevClass = new \Models\DevClass();

//Limpa o valor da variável message para próxima ação, evitando o conflito de mensagens na tela
$message = null;

//Recupera do formulário (Via Ajax) todos os campos do formulário
$time = filter_input(INPUT_GET, 'time', FILTER_DEFAULT);
$status = filter_input(INPUT_GET, 'status', FILTER_DEFAULT);
$initial = filter_input(INPUT_GET, 'initial', FILTER_DEFAULT);
$final = filter_input(INPUT_GET, 'final', FILTER_DEFAULT);

$mounth = date('m');
$year = date('Y');

//Semanal
if($time == 3){
    $Date = " AND YEARWEEK(a.created_at, 1) = YEARWEEK(CURDATE(), 1)";
}

//Mensal
if($time == 1){
    $Date = " AND a.created_at BETWEEN '". $year."-".$mounth."-01 00:00:00' AND '". $year."-".$mounth."-31 23:59:59'";
}

//Ano
if($time == 2){
    $Date = " AND a.created_at BETWEEN '". $year."-01-01' AND '".$year."-12-31'";
}

//Períodico
if($time == 4){
    $Date = " AND a.created_at BETWEEN '". $initial."' AND '".$final."' ";
}

//Consulta de últimos serviços cadastrados (Ambiente Escritório)
$Values =  [$status];
$Params = ["status_service"];
$Conditions = " a.status_service = :status_service $Date GROUP BY a.service_id LIMIT 100";
$Indexes ="a.service_id, a.register_id, a.service_guid, a.tpservice_id, a.client_id, a.user_id, a.service_cpr_number, a.service_culture_safra, 
    a.status, a.service_cpr_value, a.status_service, a.service_user_juridic, a.service_cpr_date_expiration, a.service_cpr_value_reference, 
    a.created_at, b.user_guid, b.user_name, c.client_guid, c.client_name, f.culture_guid, f.culture_name, d.tpservice_guid, d.tpservice_name, 
    g.service_id, g.farm_number, e.status_guid, e.status_name";
$Table = "services a
		INNER JOIN users b ON (b.user_guid = a.service_user_juridic)
		INNER JOIN clients c ON (c.client_guid = a.client_id)
		INNER JOIN culture f ON (f.culture_guid = a.culture_id OR a.culture_id = '') 
		INNER JOIN tpservices d ON (d.tpservice_guid = a.tpservice_id)
		INNER JOIN farms g ON (g.service_id = a.service_guid OR g.service_id = '')
		INNER JOIN status e ON (e.status_guid = a.status_service)";
$Read -> Query($Table, $Values, $Params, $Conditions, $Indexes);
$Lines = $Read ->Lines();

if($Lines == 0){
    //Enquanto existir informações retorna com os dados Json
    $message = [
        "status" => 'info',
        "message" => 'Não encontramos nenhum resultado.',
        "lines" => 0
    ];

    echo json_encode($message);
    return;
}

foreach($Read->Result() as $Show){

    $value = ($Show['service_cpr_value'] == '' || $Show['service_cpr_value'] == 'NULL' ? 'R$ 0,00': 'R$ '.number_format($Show['service_cpr_value'], 2,',','.'));
    $expiration = ($Show['service_cpr_date_expiration'] == '0000-00-00' || $Show['service_cpr_date_expiration'] == '' ? '-' : date('d/m/Y', strtotime($Show['service_cpr_date_expiration'])));
    $money = ($Show['tpservice_guid'] == '00B278BE-4F95-4D5B-85E4-F62801D4AD8E' ? 'R$ '.number_format($Show['service_cpr_value_reference'], 2,',','.') : $value);

    //Enquanto existir informações retorna com os dados Json
    $message[] = [
        "client" => $Show['client_name'],
        "service" => $Show['tpservice_name'],
        "number" => $Show['service_cpr_number'],
        "user" => $Show['user_name'],
        "farm" => $Show['farm_number'],
        "status" => $Show['status_name'],
        "culture" => $Show['culture_name'],
        "value" => $money,
        "safra" => $Show['service_culture_safra'],
        "date" => $expiration,
        "lines" => $Lines
    ];
}

echo json_encode($message);
return;
