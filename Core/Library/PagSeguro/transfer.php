<?php
session_start();

//Chamada de Requisições de Classes
require '../../../Developers/Config.php';
require '../../../Developers/Models/DevClass.php';
require '../../../Developers/Database/ReadData.php';

//Lista de Produtos no Pedido
$ReadCart = new \Database\ReadData();
$DevClass = new \Models\DevClass();

$IndexesCart = 'a.order_session, a.address_id, a.user_id, a.order_status, a.order_finished, a.order_id, a.order_value_discount, a.product_sizes, a.product_name, 
        a.product_cover, a.order_shipper, a.order_shipping_value, a.order_quantity, a.product_id, a.order_price, b.user_id, b.user_name, b.user_email, b.user_document,
        b.user_ddd, b.user_phone, c.address_id, c.address_street, c.address_number, c.address_neighborhood, c.address_city, c.address_state, c.address_zipcode';
$ValuesCart = [$_SESSION['cart'], 1];
$ParamsCart = ['order_session', 'order_status'];
$ConditionsCart = 'a.order_session = :order_session AND a.order_status = :order_status';
$sql = DB_BUY." a INNER JOIN ".DB_USER. " b ON(b.user_id = a.user_id) 
INNER JOIN ".DB_ADDRESS." c ON(c.address_id = a.address_id)";
$ReadCart->Query($sql, $ValuesCart, $ParamsCart, $ConditionsCart, $IndexesCart);

$Lines = $ReadCart->Lines();

$i=1;
$total=0;
foreach ($ReadCart->Result() as $Show) {
    $total += $Show['order_finished'];
    $shipper = $Show['order_shipper'];
    $valueShipper = $Show['order_shipper_value'];

    $params['itemId'.$i] = $Show['product_id'];
    $params['itemDescription'.$i] = $Show['product_name'];
    $params['itemQuantity'.$i] = $Show['order_quantity'];
    $params['itemAmount'.$i] = $Show['order_price'];
    $i++;
}

$message = null;

//Preparação dos Dados Para o Envio
$creditCardToken = htmlspecialchars($_POST["token"]);
$senderHash = htmlspecialchars($_POST["senderHash"]);

	$ref = $Show['order_session']; //Código de Referência
	$bankName = 'itau'; //Nome do banco para Transação.
	
	//Aqui pega do Banco de Dados
    $senderName = $Show['user_name'];  // Nome do Comprador
    $senderCPF = $Show['user_document']; // CPF do Comprador
    $senderAreaCode = $Show['user_ddd']; // DDD do Comprador
    $senderPhone = $Show['user_phone']; // Telefone do Comprador
    $senderEmail = 'c15014208481377709415@sandbox.pagseguro.com.br'; // E-mail do Comprador SANDBOX
    //$senderEmail =  $Show['user_email']; // E-mail do Comprador Real
    $shippingAddressStreet = $Show['address_street']; // Endereço de Envio
    $shippingAddressNumber = $Show['address_number']; // Número da Casa ou Apto de Envio
    $shippingAddressDistrict = $Show['address_neighborhood']; // Bairro de Envio
    $shippingAddressPostalCode = $Show['address_zipcode']; // CEP de Envio
    $shippingAddressCity = $Show['address_city']; // Cidade de Envio
    $shippingAddressState = $Show['address_state']; // Estado de Envio
    $shippingAddressCountry = 'BRA'; // País de Envio
	
	///Cobrança
    if($shipper == 'pac'){
        $type = 1;
    }elseif($shipper == 'sedex'){
        $type = 2;
    }else{
        $type = 3;
    }

    $shippingType = $type; //1 - PAC, 2 - SEDEX, 3 - Desconhecido
    $shippingCost =  $Show['order_shipping_value']; //Frete

    //Monta o Array com as informações que serão passadas para o PagSeguro
    $params['email'] = $PAGSEGURO_EMAIL;
    $params['token'] = $PAGSEGURO_TOKEN;
    $params['senderHash'] = $senderHash;
    $params['receiverEmail'] = $PAGSEGURO_EMAIL;
    $params['paymentMode'] = 'default';
    $params['paymentMethod'] = 'eft';
    $params['currency'] = 'BRL';
    $params['token'] = $PAGSEGURO_TOKEN;
    $params['reference'] = $ref;
    $params['senderName'] = $senderName;
    $params['senderCPF'] = $senderCPF;
    $params['senderAreaCode'] = $senderAreaCode;
    $params['senderPhone'] =  $senderPhone;
    $params['senderEmail'] =  $senderEmail;
    $params['shippingAddressStreet'] =  $shippingAddressStreet;
    $params['shippingAddressNumber'] =  $shippingAddressNumber;
    $params['shippingAddressDistrict'] =  $shippingAddressDistrict;
    $params['shippingAddressPostalCode'] =  $shippingAddressPostalCode;
    $params['shippingAddressCity'] = $shippingAddressCity;
    $params['shippingAddressState'] = $shippingAddressState;
    $params['shippingAddressCountry'] =  $shippingAddressCountry;
    $params['shippingType'] = $shippingType;
    $params['shippingCost'] = $shippingCost;

    $header = array('Content-Type' => 'application/json; charset=UTF-8;');
    $response = curlExec($PAGSEGURO_API_URL."/transactions", $params, $header);
    $json = json_decode(json_encode(simplexml_load_string($response)));

    $_SESSION['billet'] =  '<h3><a href="'. $json->paymentLink.'" target="_blank">Visualizar Boleto</a></h3>';

    $message = ["message" => "Sua está disponível, vamos direcionar você!", "status" => "success", "redirect" => 'thanks'];
    echo json_encode($message);
?>
