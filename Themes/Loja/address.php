<article class="address_modal">

    <div class="open_container">
        <div class="modal_container_close">
            <p class="text-right">
                <a href="#" title="Fechar esta janela" class="btn_delete radius modal-close">
                    <i class="fa fa-times-circle"></i>
                </a>
            </p>
        </div>

        <h2 class="text-left font-text-medium font-weight-medium title_checklist">Cadastrar Novo Endereço:</h2>

        <div class="container_action">
            <form method="post" id="form_address">

                <div class="divisor2">
                    <label for="input_zipcode">Cep:</label>
                    <input type="text" class="zipcode radius" name="input_zipcode" id="input_zipcode" required>
                </div>
                <div class="divisor2">
                    <label for="input_address">Endereço:</label>
                    <input type="text" class="address radius" name="input_address" id="input_address" required>
                </div>

                <div class="clear"></div>

                <div class="divisor3">
                    <label for="input_number">Número:</label>
                    <input type="text" class="radius" name="input_number" id="input_number" required>
                </div>

                <div class="divisor3">
                    <label for="input_complement">Complemento:</label>
                    <input type="text" class="radius" name="input_complement" id="input_complement">
                </div>

                <div class="divisor3">
                    <label for="input_neighborhood">Bairro:</label>
                    <input type="text" class="neighborhood radius" name="input_neighborhood" id="input_neighborhood">
                </div>

                <div class="clear"></div>

                <div class="divisor3">
                    <label for="input_city">Cidade:</label>
                    <input type="text" class="city radius" name="input_city" id="input_city" required>
                </div>

                <div class="divisor3">
                    <label for="input_state">UF:</label>
                    <input type="text" class="state radius" name="input_state" id="input_state">
                </div>

                <div class="divisor3">
                    <br class="none">
                    <button class="btn_new radius" id="btn_address" name="btn_address">
                        <i class="fa fa-street-view"></i> Cadastrar
                    </button>
                </div>

                <div class="clear"></div>
            </form>
        </div>

        <div class="clear"></div>
    </div>

</article>

