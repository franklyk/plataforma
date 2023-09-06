<?php
    require 'header.php';
?>

<main class="container">
    <div class="container_controller bgcolor-gray">
        <div class="container_details">
            <p class="paragraph_navigator">
                <a href="<?= $configBase?>index" title="Retornar a página inicial" class="color-white">
                    <i class="fa fa-home"></i>Home
                </a> / Produto
            </p>
        </div>
    </div>

    <section class="container_main">
        <div class="container_controller">
            <div class="container_details">
                <div class="divisor2">
                    <p class="text-left font-weight-medium price_discount radius">10% OFF</p>

                    <img src="<?= $configBase?>Images/Products/product.png" title="Imagem do produto: Tênis Adidas Sporting"
                         alt="Imagem do produto: Tênis Adidas Sporting">

                    <div class="img-small">
                        <?php for($i = 1; $i < 5; $i++): ?>
                            <img src="<?= $configBase?>Images/Details/product-detail<?= $i ?>.png"
                                 title="Imagem do produto: Visualize detalhes do Tênis Adidas Sporting"
                                 alt="Imagem do produto: Visualize detalhes do Tênis Adidas Sporting"
                                 class="divisor4">
                        <?php endfor; ?>
                    </div>

                    <div class="clear"></div>
                </div>

                <div class="divisor2">
                    <h2 class="text-left m-text-center font-weight-medium font-text-min"><?= strip_tags($Show['product_name'])?></h2>
                    <p class="text-left m-text-center font-weight-min">
                        <span class="price_old radius font-text-sub">
                            <s>R$ 450,00</s>
                        </span>

                        <span class="price_off radius font-text-min font-weight-medium">
                            <s>R$ 320,00</s>
                        </span>
                    </p>

                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Estoque atual: 07 unidades
                    </p>

                    <p class="text-left m-text-center font-text-sub">Lorem Ipsum is simply dummy text of the printing
                        and typesetting. Lorem Ipsum has been the industry's</p>

                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Tamanhos disponíveis:
                    </p>

                    <p class="text-left m-text-center font-text-sub">
                        <a href="#" title="Tamanho 'P' está disponível" class="tp_color_gray radius size" data-value="p">P</a>
                        <a href="#" title="Tamanho 'M' está disponível" class="tp_color_gray radius size" data-value="m">M</a>
                        <a href="#" title="Tamanho 'G' está disponível" class="tp_color_gray radius size" data-value="g">G</a>
                        <a href="#" title="Tamanho 'GG' está disponível" class="tp_color_gray radius size" data-value="gg">GG</a>
                        <a href="#" title="Tamanho 'XGG' está disponível" class="tp_color_gray radius size" data-value="xgg">XGG</a>
                    </p>

                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Cores disponíveis:
                    </p>

                    <p class="text-left m-text-center font-text-sub">
                        <a href="#" title="A cor Azul está disponível" class="tp_color_blue radius size" data-value="blue"></a>
                        <a href="#" title="A cor Vermelha  está disponível" class="tp_color_red radius size" data-value="red"></a>
                        <a href="#" title="A cor Verde  está disponível" class="tp_color_green radius size" data-value="green"></a>
                        <a href="#" title="A cor Branca  está disponível" class="tp_color_white radius size" data-value="white"></a>
                    </p>
                    <div class="container_action">
                        <form method="post" id="form_quantity">
                            <input type="hidden" name="input_id" id="input_id" value="<?= $configUrl[1]?>">
                            <input type="hidden" name="input_color" id="input_color" value="">
                            <input type="hidden" name="input_size" id="input_size" value="">

                            <input type="number" name="input_quantity" id="input_quantity" value="1" class="radius">
                            <button class="btn_edit radius" name="btn_quantity" id="btn_quantity">
                                <i class="fa fa-shopping-cart"></i> Adicionar
                            </button>
                        </form>
                    </div>

                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Categoria: Calçados
                    </p>

                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Tags:
                    </p>

                    <p class="text-left m-text-center font-text-sub">
                        <a href="<?= $configBase?>search/calçados" title="Pesquise produtos com esta tag: calçados" class="tp_color_gray radius tags">
                            <i class="fa fa-tags"></i> calçados
                        </a>
                        <a href="<?= $configBase?>search/adidas" title="Pesquise produtos com esta tag: adidas" class="tp_color_gray radius tags">
                            <i class="fa fa-tags"></i> adidas
                        </a>
                        <a href="<?= $configBase?>search/adidas sport" title="Pesquise produtos com esta tag: adidas sport" class="tp_color_gray radius tags">
                            <i class="fa fa-tags"></i> adidas sport
                        </a>

                        <a href="<?= $configBase?>search/tênis adidas" title="Pesquise produtos com esta tag: tênis adidas" class="tp_color_gray radius tags">
                            <i class="fa fa-tags"></i> tênis adidas
                        </a>
                    </p>

                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Compartilhar produto:
                    </p>

                    <p class="text-left m-text-center font-text-sub footer_contact">
                        <a href="#" title="Acesse a nossa página no facebook" class="tp_color_gray radius">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a href="#" title="Acesse a nossa página no instagram" class="tp_color_gray radius">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="mailto:<?= $whatsappSite ?>" title="Entre em contato conosco via whatsapp" class="tp_color_gray radius">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </p>

                </div>

                <div class="clear"></div>
            </div>

            <div class="container_description">
                <p class="text-center tabs">
                    <a href="#" title="Faça a leitura da descrição do produto" class="active" data-id="1">Descrição</a>
                    <a href="#" title="Visualize as características técnicas do produto" data-id="1">Características</a>
                    <a href="#" title="Leia o que os clientes estão comentando sobre este produto" data-id="1">Comentários</a>
                </p>

                <div class="description_paragraph">
                    <p><?= nl2br($Show['product_description'])?></p>
                </div>

                <div class="description_chars">*
                    <p><b>Nome: </b> Tênis Adidas Sporting</p>
                    <p><b>Gênero: </b> Masculino</p>
                    <p><b>Departamento: </b> Esporte</p>
                    <p><b>Indicado: </b> Uso nas atividades físicas</p>
                    <p><b>Estilo da Peça: </b>Lisa</p>
                    <p><b>Material:</b> Mesh</p>
                    <p><b>Altura do Cano:</b> Cano Baixo</p>
                    <p><b>Fechamento:</b> Cadarço</p>
                    <p><b>Solado:</b> Borracha</p>
                    <p><b>Garantia do Fabricante:</b> Contra defeito de fabricação</p>
                    <p><b>Origem:</b> Nacional</p>
                    <p><b>Marca:</b> Adidas</p>
                </div>

                <div class="description_commentary">
                    <div class="comment">*
                        <h2>Jeferson Souza - 12/12/2023 às 12:00</h2>

                        <p>Maecenas vel accumsan urna. Praesent nec odio interdum, bibendum metus vitae, rutrum purus.
                            Cras sit amet tellus accumsan ante condimentum volutpat. Quisque non quam ante.
                            Suspendisse convallis tristique turpis, a rutrum dolor sodales non.</p>
                    </div>

                    <div class="comment">
                        <h2>Jeferson Souza - 12/12/2023 às 12:00</h2>

                        <p>Maecenas vel accumsan urna. Praesent nec odio interdum, bibendum metus vitae, rutrum purus.
                            Cras sit amet tellus accumsan ante condimentum volutpat. Quisque non quam ante.
                            Suspendisse convallis tristique turpis, a rutrum dolor sodales non.</p>
                    </div>

                    <div class="comment">
                        <h2 class="text-left m-text-center color-dark">Deixe o seu comentário sobre este produto:</h2>

                        <form method="post" id="form_comment">
                            <input type="hidden" id="input_id" name="input_id" value="<?= $configUrl[1]?>">
                            <textarea id="input_comment" name="input_comment"></textarea>
                            <button class="btn_edit radius" name="btn_comment" id="btn_comment" >
                                <i class="fa fa-comment"></i> Comentar!
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php require 'pages-container/container-bestsellers.php'; ?>
            <?php require 'pages-container/container-thebest.php'; ?>
        </div>

    </section>
</main>
<?php
require 'footer.php';
?>
