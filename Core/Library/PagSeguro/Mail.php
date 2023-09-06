<?php
require("../PHPMailer/class.phpmailer.php");
require '../PHPMailer/class.smtp.php';
require '../../Config.php';

function MailPayment($Email, $Cliente, $Reference){

    $data = date('d/m/Y H:i:s');
    $mail = new PHPMailer();
    $mail -> CharSet ="utf-8";
    $mail -> IsSMTP ();
    $mail -> Host  =  $mailHost ;
    $mail -> SMTPAuth  =  true ;
    $mail -> SMTPSecure  = $mailSecure ;
    $mail -> Username  =  $mailUser;
    $mail -> Password  =  $mailPass ;
    $mail -> Port  = $mailPort;
    $mail -> IsHTML (true);
    $mail ->AddReplyTo($Email, $Cliente);

    $mail->From = $mailResponse;
    $mail->Sender = $mailResponse;
    $mail->FromName = $titleSite;

    $mail->AddAddress($Email);
    $mail->AddBCC($mailResponse);

    $mail->Subject  = 'PARABÉNS! Estamos confirmando o pagamento';

    $mail->Body='
        <h1 style="text-align:center; color: #333; font-size: 1.2em;">PARABÉNS '.$Cliente.'!<br> 
        Estamos confirmando que recebemos o seu pagamento referente ao pedido '.$Reference.'</h1>
        
        <p>Ótima notícia, estamos preparando o seu pedido, e em breve, você receberá um novo e-mail quando terminarmos de separar
        o seu pedido. Fique alerta ao seu e-mail.</p>
        <p>Agradecemos o seu contato e esperamos você em nossa loja.</p>

        <p style="text-align:center; color: #333; font-size: 0.9em;">Mensagem Enviada: '.$data.'</p>
    ';

$enviado = $mail->Send();
}

function MailChargeBack($Email, $Cliente, $Reference){

    $data = date('d/m/Y H:i:s');
    $mail = new PHPMailer();
    $mail -> CharSet ="utf-8";
    $mail -> IsSMTP ();
    $mail -> Host  =  $mailHost ;
    $mail -> SMTPAuth  =  true ;
    $mail -> SMTPSecure  = $mailSecure ;
    $mail -> Username  =  $mailUser;
    $mail -> Password  =  $mailPass ;
    $mail -> Port  = $mailPort;
    $mail -> IsHTML (true);
    $mail ->AddReplyTo($Email, $Cliente);

    $mail->From = $mailResponse;
    $mail->Sender = $mailResponse;
    $mail->FromName = $titleSite;

    $mail->AddAddress($Email);
    $mail->AddBCC($mailResponse);

    $mail->Subject  = 'PARABÉNS! Estamos confirmando o pagamento';

    $mail->Body='
        <h1 style="text-align:center; color: #333; font-size: 1.2em;">Caro '.$Cliente.'!<br> 
        Estamos confirmando que o valor referente ao pedido '.$Reference.' foi devolvido.</h1>
        
        <p>Conforme a sua solicitação anteriormente, estamos devolvendo o valor integral de seu pedido via transferência
        bancária. Em breve, o saldo estará disponível em sua conta bancária</p>
        
        <p>Agradecemos o seu contato e esperamos você em nossa loja.</p>
                
        <p style="text-align:center; color: #333; font-size: 0.9em;">Mensagem Enviada: '.$data.'</p>
    ';

    $enviado = $mail->Send();
}

function MailCancel($Email, $Cliente, $Reference){

    $data = date('d/m/Y H:i:s');
    $mail = new PHPMailer();
    $mail -> CharSet ="utf-8";
    $mail -> IsSMTP ();
    $mail -> Host  =  $mailHost ;
    $mail -> SMTPAuth  =  true ;
    $mail -> SMTPSecure  = $mailSecure ;
    $mail -> Username  =  $mailUser;
    $mail -> Password  =  $mailPass ;
    $mail -> Port  = $mailPort;
    $mail -> IsHTML (true);
    $mail ->AddReplyTo($Email, $Cliente);

    $mail->From = $mailResponse;
    $mail->Sender = $mailResponse;
    $mail->FromName = $titleSite;

    $mail->AddAddress($Email);
    $mail->AddBCC($mailResponse);

    $mail->Subject  = 'PARABÉNS! Estamos confirmando o pagamento';

    $mail->Body='
        <h1 style="text-align:center; color: #333; font-size: 1.2em;">Caro '.$Cliente.'!<br> 
        Estamos confirmando que estamos cancelando o pedido '.$Reference.' por alguns dos motivos abaixo:</h1>
         
        <p>- Falta de Pagamento ou Saldo Insuficiente em seu Cartão de Crédito</p>
        <p>- Fraude ou Tentativa de Fraude</p>
        <p>- Solicitação de Cancelamento de Compra do Cliente ou do Dono do Cartão</p>
        <p><i>Informamos caso o cliente deseje permanecer reativar o pedido, poderá fazê-lo, respondendo este e-mail 
        que enviaremos um link para que o pagamento seja feito via boleto.</i></p>
          
        <p>Agradecemos o seu contato e esperamos você em nossa loja.</p>

        <p style="text-align:center; color: #333; font-size: 0.9em;">Mensagem Enviada: '.$data.'</p>
    ';

    $enviado = $mail->Send();
}

?>