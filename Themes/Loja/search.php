<?php
include_once 'modal.php';
require 'header.php';
?>

<main class="container">
    <div class="container_controller bgcolor-gray">
        <div class="container_details">
            <p class="paragraph_navigator">
                <a href="<?= $configBase?>index" title="Retornar a página inicial" class="color-white">
                    <i class="fa fa-home"></i>Home /
                </a> Pesquisa / Tênis
            </p>
        </div>
    </div>

    <section class="container_main">
        <div class="container_controller">
            <div class="container_details">
                <div class="container_top">
                    <h1 class="font-text-medium font-weight-medium text-left m-text-center"> Resultado da Pesquisa:</h1>

                    <div class="container_top_info">
                        <ul class="caroussel">

                            <?php for($i = 0; $i < 2; $i++): ?>

                                <li class="img-caroussel">
                                    <div class="divisor2">
                                        <p class="text-left font-weight-medium price_discount radius">10% OFF</p>
                                        <img src="<?= $configBase?>Images/Products/product.png" title="Imagem do produto Tênis Adidas Sporting - <?= $titleSite ?>"
                                             alt="Imagem do produto Tênis Adidas Sporting - <?= $titleSite ?>">
                                    </div>

                                    <div class="divisor2">
                                        <h2 class="text-left m-text-center font-weight-medium font-text-min">Tênis Adidas Sporting</h2>
                                        <p class="text-left m-text-center font-weight-min">
                        <span class="price_old radius font-text-sub">
                            <s>R$ 450,00</s>
                        </span>

                                            <span class="price_off radius font-text-min font-weight-medium">R$ 320,00</span>
                                        </p>

                                        <p class="text-left m-text-center font-text-sub">
                                            Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's...
                                        </p>

                                        <p class="text-center font-weight-min font-text-sub actions">
                                            <a href="<?= $configBase?>details/1" title="Visualizar detalhes deste produto" class="btn_edit radius">
                                                <i class="fa fa-images"></i>
                                            </a>

                                            <a href="#" title="Acrescentar este produto ao carrinho de compras" class="btn_new radius open_buy" data-id="<?= $i ?>">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </p>

                                    </div>
                                </li>

                            <?php endfor; ?>

                        </ul>
                        <div class="clear"></div>
                    </div>

                    <div class="paginator">
                        <ul class="navigator text-center">
                            <?php for($a = 1; $a < 3; $a++): ?>
                                <li class="text-cente radius">
                                    <a href="<?= $configBase ?>search/tênis/<?= $a ?>" title="Ir para página <?= $a ?>"
                                    class="color-white"><?= $a ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <?php require 'pages-container/container-bestsellers.php'; ?>
                    <?php require 'pages-container/container-banner-small.php'; ?>
                    <?php require 'pages-container/container-foryou.php'; ?>
                    <?php require 'pages-container/container-thebest.php'; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>