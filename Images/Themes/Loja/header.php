
<!DOCTYPE html>
    <link rel="stylesheet" href="Views/Css/Views.css">
</head>
    <body>
            
        <article class="header_bg">
            <div class="header_top">
                <div class="divisor2">
                    <p class="text-left m-text-center">
                        <i class="fa fa-truck"></i>Entregamos em todo o Brasil

                    </p>
                </div>

                <div class="divisor2">
                    <p class="text-right m-text-center">
                        <a href="#" title="Acesse o Facebook da loja" class="radius btn_off">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" title="Acesse o Instagram da loja" class="radius btn_off">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" title="Acesse o Twiiter da loja" class="radius btn_off">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" title="Acesse o WhatsApp da loja" class="radius btn_off">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="mailto<?php $mailSite?>" title="Acesse o E-mail da loja" class="radius btn_off">
                            <i class="fa fa-envelope"></i>
                        </a>
                        <a href="mailto<?php $configBase?>Login" title="Faça o login para ver seus pedidos" class="radius btn_off">
                            <i class="fa fa-unlock"></i>
                        </a>
                    </p>
                </div>

                <div class="clear"></div>
            </div>

            <div class="header_main">
                <div class="divisor3">
                    <a href="<?php $configBase?>home" title="Retornar a página inicial">
                        <img src="<?php $configBase?>Images/General/Logo.png" title="Logo marca da empresa<?php $titleSite?>" alt="Logo marca da empresa<?php $titleSite?>">
                    </a>
                </div>
                <div class="divisor3">
                    <form action="" method="post" id="frm_search">
                        <div class="header_frm_input">
                            <input type="search" name="input_search" id="input_search" placeholder="Tenis Adiddas">
                        </div>

                        <div class="header_frm_btn">
                            <button name="btn_search" id="btn_search" class="radius btn_edit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="divisor3">
                    <p class="text-center">
                        <i class="fa fa-envelope"></i>
                        <?php $mailSite?>
                    </p>
                    <p class="text-center">
                        <i class="fa fa-phone"></i>
                        <?php $poneSite?>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header_footer">
                <ul class="navigator">
                    <a href="<?php $configBase?>categories/offers" title="Conheça nossas ofertas" class="radius">
                        <li>Promoções</li>
                    </a>
                    <a href="<?php $ponconfigBaseeSite?>categories/shoes" title="Conheça nossos calçados" class="radius">
                        <li>Calçados</li>
                    </a>
                    <a href="<?php $configBase?>categories/clotching" title="Conheça nossas roupas" class="radius">
                        <li>Roupas</li>
                    </a>
                    <a href="<?php $configBase?>cart" title="Confira seu carrinho de compras" class="radius">
                        <li>
                            <span>99</span>
                            <i class="fa fa-shopping-cart"></i>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="clear"></div>
        </article>
    </body>
</html>