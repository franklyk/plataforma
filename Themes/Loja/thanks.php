<?php
require 'header.php';
?>

<main class="container">
    <div class="container_controller bgcolor-gray">
        <div class="container_details">
            <p class="paragraph_navigator">
                <a href="<?= $configBase?>index" title="Retornar a página inicial" class="color-white">
                    <i class="fa fa-home"></i>Home
                </a> / Pedido Finalizado
            </p>
        </div>
    </div>

    <section class="container_main">
        <div class="container_controller">
            <h2 class="text-center font-text-max">O seu pedido foi recebido com sucesso!</h2>

            <div class="information bgcolor-white-dark">
                <p class="text-center font-text-min">Você receberá um e-mail assim que o pagamento for identificado e aprovado...</p>
                <p class="text-center font-text-sub">
                    <i>Obs.: Verifique a sua caixa de SPAM e o lixo eletrônico, caso o e-mail não chegue na sua caixa de entrada.</i>
                </p>

                <p class="text-center font-text-min btnThanks">
                    <a href="<?= $configBase?>login" title="Acesse o painel do cleinte para acompanhar o pedido"
                    class="btn_edit radius">
                        <i class="fa fa-box-open"></i> Acompanhar Pedido
                    </a>
                </p>
            </div>

            <div class="clear"></div>

            <?php require 'pages-container/container-bestsellers.php'; ?>
            <?php require 'pages-container/container-thebest.php'; ?>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>