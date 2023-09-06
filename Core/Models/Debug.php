<?php
/*
    ***********************************************
    DEBUG.PHP - PARAMETRIZAÇÃO DE DEBUG DE DADOS DE NOSSA APLICAÇÃO.
    ***********************************************
    Copyright (c) 2022, Jeferson Souza MESTRES DO PHP
*/
namespace Models;

ini_set('xdebug.overload_var_dump', 1);

class Debug{
   // public $varDump;
    public $variable;

    /**
     * @param $variable
     * @return string
     */
    public function debug_string($variable){
        
        if(!is_array($variable)):
            $string = "<pre>";
            $string .= "RETORNO: <b>[String]</b><br><br>";
            $string .= $variable;
            $string .= "</pre>";
            return $string;
        else:
            $string = "<pre>";
            $string .= "RETORNO: <b>[String = FALSE]</b><br><br>";
            $string .= "Esta informação não é uma string válida! <b></b>";
            $string .= "</pre>";
            return $string;
        endif;
    }

    /**
     * @param $variable
     * @return string
     */
    public function debug_array($variable){
        if(is_array($variable)):
             $array = "<pre>";
                $array .= "RETORNO: <b>[Array]</b><br><br>";

                foreach($variable as $key => $value):
                    $array.=  "[".$key."] => ".$value."<br/>";
                endforeach;

                $array .= "</pre>";
                return $array;
        else:
            $array = "<pre>";
            $array .= "RETORNO: <b>[Array = FALSE]</b><br><br>";
            $array .= "Esta informação não é um array válido! <b></b>";
            $array .= "</pre>";
            return $array;
        endif;
    }

    /**
     * @param $variable
     * @return string
     */
    public function debug_object($variable){
         if(is_object($variable)):
            $var = array($variable);
            $object = "<pre>";
            $object .= "RETORNO: <b>[Objeto - ".get_class($variable)."]</b><br><br>";
            
            //Tratamento de caracteres da Query String
            $build = http_build_query($variable);
            $clean = str_replace('+', ' ', $build);
            $equal = str_replace('%3D', '=', $clean);
            $points = str_replace('%3A', ':', $equal);
            $universal = str_replace('%2A', '*', $points);
            $interrogation = str_replace('%3F', '?', $universal);
            $exclamation = str_replace('%3F', '!', $interrogation);
            $queryString = str_replace('queryString=', '<b>[Query String]</b> ', $exclamation);
            
            $object .= $queryString;
            $object .= "</pre>";
            return $object;
        else:
            $object = "<pre>";
            $object .= "RETORNO: <b>[Objeto = FALSE]</b><br><br>";
            $object .= "Esta informação não é um objeto válido! <b></b>";
            $object .= "</pre>";
            return $object;
        endif;
    }
    
    
}