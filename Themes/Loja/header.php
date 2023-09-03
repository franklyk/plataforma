<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/Css/Views.css">
</head>
<body>
    <header class="header_bg">
        <div class="header_top">
            <div class="divisor2">
                <p class="text-left ">
                    <i class="fa fa-truck"></i> Entregamos em todo o Brasil!
                </p>
            </div>
            <div class="divisor2 text-right" >
                <p class="text-right">
                    <a href="#" title="Acesse o Facebook da Loja" class=" radius btn_off">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" title="Acesse o Instagram da Loja" class="radius btn_off">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" title="Acesse o Twitter da Loja" class="radius btn_off">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" title="Acesse o WatsApp da Loja" class="radius btn_off">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="mailto: <?= $mailSite ?>" title="Acesse o E-mail da Loja" class="radius btn_off">
                        <i class="fa fa-envelope"></i> 
                    </a>
                    <a href=" <?= $configBase ?>login " title=" Faça o login e acesse seus pedidos! " class="radius btn_off">
                        <i class=" fa fa-unlock "></i>
                    </a>
                </p>
            </div>
                
            <div class="clear"></div>
            </div>
        </div>
        <div class="header_main radius">
            <div class="logo">
                <a href="<?= $configBase ?> home" title="Retornar a pagina inicial">
                    <img src="Images/General/logo.png" title="Logomarca da empresa <?= $titleSite?>" alt=" Logomarca da empresa <?= $titleSite?>">
                </a>
            </div>
            <form action="" method="post" id="frm_search" class="frm_search">
                    <input type="text" name="input_search" id="input_search" placeholder="Ex. Tênis Adidas" class="radius input_search">
                
                    <button type="submit" name="btn_search" id="btn_search" class="radius btn_edit btn_form">
                        <i class="fa fa-search"></i>
                    </button>
            </form>
            <div class="contact_mail">
                <p class="text-center">
                    <i class="fa fa-envelope"></i>
                    <?= $mailSite ?>

                </p>
                <p class="text-center">
                    <i class="fa fa-phone"></i>
                    <?= $phoneSite ?>
                </p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_footer">
            <ul class="navigator">
                <a href="<?= $configBase ?>categories/ofers" title="Conheça Nossas Promoções" class="radius">
                <li>Promoções</li>
                </a>
                <a href="<?= $configBase ?>categories/shoes" title="Conheça Nossos Famosos Calçados" class="radius">
                <li>Calçados</li>
                </a>
                <a href="<?= $configBase ?>categories/clotchig" title="Conheça Nossas Roupas" class="radius">
                <li>Roupas</li>
                </a>
                <a href="<?= $configBase ?>cart" title="Confira o Seu Carrinho de Compras" class="radius">
                <li>
                    <span>99</span>
                    <i class="fa fa-shopping-cart"></i>
                </li>
                </a>
            </ul>
        </div>
    </header>
</body>
</html>