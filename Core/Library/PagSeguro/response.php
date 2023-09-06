<?php 
header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");

require 'PagSeguroLibrary/PagSeguroLibrary.php';

require '../../Config.php';
require '../../Database/UpdateData.php';
require '../../Database/ReadData.php';

$Read = new \Database\ReadData();
$Update = new \Database\UpdateData();

	if(isset($_POST['notificationType']) && $_POST['notificationType'] == 'transaction'){

        $email = $PAGSEGURO_EMAIL;
		$token = $PAGSEGURO_TOKEN;

       // $url = 'https://ws.pagseguro.uol.com.br/v2/transactions/notifications/' . $_POST['notificationCode'] . '?email=' . $email . '&token=' . $token;
        $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/transactions/notifications/' . $_POST['notificationCode'] . '?email=' . $email . '&token=' . $token;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $transaction= curl_exec($curl);
        curl_close($curl);

        if($transaction == 'Unauthorized'){
            print_r("nao autorizado");
            exit;
		}
        $transaction = simplexml_load_string($transaction);

        $status = $transaction -> status;
        $Pedido = $transaction -> reference;
		
		//Atualiza tabela de pedido e_order com o novo status que o PagSeguro enviar
        $ValuesUpdated = [$Pedido, $status];
        $ParamsUpdated = ['order_session', 'order_payment'];
        $ConditionsUpdated = 'order_session = :order_session';
        $Update -> Query(DB_ORDER, $ParamsUpdated, $ValuesUpdated, $ConditionsUpdated);

        //Faz uma query para obter os dados básicos do pedido para enviar um e-mail para o usuário
        $Indexes = 'a.order_session, a.order_status, a.user_id, b.user_id, b.user_name, b.user_email';
        $Values = [$Pedido];
        $Params = ['order_session'];
        $Conditions = 'a.order_session = :order_session';
        $sql = DB_ORDER . " a INNER JOIN ". DB_USER . " b ON (b.user_id = a.user_id)";

        $Read->Query($sql, $Values, $Params, $Conditions, $Indexes);

        $Lines = $Read->Lines();
		
		if($Lines == 0):
		
		else:
		foreach($Read->Result() as $Show):
		endforeach;
		$Email = strip_tags($Show['user_email']);
		$Cliente = strip_tags($Show['user_name']);
		$Status = strip_tags($Show['order_status']);
		$Reference = $Pedido;
		
		include_once 'Mail.php';
		if($status == 3 || $status == 4):
			MailPayment($Email, $Cliente, $Reference);
		elseif($status == 6):
            MailChargeBack($Email, $Cliente, $Reference);
        elseif($status == 7):
            MailChargeCancel($Email, $Cliente, $Reference);
		else:
		
		endif;
		endif;
    }
	
?>