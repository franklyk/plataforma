<?php
/*
    ***********************************************
    DEVCLASS.PHP - PARAMETRIZAÇÃO DA BIBLIOTECA DE CLASSES DE NOSSA APLICAÇÃO.
    ***********************************************
    Copyright (c) 2022, Jeferson Souza MESTRES DO PHP
*/

namespace Models;


class DevClass
{
    /**
     * Converter Uma String (Texto ou Título) Em Link Amigável
     * @param string $string
     * @return string
     */
    public function Link(string $string){
        $space = str_replace(" ", "-", $string);
        $chars = str_replace(
            array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú',
                'Û','Ü','ü','Ý','Þ','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó',
                'ô','õ','ö','ø','ù','ú','û','ý','ý','þ','ÿ','"','!','@','#','$','%','&','*','(',')','_','-','+','=','{',
                '[','}',']','/','?,',';',':','.','º', 'ª', '²', '¹', '³'),
            array('a','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','d','n','o','o','o','o','o','o','u','u',
                'u','u','u','y','','','a','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','n','o','o',
                'o','o','o','o','u','u','u','y','y','','y','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
            , $space);
        $toLower = mb_strtolower($chars);
        $trim = trim($toLower);

        return $trim;
    }

    /**
     * Transformar Toda String em Minúsculas
     * @param string $string
     * @return string
     */
    public function Lower(string $string){
        $toLower = mb_strtolower($string);
        return $toLower;
    }

    /**
     * Transformar Toda String em Maiúsculas
     * @param string $string
     * @return string
     */
    public function Upper(string $string){
        $toUpper = mb_strtoupper($string);
        return $toUpper;
    }

    /**
     * Transformar a Primeira Letra da Primeira Palavra da Frase m Maiúscula
     * @param string $string
     * @return string
     */
    public function ToFirst(string $string){
        $toFirst = mb_convert_case($string, MB_CASE_UPPER, "UTF-8");
        return $toFirst;
    }

    /**
     * Transformar Todas as Primeiras Letras de Cada Frase em Maiúscula
     * @param string $string
     * @return string
     */
    public function WordFirst(string $string){
        $WordFirst = mb_convert_case($string,MB_CASE_TITLE, "UTF-8");
        return $WordFirst;
    }

    /**
     * Contador de Caracteres de Uma String
     * @param string $text
     * @return int
     */
    public function CountChars(string $text){
        $count = strlen($text);
        return $count;
    }

    /**
     * Limitador de Caracteres de Uma String
     * @param $limit
     * @param string $text
     * @return false|string
     */
    public function LimitChars($limit, string $text){
        $count = strlen($text);
        $result = substr($text, 0, $limit);
        return $result;
    }

    /**
     * Codificação Strings (Codifica um string ISO-8859-1 para UTF-8)
     * @param string $utf
     * @return string
     */
    public function UTFEncode(string $utf){
        $format = utf8_encode($utf);
        return $format;
    }

    /**
     * Decodificar Strings (Converte uma string com caracteres ISO-8859-1 codificadas com UTF-8 para single-byte ISO-8859-1.)
     * @param string $utf
     * @return string
     */
    public function UTFDecode(string $utf){
        $format = utf8_decode($utf);
        return $format;
    }

    /**
     * Transforma As Datas/Horas em Formato Brasileiro
     * @param $date
     * @return false|string
     */
    public function DateTimeBRL($date){
        $format = date("d/m/Y H:i:s", strtotime($date));
        return $format;
    }

    /**
     * Transforma As Datas/Horas em Formato Banco de Dados
     * @param $date
     * @return false|string
     */
    public function DateTimeFormat($date){
        $result = str_replace("/", "-", $date);
        $format = date("Y-m-d H:i:s", strtotime($result));
        return $format;
    }

    /**
     * Transforma As Datas em Formato Brasileiro
     * @param $date
     * @return false|string
     */
    public function DateBRL($date){
        $format = date("d/m/Y", strtotime($date));
        return $format;
    }

    /**
     * Transforma As Datas em Formato Banco de Dados
     * @param $date
     * @return false|string
     */
    public function DateFormat($date){
        $result = str_replace("/", "-", $date);
        $format = date("Y-m-d", strtotime($result));
        return $format;
    }

    /**
     * Valor de Desconto
     * @param $value
     * @param $discount
     * @return string
     */
    public function Discount($value, $discount){
        $discount = $value / 100 * $discount;
        $total = number_format($discount, 2,',','.');
        return $total;
    }

    /**
     * Valor Total Com Desconto
     * @param $value
     * @param $discount
     * @return string
     */
    public function DiscountValue($value, $discount){
        $discount = $value / 100 * $discount;
        $vTotal = $value - $discount;
        $total = number_format($vTotal, 2,',','.');
        return $total;
    }


    /**
     * Transforma Os Dados em Formato de Moeda Brasileira
     * @param $decimal
     * @return string
     */
    public function FormatBRL($decimal){
        $format = number_format($decimal, 2,',','.');
        return $format;
    }

    /**
     * Transforma Os Dados em Formato de Moeda Americana
     * @param $decimal
     * @return string
     */
    public function FormatUSD($decimal){
        $format = number_format($decimal, 2,'.',',');
        return $format;
    }

    /**
     * Transforma a Moeda BRL em Formato Database
     * @param $decimal
     * @return string|string[]
     */
    public function FormatDBBRL($decimal){
        $format = str_replace([".", ","], ["", "."], $decimal);
        return $format;
    }

    /**
     * Transforma a Moeda USD em Formato Database
     * @param $decimal
     * @return string|string[]
     */
    public function FormatDBUSD($decimal){
        $format = str_replace([".",","], ["","."], $decimal);
        return $format;
    }

    /**
     * Transforma números em formato mil
     * @param $decimal
     * @return string
     */
    public function FormatHundred($decimal){
        $format = number_format($decimal, 0,'','.');
        return $format;
    }

    /**
     * Método Para Leitura de Arquivos - Apresentando as Informações do Documento na Tela.
     * @param $file
     */
    public function FileRead($file){
        $fopen = fopen($file, "r");
        while($showData = fgets($fopen)){
           echo $showData ."<br>";
        }
        fclose($fopen);
    }

    /**
     * Método Para Criar Arquivo e Adicionar Conteúdos
     * @param $file
     * @param $text
     * @return bool
     */
    public function FileWrite($file, $text){
        $fopen = fopen($file, "w");
        fwrite($fopen, $text);
        fclose($fopen);

        return true;
    }

    /**
     * Método Para Leitura de Arquivos e Adicionar Novo Conteúdo
     * @param $file
     * @param $text
     * @return bool
     */
    public function FileReadWrite($file, $text){
        $fopen = fopen($file, "a+");
        fwrite($fopen, $text.PHP_EOL);
        fclose($fopen);

        return true;
    }

    /**
     * Criar Pasta Dentro do Diretório do Projeto
     * @param $dir
     * @return bool
     */
    public function CreateDir ($dir) {
        $dirVerify = str_replace("\\", "/", $dir);

        if(!is_dir($dirVerify) && !file_exists($dirVerify)){
            mkdir($dirVerify, "0755");
            return true;
        }else{
            return false;
        }
    }

    /**
     * Criar Pasta e Arquivo Dentro da Pasta
     * @param $dir
     * @param $folder
     * @param string $file
     * @param string $text
     * @return bool|null
     */
    public function CreateFileDir ($dir, $folder, $file = "", $text = ""){
        $dirVerify = str_replace("\\", "/", $dir);

        //Criar a pasta
        if(!is_dir($dirVerify) && !file_exists($dirVerify)) {
            mkdir($dirVerify, "0755");
        }

        //Criar a subpasta
       if(!is_dir($dirVerify . $folder) && !file_exists($dirVerify . $folder)){
           mkdir($dirVerify . $folder, "0755");
       }

       //Criar o arquivo com o texto
       if($file != '' || $file != null) {
           $fopen = file_put_contents($dirVerify . $folder . $file, $text . "\n", FILE_APPEND);
       }

       //Verifica se a pasta, subpasta e arquivo existem
       if(file_exists($dirVerify . $folder . $file)){
           return true;
       }else{
           return false;
       }
    }

    /**
     * Remover Arquivos Específico Dentro de um Diretório
     * @param $dir
     * @return bool|null
     */
    public function RemoveFile ($dir){
        $dirVerify = str_replace("\\", "/", $dir);

        if(file_exists($dirVerify)){
            unlink($dirVerify);
            return true;
        }else{
            return false;
        }
    }

    /**
     * Remover Multiplos Arquivos Dentro de Um Diretório
     * @param string $dir
     * @param array $files
     * @return string
     */
    public function RemoveFileMultiple (string $dir, array $files){
        $dirVerify = str_replace("\\", "/", $dir);

        if(is_dir($dirVerify) && file_exists($dirVerify)){

            for($a = 0; $a < count($files); $a++){
                if(is_dir("{$dirVerify}/{$files[$a]}") && !file_exists("{$dirVerify}/{$files[$a]}")){

                }else{
                    if(file_exists($dirVerify . $files[$a])) {
                        unlink("{$dirVerify}/{$files[$a]}");
                    }else{
                        echo "Não foi possível remover um ou mais arquivo(s)!";
                        return;
                    }
                }
            }
            echo "Arquivo(s) removido(s) com sucesso!";
        }else{
            echo "Erro: Não foi possível localizar o(s) arquivo(s)!";
        }
    }

    /** Remover Um Diretório com o PHP
     * @param $dir
     * @return bool
     */
    public function RemoveDir ($dir){
        $dirVerify = str_replace("\\", "/", $dir);
        //Lista os arquivos e remove os pontos da listagem do scandir com array_diff
        $files = array_diff(scandir($dirVerify), array(".", ".."));

        if(is_dir($dirVerify) && file_exists($dirVerify)){
            foreach($files as $file){
                if(is_dir("{$dirVerify}/{$file}")){
                    delTree("{$dirVerify}/{$file}");
                }else{
                    unlink("{$dirVerify}/{$file}");
                }
            }
            rmdir($dir);
            return true;
        }else{
            return false;
        }
    }

    /** Verificação e Validação de E-mail
     * @param $email
     * @return bool|null
     */
    public function ValidateEmail ($email) {

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return $email;
        }else{
            return false;
        }
    }

    /**
     * Criptografa Uma Senha (String)
     * @param $pass
     * @return bool|false|string
     */
    public function CreatePass ($pass) {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        if($hash){
            return $hash;
        }else{
            return false;
        }
    }

    /**
     * Verifica a Criptografia e a String Inserida Pelo Usuário
     * @param $pass
     * @param $hash
     * @return bool
     */
    public function VerifyPass ($pass, $hash) {
        $verify = password_verify($pass, $hash);

        if($verify){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Gera Automaticamente Uma Senha Criptografada
     * @return bool|false|string
     */
    public function GeneratePass (){
        $pass = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVYXWZabcdefghijklmnopqrstuvyxwz0123456789!@#$%¨&*()_+="),
            0, 12);
        $result = $this->CreatePass($pass);

        if($result){
            $v = ["pass"=> $pass, "crypt"=> $result];
           return $v;
        }else{
            return false;
        }
    }


    /*Funções Mais Complexas*/

    /**
     * Criar uma Sessão no Projeto.
     * @param array $name
     * @param array $value
     * @return bool
     */
    public function CreateSession (array $name, array $value) {
        $counterName = count($name);
        $counterValue = count($value);

        if($counterName > 0 && $counterValue > 0){
            for($e = 0; $e < $counterName; $e++){
                $_SESSION["{$name[$e]}"] = "{$value[$e]}";
            }
            return true;
        }
        return false;
    }


    /**
     * Destruir a sessão
     * @param array $session
     * @return bool
     */
    public function SessionDestroy (array $session) {
        $counterName = count($session);

        if($counterName > 0){
            for($e = 0; $e < $counterName; $e++){
               unset($_SESSION["{$session[$e]}"]);
            }
            return true;
        }
        return false;
    }

    /**
     * Criar um Cookie Personalizado
     * @param $name
     * @param $value
     * @param $timer
     * @return bool
     */
    public function CreateCookie ($name, $value, $timer) {
        $session = $value;
        $time = time() + $timer;

        setcookie($name, $session, $time, '/');
        return true;
    }

    /**
     * Realizar a Leitura do Cookie
     * @param $name
     * @return mixed
     */
    public function ReadCookie ($name) {
        return $_COOKIE["{$name}"];
    }

    /**
     * Remover um Cookie
     * @param $name
     * @return bool
     */
    public function RemoveCookie ($name) {
        setcookie("{$name}", "", time() - 3600);
        unset($_COOKIE["{$name}"]);
        return true;
    }


    /**
	 * Upload de Único Arquivo Para o Servidor - Tipo 1
     * @param $folder
     * @return string
     */
    public function UploadCover ($folder) {
       $ServerUploadSize = ini_get('post_max_size');
       //return $ServerUploadSize;

        //Carrega as opções do arquivo.
        $upload = $_FILES['file'];

        //Trata o nome do arquivo
        $fileName = $upload['name'];

        //Pega o tamanho arquivo
        $fileSize = $upload['size'];

        //Pega o tipo de arquivo
        $fileType = $upload['type'];

        //Diretório temporário do arquivo
        $fileTemp = $upload['tmp_name'];

        //Pega extensão do arquivo
        $fileExt = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

        //Verifica se há erro na execução.
        $fileError = $upload['error'];

        //Verifica o tamanho do arquivo
        if($fileSize > 5242880){
            $response = "Arquivo maior que 5 MB não é permitido!";
            return $response;
        }

        //Verifica e válida a extensão do arquivo
        if($fileExt == 'php' || $fileExt == 'js' || $fileExt == 'css' || $fileExt == 'jsp' || $fileExt == 'asp'
            || $fileExt == 'net' || $fileExt == 'exe' || $fileExt == 'bat' || $fileExt == 'msi' || $fileExt == 'cmd'
            || $fileExt == 'shell'){
            $response = "Este tipo de arquivo não é permitido!";
            return $response;
        }

         //Cria e encripta o nome do arquivo
        $newFileName = md5($fileName) .time()  .'.jpg';//. $fileExt;

        //Armazena o diretório e o nome do arquivo
        $destination = $folder . $newFileName;

        //Move o arquivo da pasta temporária para a pasta de destino
        move_uploaded_file($fileTemp, $destination);

        //Retorna o diretório com o arquivo para ser armazenado na tabela no database.
        return $newFileName;
    }

    /**
     * Upload de Único Arquivo Para o Servidor - Tipo 2
     * @param $folder
     * @return string
     */
    public function UploadFile ($folder) {
       $ServerUploadSize = ini_get('post_max_size');
       //return $ServerUploadSize;

        //Carrega as opções do arquivo.
        $upload = $_FILES['file'];

        //Trata o nome do arquivo
        $fileName = $upload['name'];

        //Pega o tamanho arquivo
        $fileSize = $upload['size'];

        //Pega o tipo de arquivo
        $fileType = $upload['type'];

        //Diretório temporário do arquivo
        $fileTemp = $upload['tmp_name'];

        //Pega extensão do arquivo
        $fileExt = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

        //Verifica se há erro na execução.
        $fileError = $upload['error'];

        //Verifica o tamanho do arquivo
        if($fileSize > 5242880){
            $response = "Arquivo maior que 5 MB não é permitido!";
            return $response;
        }

        //Verifica e válida a extensão do arquivo
        if($fileExt == 'php' || $fileExt == 'js' || $fileExt == 'css' || $fileExt == 'jsp' || $fileExt == 'asp'
            || $fileExt == 'net' || $fileExt == 'exe' || $fileExt == 'bat' || $fileExt == 'msi' || $fileExt == 'cmd'
            || $fileExt == 'shell' || $fileExt == 'jpg' || $fileExt == 'jpeg' || $fileExt == 'png' || $fileExt == 'doc'
            || $fileExt == 'docx' || $fileExt == 'xls'|| $fileExt == 'xlsx' || $fileExt == 'ppt'|| $fileExt == 'pptx'
            || $fileExt == 'pps' || $fileExt == 'ppsx'|| $fileExt == 'txt' || $fileExt == 'py'|| $fileExt == 'ini'
            || $fileExt == 'pdf' || $fileExt == 'sql'|| $fileExt == 'msg' || $fileExt == 'oft'|| $fileExt == 'eml'
            || $fileExt == 'tiff' || $fileExt == 'tif'|| $fileExt == 'gif' || $fileExt == 'html'|| $fileExt == 'htm' || $fileExt == 'src'
            || $fileExt == 'xhtml' || $fileExt == 'tmp'|| $fileExt == 'cab' || $fileExt == 'sys'|| $fileExt == 'dll'
            || $fileExt == 'rtf' || $fileExt == 'bmp'|| $fileExt == 'mp4' || $fileExt == 'mp3'|| $fileExt == 'avi'
            || $fileExt == 'wav' || $fileExt == 'vbs'|| $fileExt == 'csv' || $fileExt == 'psd'|| $fileExt == 'ai'
            || $fileExt == 'crd' || $fileExt == 'wmv'|| $fileExt == 'wma' || $fileExt == 'mov'|| $fileExt == 'mpeg'
            || $fileExt == 'mpg' || $fileExt == 'vob'|| $fileExt == 'srt' || $fileExt == 'jfif'|| $fileExt == 'raw'
            || $fileExt == 'exif' || $fileExt == 'webp'|| $fileExt == 'm4v' || $fileExt == 'mkv'|| $fileExt == 'qt'
            || $fileExt == 'avchd' || $fileExt == 'flv'|| $fileExt == 'swf' || $fileExt == 'realvideo'|| $fileExt == 'eps'
            || $fileExt == 'ogg' || $fileExt == 'aac'|| $fileExt == 'ac3' || $fileExt == 'rmvb'|| $fileExt == '7z'|| $fileExt == 'asf'){
            $response = "Este tipo de arquivo não é permitido!";
            return $response;
        }

        //Cria a pastas e subpastas com a data de hoje e no "IF" verificamos se as pastas e subpastas existem.
        $folderDir = $folder. '/'. date('Y') .'/'.date('m') .'/'.date('d') .'/';
        if(!is_dir($folderDir) && !file_exists($folderDir)){

            //Cria a pasta com o nome passado no método $folder
            if(!is_dir($folder) && !file_exists($folder)){
                mkdir($folder, 0755);
            }

            //Cria a subpasta ano
            if(!is_dir($folder .'/'. date('Y')) && !file_exists($folder .'/'. date('Y'))){
                mkdir($folder .'/'. date('Y'), 0755);
            }

            //Cria a subpasta mês
            if(!is_dir($folder .'/'. date('Y') . '/' . date('m')) && !file_exists($folder .'/'. date('Y'). '/' . date('m'))){
                mkdir($folder .'/'. date('Y'). '/' . date('m'), 0755);
            }

            //Cria a subpasta dia
            if(!is_dir($folder .'/'. date('Y') . '/' . date('m') . '/'. date('d')) && !file_exists($folder .'/'. date('Y'). '/' . date('m'). '/'. date('d'))){
                mkdir($folder .'/'. date('Y'). '/' . date('m'). '/'. date('d'), 0755);
            }
        }

        //Cria e encripta o nome do arquivo
        $newFileName = md5($fileName) .time()  .'.'. $fileExt;

        //Armazena o diretório e o nome do arquivo
        $destination = $folderDir . $newFileName;

        //Move o arquivo da pasta temporária para a pasta de destino
        move_uploaded_file($fileTemp, $destination);

        //Retorna o diretório com o arquivo para ser armazenado na tabela no database.
        return ['name'=> $fileName, 'encrypt'=>$newFileName, 'destination'=>$destination];
    }

    /**
     * Upload de Múltiplos Arquivos Para o Servidor
     * @param $folder
     */
    public function UploadMultipleFiles ($folder) {
        $ServerUploadSize = ini_get('post_max_size');
        //return $ServerUploadSize;

        //Carrega as opções do arquivo.
        $upload = $_FILES['file'];

        //Se foi submetido o formulário inicia o contador, caso contrário não.
        if($upload != ''){
            $count = count($upload['name']);
        }

        //Criamos uma rotina de loop para upload de cada um dos arquivos submetidos
        for($i = 0; $i < $count; $i++) {

            //Trata o nome do arquivo
            $fileName[$i] = $upload['name'][$i];

            //Pega o tamanho arquivo
            $fileSize[$i] = $upload['size'][$i];

            //Pega o tipo de arquivo
            $fileType[$i] = $upload['type'][$i];

            //Diretório temporário do arquivo
            $fileTemp[$i] = $upload['tmp_name'][$i];

            //Pega extensão do arquivo
            $fileExt[$i] = strtolower(pathinfo($fileName[$i], PATHINFO_EXTENSION));

            //Verifica se há erro na execução.
            $fileError[$i] = $upload['error'][$i];

            //Verifica o tamanho do arquivo
            if($fileSize[$i] > 5242880){
                $response = "O arquivo {$fileName[$i]} é maior que 5 MB não é permitido!";
                echo $response;
            }

            //Verifica e válida a extensão do arquivo
            if($fileExt[$i] == 'php' || $fileExt[$i] == 'js' || $fileExt[$i] == 'css' || $fileExt[$i] == 'jsp' || $fileExt[$i] == 'asp'
                || $fileExt[$i] == 'net' || $fileExt[$i] == 'exe' || $fileExt[$i] == 'bat' || $fileExt[$i] == 'msi' || $fileExt[$i] == 'cmd'
                || $fileExt[$i] == 'shell'){
                $response = "O arquivo {$fileName[$i]} possui uma extensão que não é permitida!";
                echo $response;
            }

            //Cria a pastas e subpastas com a data de hoje e no "IF" verificamos se as pastas e subpastas existem.
            $folderDir = $folder. '/'. date('Y') .'/'.date('m') .'/'.date('d') .'/';
            if(!is_dir($folderDir) && !file_exists($folderDir)){

                //Cria a pasta com o nome passado no método $folder
                if(!is_dir($folder) && !file_exists($folder)){
                    mkdir($folder, 0755);
                }

                //Cria a subpasta ano
                if(!is_dir($folder .'/'. date('Y')) && !file_exists($folder .'/'. date('Y'))){
                    mkdir($folder .'/'. date('Y'), 0755);
                }

                //Cria a subpasta mês
                if(!is_dir($folder .'/'. date('Y') . '/' . date('m')) && !file_exists($folder .'/'. date('Y'). '/' . date('m'))){
                    mkdir($folder .'/'. date('Y'). '/' . date('m'), 0755);
                }

                //Cria a subpasta dia
                if(!is_dir($folder .'/'. date('Y') . '/' . date('m') . '/'. date('d')) && !file_exists($folder .'/'. date('Y'). '/' . date('m'). '/'. date('d'))){
                    mkdir($folder .'/'. date('Y'). '/' . date('m'). '/'. date('d'), 0755);
                }

                //Cria e encripta o nome do arquivo
                $newFileName[$i] = md5($fileName[$i]) .time()  .'.'. $fileExt[$i];

                //Armazena o diretório e o nome do arquivo
                $destination[$i] = $folderDir . $newFileName[$i];

                if($fileName[$i] != '') {
                    //Move o arquivo da pasta temporária para a pasta de destino
                    move_uploaded_file($fileTemp[$i], $destination[$i]);

                    //Retorna o diretório com o arquivo para ser armazenado na tabela no database.
                    echo $destination[$i];
                }
            }

            //Caso a pasta e as subpastas já existam cairá nesse código direto.
            //Cria e encripta o nome do arquivo
            $newFileName[$i] = md5($fileName[$i]) .time()  .'.'. $fileExt[$i];

            //Armazena o diretório e o nome do arquivo
            $destination[$i] = $folderDir . $newFileName[$i];

            if($fileName[$i] != '') {
                //Move o arquivo da pasta temporária para a pasta de destino
                move_uploaded_file($fileTemp[$i], $destination[$i]);

                //Retorna o diretório com o arquivo para ser armazenado na tabela no database.
                echo $destination[$i];
            }
        }
    }

    /**
     * @param $folderName
     * @param $file
     * @param $destination
     * @return string[]
     */
    public function CloneFile ($folderName, $file, $destination){
        //Renomear os arquivos.
        $fileName = date('YmdHis').rand(100,10000).$file;

        //Verifica se a pasta já existe antes de copiar os arquivos, se não existir cria a pasta com a data de hoje
        $folder = $configBase .$folderName; //Recupera a pasta de destino

        //Cria a pastas e subpastas com a data de hoje e no "IF" verificamos se as pastas e subpastas existem.
        $folderDir = $folder. '/'. date('Y') .'/'.date('m') .'/'.date('d') .'/';

        if(!is_dir($folderDir) && !file_exists($folderDir)){

            //Cria a pasta com o nome passado no método $folder
            if(!is_dir($folder) && !file_exists($folder)){
                mkdir($folder, 0755);
            }

            //Cria a subpasta ano
            if(!is_dir($folder .'/'. date('Y')) && !file_exists($folder .'/'. date('Y'))){
                mkdir($folder .'/'. date('Y'), 0755);
            }

            //Cria a subpasta mês
            if(!is_dir($folder .'/'. date('Y') . '/' . date('m')) && !file_exists($folder .'/'. date('Y'). '/' . date('m'))){
                mkdir($folder .'/'. date('Y'). '/' . date('m'), 0755);
            }

            //Cria a subpasta dia
            if(!is_dir($folder .'/'. date('Y') . '/' . date('m') . '/'. date('d')) && !file_exists($folder .'/'. date('Y'). '/' . date('m'). '/'. date('d'))){
                mkdir($folder .'/'. date('Y'). '/' . date('m'). '/'. date('d'), 0755);
            }
        }

        //Cria a url de destino
        $Dir = date('Y') .'/'.date('m') .'/'.date('d') .'/';

        //Cria cópias dos documentos que já existem renomeando os nomes
        $svdocuments_destination = '../../Documents/'.$Dir . $fileName; //Armazena o diretório e o nome do arquivo

        //Move o arquivo da pasta temporária para a pasta de destino
        copy($destination, $svdocuments_destination);

        //Retorna o diretório com o arquivo para ser armazenado na tabela no database.
        return ['name'=> $fileName, 'destination'=>$svdocuments_destination];
    }

    /**
     * @param $origin
     * @param $destination
     * @param $weight
     * @param $value
     * @param $type
     * @param $height
     * @param $width
     * @param $length
     * @param int $format
     * @param string $company
     * @param string $passW
     * @return string[]
     */
    public function CalcShipping($origin, $destination, $weight, $value, $type, $height, $width, $length, $format = 1, $company='', $passW=''){
        //Código da Empresa do Contrato de Serviços dos Correios
        $dataShip['nCdEmpresa'] = $company;

        //Senha da Empresa do Contrato de Serviços dos Correios
        $dataShip['sDsSenha'] = $passW;

        //Cep de origem
        $dataShip['sCepOrigem'] = $origin;

        //Cep de destino
        $dataShip['sCepDestino'] = $destination;

        //Formato da encomenda (incluindo embalagem).
        //Valores possíveis: 1, 2 ou 3
        //1 – Formato caixa/pacote
        //2 – Formato rolo/prisma
        //3 - Envelope
        $dataShip['nCdFormato'] = $format;

        //Peso do Pacote ou Encomenda
        $dataShip['nVlPeso'] = $weight;

        //O comprimento do Objeto
        $dataShip['nVlComprimento'] = $length;

        //A altura do objeto
        $dataShip['nVlAltura'] = $height;

        // A largura do objeto
        $dataShip['nVlLargura'] = $width;

        //Diâmetro do objeto
        $dataShip['nVlDiametro'] = '0';

        //Serviço Adicional de Entrega em Mãos Próprias do Comprador ou Terceiros Autorizados (s para SIM e n para NÃO)
        $dataShip['sCdMaoPropria'] = s;

        //Valor Declarado do Pedido ou Compra
        $dataShip['nVlValorDeclarado'] = $value;

        //Serviço Adicional de Aviso de Recebimento (AR)(s para SIM e n para NÃO)
        $dataShip['sCdAvisoRecebimento'] = s;

        //Tipo de Retorno (xml, popup, url)
        $dataShip['StrRetorno'] = 'xml';

        //Tipo de Serviço de Frete
        //40010 SEDEX
        //40045 SEDEX a Cobrar
        //40215 SEDEX 10
        //40290 SEDEX Hoje
        //41106 PAC
        $dataShip['nCdServico'] = $type;

        //Gera a string de consulta formato url
        $dataShip = http_build_query($dataShip);

        $url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
        $curl = curl_init($url . '?' . $dataShip);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        $resultXml = simplexml_load_string($result);

        foreach ($resultXml->cServico as $data):
            $recovery = ($data->Codigo == '41106' ?['pac' => (string)$data->Valor, 'pacDays' => (string)$data->PrazoEntrega, 'ARPac' => (string)$data->ValorAvisoRecebimento] :  ['sedex' => (string)$data->Valor, 'sedexDays' => (string)$data->PrazoEntrega, 'ARSedex' => (string)$data->ValorAvisoRecebimento]);
            return $recovery;
        endforeach;

    }
}