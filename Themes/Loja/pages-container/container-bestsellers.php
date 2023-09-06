<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/Css/Views.css">
</head>
<body>
    <div class="container_top">
        <h1 class="font-text-medium font-weight-medium">Promaoçôes Relâmpagos:</h1>
        <div class="container_top_info">
            <ul class="caroussel">
                <?php for($i=0; $i < 6; $i++): ?>
                    <li class="img-caroussel">
                        <div class="divisor2">
                            <p class="font-weight-medium price_discount radius">10% OFF</p>
                            <img src="<?= $configBase ?>Images/Products/product.png" title="Imagem do produto: Tênis Adidas Sporting" alt="Imagem do produto: Tênis Adidas Sporting">
                        </div>
                        <div class="divisor2 product_desciption">

                            <h2 class=" m-text-center font-weight-medium font-text-min">Tênis Adidas Sporting</h2>

                            <p class="text-left m-text-center font-weight-min">

                                <span class="price_old radius font-text-sub price_discount"><s> R$ 450,00</s></span>

                                <span class="price_off radius font-text-medium font-weight-medium new_price"> R$ 320,00</span>

                            </p>

                            <p class="text-left m-text-center font-text-sub description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quam iste facere aperiam labore distinctio nemo aspernatur.</p>

                            <p class="text-center font-weight-min font-text-sub actions">

                                <a href="<?= $configBase ?>details/<?= $i ?>" title="Visualize os detalhes deste produto."
                                class="btn_edit radius"><i class="fa fa-images"></i>
                                </a>

                                <a href="#" title="Adicione este produto ao carrinho."
                                class="btn_new radius open-buy" data-id="<?= $i ?>">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </p>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</body>
</html>