<?php

    //Iniciando todas as seções da aplicação
    session_start();

    //Configuração da data e hora do servidor
    date_default_timezone_set('America/Sao_paulo');
    // date_default_timezone_get('America/Sao Paulo');
    //Configurções do site
    $configBase = 'http://localhost/plataforma/';
    $imageSite = 'default.png';
    $titleSite = 'Store Masters';
    $description = 'Loja para teste de e-commerce';
    $mailSite = 'contato@email.com';
    $phoneSite = '+5561123456789';
    $whatsappSite = '+5561123456789';
    $statusSite = 1; // [0] = Off line / [1] = On line / [2] = Em manutenção
    $hellobar = 0; //[0] = Desativado / [1] = Ativado


    //Configuarções do Author
    $nameAuthor = 'Franklin Da KLYK / WEB-SITES';
    $mailAuthor = "mail@email.com";
    $phoneAuthor = '5561993688275';


    //Navegação Dinamica do Site
    $themeSite = 'Themes/Loja';
    $themePainel = 'Themes/Painel';
    $themeAdmin = 'Themes/Admin';

    //Configurações do Banco de dados


    //Configuraçoes dos perfis de acesso
    
    
    
    //Configurações de redes sociais

    //Configurações de GUID

?>
<?php
/*
    ***********************************************
    CONFIG.PHP - PARAMETRIZAÇÃO DE NOSSA APLICAÇÃO.
    ***********************************************
    Copyright (c) 2022, Jeferson Souza MESTRES DO PHP
*/

//Iniciando a Sessão em Toda Nossa Aplicação
// session_start();

// //Configurando o Timezone e a Data Hora do Nosso Servidor
// date_default_timezone_set("America/Sao_paulo");

// /*Configuações da Aplicação */
// $configBase = "http://localhost/lojavirtual/"; //Url da Aplicação;
// $titleSite = "Mestres Store"; //Título de sua Aplicação
// $description = "Loja virtual para vendas de produtos da empresa Mestres Store"; //Descrição da Aplicação
// $mailSite = "contato@mestresdophp.com.br"; //E-mail do Cliente ou Dono da Aplicação
// $whatsappSite = "(11) xxxxx-xxxx"; //Whatsapp do Cliente ou Empresa Cliente
// $phoneSite = "(11) xxxxx-xxxx"; //Telefone do Cliente ou Empresa Cliente
// $statusSite = 1; //0=>offline, 1=>online, 2=>maintenance  [Status da aplicação]
// $helloBar = 1;  //0=>offline, 1=>online [Status do HelloBar]

// /* Configurações do Autor */
// $nameAuthorSite = "Mestres do PHP - Soluções Inteligentes"; //Nome do Autor
// $mainAuthorSite = "contato@mestresdophp.com.br"; //E-mail do Autor
// $phoneAuthorSite = "(11) xxxxx-xxxx"; //Telefone do Autor

// /* Configurações de Servidor de E-mail */
// $mailHost = ""; //Definição Configuração de Host do Servidor
// $mailSMTP =  ""; //Definição Configuração de SMTP do Servidor
// $mailUser = ""; //Definição Configuração de Login de Usuário
// $mailPass = ""; //Definição Configuração de Senha de Acesso
// $mailResponse = ""; //Definição Configuração de E-mail Para Resposta
// $mailPort = 465; //Definição Configuração de Porta do Servidor [587 ou 465]
// $mailSecure = "SSL"; //Definição Configuração de Segurança [TLS/SSL]

// /* Configurações de Temas */
// $themeSite = "Loja"; //Definição Configuração Tema do Site
// $themeAdmin = "Admin"; //Definição Configuração Tema do Administrativo
// $themeClient = "Painel"; //Definição Configuração Tema do Painel de Controle

// /* Configurações de Diretórios de Temas */
// $themePathAdmin = "Themes/".$themeAdmin; //Definição Configuração do Diretório do Tema do Painel Administrativo
// $themePathClient =  "Themes/".$themeClient; //Definição Configuração do Diretório do Tema do Painel do Cliente ou Usuário
// $themePathSite =  "Themes/".$themeSite; //Definição Configuração do Diretório do Tema do Site

// /* Configurações Redes Sociais*/
// $facebook = 'https://www.facebook.com/groups/phpbr/';
// $twitter = 'https://twitter.com/phpstorm';
// $instagram = 'https://www.instagram.com/mestresdophpoficial/';
// $youtube = 'https://www.youtube.com/c/MestresdoPHPTreinamentos?sub_confirmation=1';
// $whatsapp = 'https://wa.me/55119999999999';

// /* Configurações de Níveis de Acesso */
// define("LEVEL_USER", 1); //Nível de Acesso Para Usuários [Operacionais]
// define("LEVEL_CLIENT", 2); //Nível de Acesso Para Clientes [Coordenadores de Equipes]
// define("LEVEL_ADMIN", 9); //Nível de Acesso Para Administradores [Administrador Responsável pela Aplicação]
// define("LEVEL_SUPER", 10); //Nível de Acesso Para Profissional Web [Você]

// define('BLOCKED', 1); //Bloqueio o Usuário Após 6 Tentativas de Senha Errado
// define('TIMESBLOCKED', 6); //Quantas Tentativas Usuário Pode Fazer Antes de Bloquear
// define('REMEMBER', 1); //Lembrar Senha


// /*Criação do Guid*/
// if (!function_exists('com_create_guid')) {
//     function com_create_guid()
//     {
//         return sprintf(
//             '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
//             mt_rand(0, 0xffff),
//             mt_rand(0, 0xffff),
//             mt_rand(0, 0xffff),
//             mt_rand(0, 0x0fff) | 0x4000,
//             mt_rand(0, 0x3fff) | 0x8000,
//             mt_rand(0, 0xffff),
//             mt_rand(0, 0xffff),
//             mt_rand(0, 0xffff)
//         );
//     }
// }

// function valorPorExtenso($valor=0) {
//     $singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
//     $plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões","quatrilhões");

//     $c = array("", "cem", "duzentos", "trezentos", "quatrocentos","quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
//     $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta","sessenta", "setenta", "oitenta", "noventa");
//     $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze","dezesseis", "dezessete", "dezoito", "dezenove");
//     $u = array("", "um", "dois", "três", "quatro", "cinco", "seis","sete", "oito", "nove");

//     $z=0;

//     $valor = number_format($valor, 2, ".", ".");
//     $inteiro = explode(".", $valor);
//     for($i=0;$i<count($inteiro);$i++)
//         for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
//             $inteiro[$i] = "0".$inteiro[$i];

//     // $fim identifica onde que deve se dar junção de centenas por "e" ou por "," ;)
//     $fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
//     for ($i=0;$i<count($inteiro);$i++) {
//         $valor = $inteiro[$i];
//         $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
//         $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
//         $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

//         $r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd && $ru) ? " e " : "").$ru;
//         $t = count($inteiro)-1-$i;
//         $r .= $r ? " ".($valor > 1 ? $plural[$t] : $singular[$t]) : "";
//         if ($valor == "000")$z++; elseif ($z > 0) $z--;
//         if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t];
//         if ($r) $rt = $t . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
//     }

//     return($rt ? $rt : "zero");
// }

// function valorPorExtensoUsd($valor=0) {
//     $singular = array("cent", "dólar", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
//     $plural = array("cent", "dólares", "mil", "milhões", "bilhões", "trilhões","quatrilhões");

//     $c = array("", "cem", "duzentos", "trezentos", "quatrocentos","quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
//     $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta","sessenta", "setenta", "oitenta", "noventa");
//     $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze","dezesseis", "dezessete", "dezoito", "dezenove");
//     $u = array("", "um", "dois", "três", "quatro", "cinco", "seis","sete", "oito", "nove");

//     $z=0;

//     $valor = number_format($valor, 2, ".", ".");
//     $inteiro = explode(".", $valor);
//     for($i=0;$i<count($inteiro);$i++)
//         for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
//             $inteiro[$i] = "0".$inteiro[$i];

//     // $fim identifica onde que deve se dar junção de centenas por "e" ou por "," ;)
//     $fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
//     for ($i=0;$i<count($inteiro);$i++) {
//         $valor = $inteiro[$i];
//         $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
//         $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
//         $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

//         $r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd && $ru) ? " e " : "").$ru;
//         $t = count($inteiro)-1-$i;
//         $r .= $r ? " ".($valor > 1 ? $plural[$t] : $singular[$t]) : "";
//         if ($valor == "000")$z++; elseif ($z > 0) $z--;
//         if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t];
//         if ($r) $rt = $t . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
//     }

//     return($rt ? $rt : "zero");
// }

// function valorPorCultura($valor=0) {

//     $c = array("", "cem", "duzentas", "trezentas", "quatrocentas","quinhentas", "seiscentas", "setecentas", "oitocentas", "novecentas");
//     $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta","sessenta", "setenta", "oitenta", "noventa");
//     $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze","dezesseis", "dezessete", "dezoito", "dezenove");
//     $u = array("", "um", "dois", "três", "quatro", "cinco", "seis","sete", "oito", "nove");

//     $z=0;

//     $valor = number_format($valor, 2, ".", ".");
//     $inteiro = explode(".", $valor);
//     for($i=0;$i<count($inteiro);$i++)
//         for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
//             $inteiro[$i] = "0".$inteiro[$i];

//     // $fim identifica onde que deve se dar junção de centenas por "e" ou por "," ;)
//     $fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
//     for ($i=0;$i<count($inteiro);$i++) {
//         $valor = $inteiro[$i];
//         $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
//         $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
//         $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

//         $r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd && $ru) ? " e " : "").$ru;
//         $t = count($inteiro)-1-$i;
//         $r .= $r ? " ".($valor > 1 ? "" : "") : "";
//         if ($valor == "000")$z++; elseif ($z > 0) $z--;
//         if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "");
//         if ($r) $rt = $t . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
//     }

//     return($rt ? $rt : "zero");
// }

// function valorPorDate($valor=0) {

//     setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
//     date_default_timezone_set('America/Sao_Paulo');
//     return strftime('%d de %B de %Y', strtotime($valor));
// }
