<?php
    require 'payment.php';
    require 'header.php';
?>

<main class="container">
    <div class="container_controller bgcolor-gray">
        <div class="container_details">
            <p class="paragraph_navigator">
                <a href="<?= $configBase?>index" title="Retornar a página inicial" class="color-white">
                    <i class="fa fa-home"></i>Home
                </a> / Pagamento
            </p>
        </div>
    </div>

    <section class="container_main">
        <div class="container_controller">
            <h2 class="text-left m-text-center font-text-sub title_checklist"> Escolha a forma de pagamento</h2>

            <div class="divisor4 card4 bgcolor-white-dark radius payments">
                <img src="<?= $configBase?>Images/General/mercadopago.png" alt="<?= $titleSite?>: Logo do Mercado Pago"
                     title="<?= $titleSite?>: Logo do Mercado Pago" class="img_pay">
                <p class="text-center color-dark font-text-sub actions">
                    <a href="#" class="radius btn_edit modal_payment" data-id="1" data-pay="mercadoPagoPix">
                        <i class="fa fa-file-alt"></i> Fazer Pix Agora!
                    </a>
                </p>
            </div>

            <div class="divisor4 card4 bgcolor-white-dark radius payments">
                <img src="<?= $configBase?>Images/General/mercadopago.png" alt="<?= $titleSite?>: Logo do Mercado Pago"
                     title="<?= $titleSite?>: Logo do Mercado Pago" class="img_pay">
                <p class="text-center color-dark font-text-sub actions">
                    <a href="#" class="radius btn_new modal_payment" data-id="1" data-pay="mercadoPagoCreditCard">
                        <i class="fa fa-credit-card"></i> Pagar Agora no Cartão!
                    </a>
                </p>
            </div>

            <div class="clear"></div>

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
                                <p class="font-weight-max">Quantidade:</p>
                                <p>1 unidades</p>
                            </td>

                            <td class="td_sub">
                                <p class="cart_actions text-center font-text-max color-green-dark">
                                    <i class="fa fa-check"></i>
                                </p>
                            </td>
                        </tr>

                    <?php endfor; ?>

                    <tr>
                        <td colspan="2">
                            <p class="text-left m-text-center font-text-sub actions">

                                <a href="#" class="radius btn_edit" title="Avançar para o pagamento do pedido" data-value="123">
                                    <i class="fa fa-paper-plane"></i> Finalizar Pedido
                                </a>
                            </p>
                        </td>

                        <td colspan="3">
                            <p class="text-right font-text-medium font-weight-medium">Valor Total: R$ 1.280,00</p>
                        </td>
                    </tr>


                </table>
                <div class="clear"></div>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>
