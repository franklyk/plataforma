<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/Css/Views.css">
</head>
<body>
    <div class="container_top_info radius">
        <div class="bgcolor-white-light radius color-orange">
            <p class="font-text-sub ">
                <i class="fa fa-truck font-text-max "></i>
            <p class="text-center font-text-sub font-weight-medium color-orange">Frete Gratuito</p>
            <p class="text-center font-text-sub color-orange">Compras a partir de R$200,00</p>
        </div>
        <div class="bgcolor-white-light color-blue radius">
            <p class="text-center font-text-sub">
                    <i class="fa fa-credit-card font-text-max"></i>
            </p>
            <p class="text-center font-text-sub font-weight-medium">Pagamento no Cartão</p>
            <p class="text-center font-text-sub ">Pague no Cartão de Crédito em até 12x</p>
        </div>
        <div class="bgcolor-white-light color-red radius">
            <p class="text-center font-text-sub">
                    <i class="fa fa-gift font-text-max "></i>
            </p>
            <p class="text-center font-text-sub font-weight-min">Ganhe Descontos nas Suas Próximas Compras</p>
        </div>
        <div class="bgcolor-white-light color-green radius">
            <p class="text-center font-text-sub">
                <i class="fa fa-phone font-text-max "></i>
            </p>
            <p class="text-center font-text-sub font-weight-medium">
                <span class="none"></span>Central de Atendimento
            </p>
            <p class="text-center font-text-sub ">Todos os Dias 24h/dia</p>
        </div>
    </div>

    <h1 class="font-text-max font-weight-max color-blue-dark text-margin title-folder ">Mais vendidos da semana:</h1>
    
    <div class="container_top radius">

        <?php for($i=0; $i < 6; $i++): ?>

        <div class="exposed bgcolor-white-light">

            <img class="product_img" src="<?php $configBase ?>Images/Products/product.png" title="Imagem do produto: Tênis Adidas Sporting" alt="Imagem do produto: Tênis Adidas Sporting">

            <h2 class="product_title color-green font-text-extra">
                Tênis Adidas Sporting
            </h2>

            <p class="product_description font-text-min">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quam iste facere aperiam labore distinctio nemo aspernatur.
            </p>

            <span class="discount_off color-red font-weight-max">
                10% OFF
            </span>

            <p class="prices">
                <span class="old_price color-red font-text-sub"><s> R$ 450,00</s></span>

                <span class="new_price font-weight-max font-text-extra color-green-dark"> R$ 320,00</span>
            </p>

            <p class="btn_actions">
                <a href="#" title="Visualize os detalhes deste produto." class="btn_datails bgcolor-blue color-white radius font-text-extra">
                    <i class="fa fa-images"></i>
                </a>
                <a class="btn_cart bgcolor-green color-white radius font-text-extra" href="#" title="Adicione este produto ao carrinho.">
                    <i class="fa fa-shopping-cart"></i>
                </a>
            </p>
        </div>
        <?php endfor; ?>

    </div>
</body>
</html>
