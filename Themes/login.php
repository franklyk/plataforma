<?php
//unset($_COOKIE);
//Verifica se o Cookie de Bloqueio Existe ou Não, Se Existir Cria as Sessões.
if(!empty($_COOKIE["LBlocked"])){
    $_SESSION['blocked'] = 1;
    $_SESSION['counter'] = TIMESBLOCKED;
}
?>
<div class="result"></div>
<main>
    <section class="main_content bgcolor-white">
        <div class="espaco-min"></div>
        <div class="bgcolor-white">
            <img src="<?= $configBase ?>Images/General/cupom.png" title="<?= $titleSite ?> - Imagem da LogoMarca" title="<?= $titleSite ?> - Imagem da LogoMarca">
        </div>

        <!-- Login -->
        <div class="divisor2">
            <div class="main_login bgcolor-white-dark">
                <h1 class="text-center m-text-center main_login_h1">Já Sou Cliente <?= $titleSite ?></h1>
                <form method="post" id="form_login">
                    <label for="login_email">E-mail</label>
                    <input type="email" name="login_email" id="login_email" value="<?= ($_COOKIE['LE'] == '' ? '' :  $_COOKIE['LE'])?>" required>

                    <label for="login_password">Senha</label>
                    <input type="password" name="login_password" id="login_password" value="<?= ($_COOKIE['LP'] == '' ? '' :  $_COOKIE['LP'])?>" required>

                    <div class="main_login_btns">
                        <div class="divisor2">
                            <button name="btn_login" class="btn_edit radius" id="btn_login"><i class="fa fa-sign-in-alt"></i> Entrar</button>
                        </div>

                        <div class="divisor2 text-right m-text-center">
                            <a href="<?= $configBase?>recovery"class="color-dark font-text-sub radius" id="btn_recovery">Esqueci Senha</a>
                        </div>

                        <div class="clear"></div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Cadastro -->
        <div class="divisor2">
            <div class="main_login bgcolor-white-dark">
                <h1 class="text-center m-text-center main_login_h1">Quero Me Cadastrar</h1>
                <form method="post" id="form_register">
                    <label for="user_name">Nome Completo</label>
                    <input type="text" name="user_name" id="user_name" required>

                    <label for="user_mail">E-mail</label>
                    <input type="email" name="user_mail" id="user_mail" required>

                    <label for="user_pass">Senha</label>
                    <input type="password" name="user_pass" id="user_pass" required>

                    <div class="main_login_btns">
                        <button class="btn_new radius" id="btn_register" name="btn_register"><i class="fa fa-user-plus"></i> Criar Conta</button>
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>

        <!-- Bloco da Seção de Ofertas-->
        <?php require 'section-offers.php'; ?>

        <!-- Bloco da Seção de Destaque da Semana-->
        <?php require 'section-sales.php'; ?>

        <!-- Bloco da Seção de Destaque da Semana-->
        <?php require 'section-week.php'; ?>

        <!-- Bloco da Seção de Newsletter-->
        <?php require 'newsletter.php' ?>

        <div class="clear"></div>
        <div class="espaco-min"></div>
    </section>

    <div class="espaco-max"></div>
</main>