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


    ///////////////////////////////////////////////////
   ///Código recuperado a partir de template pronto///
  ///////////////////////////////////////////////////
// $configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "route", FILTER_DEFAULT)));
// $configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");

// //SEARCH
// $searchForm =  strip_tags(trim(filter_input(INPUT_POST, "search", FILTER_DEFAULT)));
// // $configBase = BASE;
// // $themeSite = THEME_PATH_SITE;

// //Se existir algum conteúdo na pesquisa, e o cliente/usuário já estiver na própria page pesquisa.php, permanece nela
// if (!empty($searchForm && $configUrl[0] == 'search')) {
//     header("Location: {$searchForm}");
//     exit;
// }

// //Se existir algum conteúdo na pesquisa, navega para a página pesquisa.php, mostrando o resultado
// if (!empty($searchForm  && $configUrl[0] != 'search')) {
// 	header("Location: search/{$searchForm}");
//     exit;
// }

// //Recupera o valor inserido pelo cliente/usuário
// $empty = strip_tags(filter_input(INPUT_POST, "search", FILTER_DEFAULT));

// //Verifica o campo de formulário da pesquisa está vazio ou não, se estiver vazio apenas redireciona o cliente/usuário para a página inicial
// if (isset($_POST['search']) && $empty == '') {
//     header("Location: {$configBase}");
//     exit;
// }

// //Se existir algum conteúdo na blog, navega para a página index.php, mostrando o resultado
// /*if (!empty($configUrl[0] == 'blog')) {
// 	header("Location: articles/");
//     exit;
// }*/

// //QUERY STRING
// if (file_exists("{$themePathSite}/{$configUrl[0]}.php") && !is_dir("{$themePathSite}/{$configUrl[0]}.php")) {
// 	require "{$themePathSite}/{$configUrl[0]}.php";

// } elseif (!empty($configUrl[2]) && file_exists("{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}/{$configUrl[2]}.php") && !is_dir("{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}/{$configUrl[2]}.php")) {
// 	//theme folder
// 	require "{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}/{$configUrl[2]}.php";

// } elseif (!empty($configUrl[1]) && file_exists("{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}.php") && !is_dir("{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}.php")) {
// 	//theme folder
// 	require "{$themePathSite}/{$configUrl[0]}/{$configUrl[1]}.php";
	
// } else {
// 	//theme 404
// 	if (file_exists("{$themePathSite}/404.php") && !is_dir("{$themePathSite}/404.php")) {
// 		require "{$themePathSite}/404.php";
// 		//echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe, mas a página não existe!</div></div>";
// 	} else {
// 		require "{$themePathSite}/404.php";
// 		//echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe, mas a página não existe!</div></div>";
// 	}
// }