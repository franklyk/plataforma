<article class="open_modal paymentDiv">
    <div class="open_container">
        <div class="modal_container_close">
            <p class="text-right">
                <a href="#" title="Fechar esta modal" class="radius btn_delete modal-close">
                    <i class="fa fa-times-circle"></i>
                </a>
            </p>
        </div>

        <div class="payment_container">
            <h2 class="text-left m-text-center font-text-min title_checklist"><br>Efetue o pagamento do seu pedido:</h2>

            <div class="container_action">
                <form method="post" id="form_payment">
                    <input type="hidden" name="input_id" id="input_id" value="">
                    <input type="hidden" name="input_pay" id="input_pay" value="">

                    <div class="divisor1 imgLogo">
                        <img src="<?= $configBase ?>Images/General/load.gif" id="img_pay">
                    </div>

                    <div class="clear"></div>

                    <div class="divisor2">
                        <label for="cardHolder">Nome do Titular: </label>
                        <input type="text" name="cardHolder" id="cardHolder">
                    </div>

                    <div class="divisor2">
                        <label for="cardNumber">Nº do Cartão: </label>
                        <input type="text" name="cardNumber" id="cardNumber">
                    </div>

                    <div class="clear"></div>

                    <div class="divisor3">
                        <label for="cardDate">Validade: </label>
                        <input type="text" name="cardDate" id="cardDate">
                    </div>

                    <div class="divisor3">
                        <label for="cardCVV">CVV: </label>
                        <input type="text" name="cardCVV" id="cardCVV">
                    </div>

                    <div class="divisor3">
                        <label for="cardShipping">Parcelamento: </label>
                        <select name="cardShipping" id="cardShipping">
                            <option value="1">1x - R$ 1.280,00</option>
                            <option value="2">2x - R$ 645,00</option>
                            <option value="3">3x - R$ 433,00</option>
                            <option value="4">4x - R$ 330,00</option>
                            <option value="5">5x - R$ 270,00</option>
                            <option value="6">6x - R$ 230,00</option>
                            <option value="7">7x - R$ 200,00</option>
                            <option value="8">8x - R$ 179,00</option>
                            <option value="9">9x - R$ 165,00</option>
                            <option value="10">10x - R$ 150,00</option>
                            <option value="11">11x - R$ 140,00</option>
                            <option value="12">12x - R$ 133,00</option>
                        </select>
                    </div>

                    <div class="divisor3">
                        <label for="cardproprietyDoc">CPF: </label>
                        <input type="text" name="cardproprietyDoc" id="cardproprietyDoc">
                    </div>

                    <div class="divisor3">
                        <label for="cardproprietyEmail">E-mail: </label>
                        <input type="email" name="cardproprietyEmail" id="cardproprietyEmail">
                    </div>

                    <div class="divisor3"><br class="none">
                       <button class="btn_edit radius btn_payment" name="btn_payment" id="btn_payment">
                           <i class="fa fa-paper-plane"></i> Enviar!
                       </button>
                    </div>

                    <div class="clear"></div>

                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</article>
