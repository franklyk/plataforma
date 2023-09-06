
<div class="clear"></div>

<article class="footer_bg">
    <div class="footer_main">
        <ul>
            
            <a href="<?= $configBase ?>categories" title="Navegue em nossas categorias" class="radius">
                <li>Categorias</li>
            </a>

            <a href="<?= $configBase ?>offers" title="Navegue em nossas ofertas" class="radius">
                <li>Promoções</li>
            </a>

            <a href="<?= $configBase ?>shoes" title="Navegue em nossa categoria de sapato" class="radius">
                <li>Calçados</li>
            </a>

            <a href="<?= $configBase ?>clotching" title="Navegue em nossa categoria de roupas" class="radius">
                <li>Roupas</li>
            </a>

            <a href="<?= $configBase ?>register" title="Cadastre-se gratuitamente em nossa loja" class="radius">
                <li>
                    <i class="fa fa-use"></i> Cadastre-se
                </li>
            </a>

            <a href="<?= $configBase ?>login" title="Visualize sua conta e seus pedidos" class="radius">
                <li>
                    <i class="fa fa-unlock"></i> Entrar
                </li>
            </a>
        </ul>

        <ul>
            <a href="<?= $configBase ?>aboutus" title="Conheça a nossa loja" class="radius">
                <li>Sobre Nós</li>
            </a>
            <a href="<?= $configBase ?>policy" title="Conheça a nossa política de privacidade" class="radius">
                <li>Política de Privacidade</li>
            </a>
            <a href="<?= $configBase ?>devolution" title="Conheça nossas regras de troca e devolução" class="radius">
                <li>Troca e Devolução</li>
            </a>
            <a href="<?= $configBase ?>senders" title="Conheça as nossas formas de envio" class="radius">
                <li>Formas de Envio</li>
            </a>
            <a href="<?= $configBase ?>payments" title="Conheça nossas formas de pagamento" class="radius">
                <li>Formas de Pagamento</li>
            </a>
        </ul>

        <div class="divisor3">
            <p class="text-center color-white font-text-min">
                NOSSAS REDES SOCIAIS:
            </p>

            <p class="text-center font-text-medium">
                <a href="#" title="Acesse a nossa página no facebook" class="radius footer_socials">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="#" title="Acesse a nossa página no instagram" class="radius footer_socials">
                    <i class="fab fa-instagram"></i>
                </a>
            </p>

            <div class="espaco-max"></div>

            <p class="font-text-min color-white text-center">CANAIS DE CONTATO:</p>
            <ul class="navigator">
                <a href="mailto:<?= $mailSite ?>" title="Entre em contato conosco via e-mail" class="radius footer_contact">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <?= $mailSite ?>
                    </li>
                </a>

                <a href="callto:<?= $whatsappSite ?>" title="Entre em contato conosco via whatsapp" class="radius footer_contact">
                    <li>
                        <i class="fab fa-whatsapp"></i>
                        <?= $whatsappSite ?>
                    </li>
                </a>

                <a href="callto:<?= $phoneSite ?>" title="Entre em contato conosco via telefone" class="radius footer_contact">
                    <li>
                        <i class="fa fa-phone"></i>
                        <?= $phoneSite ?>
                    </li>
                </a>
            </ul>

        </div>
    </div>

    <div class="footer_down">
        <h1 class="text-center"><?= $titleSite?> - &copy; <?= date('Y') ?> todos os direitos reservados</h1>
        <p class="text-center"> Desenvolvido por  <i class="fa fa-heart"></i> KLYK web-Sites</p>
    </div>
</article>