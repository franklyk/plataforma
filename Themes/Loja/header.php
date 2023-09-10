<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/Css/Views.css">
</head>
<body>
    <header class="header_bg">
        <div class="header_main radius">

            <div class="logo">
                <a href="<?= $configBase ?> home" title="Retornar a pagina inicial">
                    <img src="Images/General/logo.png" title="Logomarca da empresa <?= $titleSite?>" alt=" Logomarca da empresa <?= $titleSite?>">
                </a>
            </div>

            <form action="" method="post" id="frm_search" class="frm_search">
                    <input type="text" name="input_search" id="input_search" placeholder="Ex. Tênis Adidas" class="radius input_search"/>
                
                    <button type="submit" name="btn_search" id="btn_search" class="radius btn_edit btn_form">
                        <i class="fa fa-search"></i>
                    </button>
            </form>
            <div class="socials">
                <a href="#" title="Acesse o Facebook da Loja" class=" radius btn_edit font-text-medium">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" title="Acesse o Instagram da Loja" class="radius btn_edit font-text-medium">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" title="Acesse o Twitter da Loja" class="radius btn_edit font-text-medium">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" title="Acesse o WatsApp da Loja" class="radius btn_edit font-text-medium">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#" title="Acesse o E-mail da Loja" class="radius btn_edit font-text-medium">
                    <i class="fa fa-phone"></i> 
                </a>
                <a href="mailto: <?= $mailSite ?>" title="Acesse o E-mail da Loja" class="radius btn_edit font-text-medium">
                    <i class="fa fa-envelope"></i> 
                </a>
                <button type="submit" title=" Faça o login e acesse seus pedidos! " id="btn_register" class="radius btn_edit font-text-medium" value="login">
                    <i class=" fa fa-unlock "></i>
                    Login
                </button>
            </div>
            
        </div>
        <div class="header_footer">
            
            <ul class="navigator">
                <li>
                    <a href="<?= $configBase ?>categories/ofers" title="Conheça Nossas Promoções" class="radius color-green font-text-min font-weight-max">
                    Promoções
                    </a>
                </li>
                <li>
                    <a href="<?= $configBase ?>categories/shoes" title="Conheça Nossos Famosos Calçados" class="radius color-green font-text-min font-weight-max">
                    Calçados
                    </a>
                </li>
                <li>
                    <a href="<?= $configBase ?>categories/clotchig" title="Conheça Nossas Roupas" class="radius color-green font-text-min font-weight-max">
                    Roupas
                    </a>
                </li>
                <li>
                    <a href="<?= $configBase ?>cart" title="Confira o Seu Carrinho de Compras" class="radius color-green font-text-medium font-weight-max">
                        <span class="font-weight-min font-text-sub bgcolor-red">99</span>
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                </li>
            </ul>
            
        </div>
    </header>
</body>
</html>