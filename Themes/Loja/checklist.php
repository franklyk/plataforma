<?php
require 'address.php';
require 'header.php';
?>

<main class="container">
    <div class="container_controller bgcolor-gray">
        <div class="container_details">
            <p class="paragraph_navigator">
                <a href="<?= $configBase?>index" title="Retornar a página inicial" class="color-white">
                    <i class="fa fa-home"></i>Home
                </a> / Checklist
            </p>
        </div>
    </div>

    <section class="container_main">
        <div class="container_controller">
            <h2 class="text-left m-text-center font-text-sub title_checklist">Onde você deseja receber seu pedido?</h2>

            <div class="divisor4 card4 bgcolor-white-dark radius new">
                <p class="text-center font-weight-medium color-dark font-text-max">
                    <i class="fa fa-plus-circle"></i>
                </p>

                <p class="text-center font-weight-medium color-dark font-text-sub">Novo Endereço</p>

                <p class="text-center font-weight-medium color-dark font-text-sub actions">
                    <a href="#" class="radius btn_new modal_address" data-id="1" title="Cadastrar novo endereço">
                        <i class="fa fa-street-view"></i> Cadastrar
                    </a>
                </p>
            </div>

            <?php for($i = 0; $i < 3; $i++): ?>
            <div class="divisor4 card4 bgcolor-white-dark radius">
                <p class="text-center font-weight-medium color-dark font-text-sub">Rua Luz das Flores, 230, Apto. 22.222</p>
                <p class="text-center font-weight-medium color-dark font-text-sub">B. Jardim Da Luz - Cidade/UF</p>
                <p class="text-center font-weight-medium color-dark font-text-sub">CEP: 12345-678</p>

                <p class="text-center font-weight-medium color-dark font-text-sub actions">
                    <a href="#" class="radius btn_edit" data-id="<?= $i ?>" title="Enviar para este endereço">
                        <i class="fa fa-truck"></i> Enviar para este endereço
                    </a>
                </p>
            </div>
            <?php endfor; ?>

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
                                <form method="post" id="form_cart">
                                    <input type="number" id="input_cart" name="input_cart" value="1" class="radius"
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
                            <p class="text-left font-text-sub font-weight-medium title_table">Cupom de Desconto:</p>

                            <form method="post" id="form_discount">
                                <input type="text" id="input_discount" name="input_discount" class="radius">

                                <button class="btn_search radius" name="btn_discount" id="btn_discount">
                                    <i class="fa fa-percent"></i> Aplicar Desconto</button>
                            </form>
                        </td>

                        <td colspan="3">
                            <p class="text-left font-text-sub font-weight-medium title_table">Custo do Frete:</p>
                            <form method="post" id="form_shipping">
                                <input type="text" id="input_shipping" name="input_shipping" class="radius zipcode">

                                <button class="btn_search radius" name="btn_shipping" id="btn_shipping">
                                    <i class="fa fa-truck"></i> Calcular</button>
                            </form>

                            <form method="post" id="choose_shipping">
                                <input type="radio" name="shipping_option" id="shipping_option" value="1"> <span class="font-text-sub">Sedex: </span>
                                <span class="font-text-sub">R$ 30,00 - 7 dias úteis</span><br>

                                <input type="radio" name="shipping_option" id="shipping_option" value="2"> <span class="font-text-sub">Pac: </span>
                                <span class="font-text-sub">R$ 20,00 - 15 dias úteis</span><br>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <p class="text-left m-text-center font-text-sub actions">
                                <a href="<?= $configBase?>" class="radius btn_search" title="Retornar a loja virtual para continuar comprando"
                                style="margin-right: 5px">
                                    <i class="fa fa-search"></i> Continuar Comprando
                                </a>
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
        </div>

    </section>
</main>

<?php require_once 'footer.php'; ?>