<article class="open_modal">

    <div class="open_container buyModal">
        <div class="modal_container_close">
            <p class="text-right close">
                <a href="#" title="Fechar esta janela" class="btn_delete radius modal-close">
                    <i class="fa fa-times-circle"></i>
                </a>
            </p>
        </div>

        <div class="divisor2">
            <div class="img-main">
                <p class="text-left font-weight-medium price_discount">10% OFF</p>
                <img src="<?= $configBase?>Images/Products/product.png" title="Imagem do produto Tênis Adidas Sporting - <?= $titleSite ?>"
                     alt="Imagem do produto Tênis Adidas Sporting - <?= $titleSite ?>">
            </div>

            <div class="img-small">
                <?php for($i = 1; $i < 5; $i++): ?>
                    <img src="<?= $configBase?>Images/Details/product-detail<?= $i ?>.png" class="divisor4"
                         title="Visualize a imagem em detalhe do produto Tênis Adidas Sporting - <?= $titleSite ?>"
                         alt="Visualize a imagem em detalhe do produto Tênis Adidas Sporting - <?= $titleSite ?>">
                <?php endfor; ?>
            </div>

            <div class="clear"></div>
        </div>

        <div class="divisor2">
            <h2 class="text-left m-text-center font-weight-medium font-text-min">Tênis Adidas Sporting</h2>
            <p class="text-left m-text-center font-weight-min">
                        <span class="price_old radius font-text-sub">
                            <s>R$ 450,00</s>
                        </span>

                <span class="price_off radius font-text-min font-weight-medium">
                            <s>R$ 320,00</s>
                        </span>
            </p>

            <p class="text-left m-text-center font-text-sub details_paragraph">Estoque Atual: 07 unidades</p>

            <p class="text-left m-text-center font-text-sub details_paragraph">
                Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the industry's...
            </p>

            <p class="text-left m-text-center font-text-sub details_paragraph">Tamanhos Disponíveis:</p>

            <p class="text-left m-text-center">
                <a href="#" title="Tamanho 30" class="tp_color_gray radius size" data-value="30">30</a>
                <a href="#" title="Tamanho 31" class="tp_color_gray radius size" data-value="31">31</a>
                <a href="#" title="Tamanho 32" class="tp_color_gray radius size" data-value="32">32</a>
                <a href="#" title="Tamanho 33" class="tp_color_gray radius size" data-value="33">33</a>
            </p>

            <p class="text-left m-text-center font-text-sub details_paragraph">Cores Disponíveis:</p>

            <p class="text-left m-text-center">
                <a href="#" title="Cor Azul" class="tp_color_blue radius size" data-value="blue">Cor Azul</a>
                <a href="#" title="Cor Verde" class="tp_color_green radius size" data-value="green">Cor Verde</a>
                <a href="#" title="Cor Vermelha" class="tp_color_red radius size" data-value="red">Cor Vermelha</a>
                <a href="#" title="Cor Branca" class="tp_color_white radius size" data-value="white">Cor Branca</a>
            </p>

            <div class="container_action">
                <form method="post" id="form_quantity">
                    <input type="hidden" id="input_id" name="input_id" value="<?= $configUrl[1]?>">
                    <input type="hidden" id="input_color" name="input_color" value="">
                    <input type="hidden" id="input_size" name="input_size" value="">
                    <input type="number" id="input_quantity" name="input_quantity" value="1" class="radius">
                    <button class="btn_edit radius" name="btn_quantity" id="btn_quantity" >
                        <i class="fa fa-shopping-cart"></i> Adicionar
                    </button>
                </form>
            </div>

            <p class="text-left m-text-center font-text-sub details_paragraph">
                Categoria: <span class="span_category">Calçados</span>
            </p>

            <p class="text-left m-text-center font-text-sub details_paragraph">Tags:</p>
            <p class="text-left m-text-center">
                <a href="<?= $configBase?>search/shoes" title="Pesquisar a tag: Calçados" class="tp_color_gray radius tags">
                    <i class="fa fa-tags"></i> calçados
                </a>

                <a href="<?= $configBase?>search/adidas" title="Pesquisar a tag: Adidas" class="tp_color_gray radius tags">
                    <i class="fa fa-tags"></i> adidas
                </a>

                <a href="<?= $configBase?>search/adidas sport" title="Pesquisar a tag: Adidas Sport" class="tp_color_gray radius tags">
                    <i class="fa fa-tags"></i> adidas sport
                </a>

                <a href="<?= $configBase?>search/tênis adidas" title="Pesquisar a tag: Tênis Adidas" class="tp_color_gray radius tags">
                    <i class="fa fa-tags"></i> tênis adidas
                </a>
            </p>

            <p class="text-left m-text-center font-text-sub details_paragraph">Compartilhar</p>
            <p class="text-left m-text-center">
                <a href="#" title="Compartilhar este produto no Facebook" class="tp_color_gray radius">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="#" title="Compartilhar este produto no Instagram" class="tp_color_gray radius">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#" title="Compartilhar este produto no Whatsapp" class="tp_color_gray radius">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </p>

        </div>

        <div class="clear"></div>
    </div>

</article>
