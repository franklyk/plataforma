<?php
require 'header.php';
?>

    <main class="container">
        <div class="container_controller bgcolor-gray">
            <div class="container_details">
                <p class="paragraph_navigator">
                    <a href="<?= $configBase?>index" title="Retornar a página inicial" class="color-white">
                        <i class="fa fa-home"></i>Home /
                    </a>Pedido
                </p>
            </div>
        </div>

        <section class="container_main">
            <div class="container_controller">
                <div class="container_details">
                    <div class="container_top">

                        <div class="container_cart">
                            <table class="table">

                                <?php for($i = 0; $i < 2; $i++): ?>

                                    <tr>
                                        <td class="td_minus td_img">
                                            <img src="<?= $configBase?>Images/Products/product.png" title="Visitar a página do produto"
                                                 alt="Visitar a página do produto" class="img-cart">
                                        </td>

                                        <td class="td_plus">
                                            <h2>Tênis Adidas Sport</h2>
                                            <p>Cor: Azul - Tamanho 32</p>
                                        </td>

                                        <td class="td_minus">
                                            <p>R$ 320,00</p>
                                        </td>

                                        <td class="td_sub">
                                            <form method="post" id="form_cart">
                                                <input type="number" id="input_cart" name="input_cart" value="1" class="radius"/>
                                            </form>
                                        </td>

                                        <td class="td_sub">
                                            <p class="cart_actions text-center">
                                                <a href="#" class="btn_delete radius" id="delete_cart" title="Remover este produto do pedido"
                                                data-id="<?= $i ?>">
                                                <i class="fa fa-times-circle"></i></a>
                                            </p>
                                        </td>
                                    </tr>

                                <?php endfor; ?>

                                <tr>
                                    <td colspan="2">
                                        <p class="text-left font-text-sub font-weight-medium">Cupom de Desconto:</p>

                                        <form method="post" id="form_discount">
                                            <input type="text" id="input_discount" name="input_discount" class="radius">

                                            <button class="btn_search radius" name="btn_discount" id="btn_discount">
                                                <i class="fa fa-percent"></i> Aplicar Desconto</button>
                                        </form>
                                    </td>

                                    <td colspan="3">
                                        <p class="text-left font-text-sub font-weight-medium">Consulta do Custo do Frete:</p>
                                        <form method="post" id="form_shipping">
                                            <input type="text" id="input_shipping" name="input_shipping" class="radius zipcode">

                                            <button class="btn_search radius" name="btn_shipping" id="btn_shipping">
                                                <i class="fa fa-truck"></i> Calcular</button>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="5">
                                        <p class="text-right font-text-medium font-weight-medium">Valor Total: R$ 1.280,00</p>
                                    </td>
                                </tr>

                            </table>
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