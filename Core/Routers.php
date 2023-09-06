<?php
    $configUrl = explode('/', strip_tags(filter_input(INPUT_GET, 'route', FILTER_DEFAULT)));
    $configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : 'index');

    if($configUrl[0] == 'admin'){
        $themes = "Themes/Admin/";
    }else if($configUrl[0] == 'painel'){
        $themes = "Themes/Painel/";
    }else{
        $themes = "Themes/Loja/";
    }
    if($configUrl[0] !== 'admin' && $configUrl[0] !== 'painel' && file_exists("{$themes}{$configUrl[0]}.php"))  {
        //Arquivo
        require "{$themes}{$configUrl[0]}.php";
    }elseif(!empty($configUrl[1]) && file_exists("{$themes}{$configUrl[1]}.php") && !is_dir("{$themes}{$configUrl[1]}.php")){
        //Pasta/Arquivo
        require "{$themes}{$configUrl[1]}.php";

    }elseif(!empty($configUrl[2]) && file_exists("{$themes}{$configUrl[1]}/{$configUrl[2]}.php") && !is_dir("{$themes}{$configUrl[1]}/{$configUrl[2]}.php")){
        //Pasta/Subpasta/Arquivo || No caso deste projeto a especificação será //Pasta/Arquivo/Parametro
        require "{$themes}{$configUrl[1]}/{$configUrl[2]}.php";

    }else{
        require '404.php';
    }