<?php
require 'header.php';
?>

<div class="result"></div>

<main class="container">
    <div class="container_controller bgcolor-gray">
        <div class="container_details">
            <p class="paragraph_navigator">
                <a href="<?= $configBase?>index" title="Retornar a página inicial" class="color-white">
                    <i class="fa fa-home"></i>Home
                </a>/ Login
            </p>
        </div>
    </div>

    <section class="container_main">
        <div class="container_controller">
            <div class="container_details">
                <!--Login-->
                <div class="divisor2">
                    <div class="main_login">
                        <h1 class="text-center main_login_h1">Já Sou Cliente</h1>

                        <form method="post" id="form_login">
                            <label for="login_email">E-mail: </label>
                            <input type="email" name="login_email" id="login_email" value="" required>

                            <div class="viewer">
                                <label for="login_password">Senha: </label>
                                <input type="password" name="login_password" id="login_password" value="" required>
                                <span class="showHide">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="main_login_btns">
                                <div class="divisor2">
                                    <button class="btn_edit radius" id="btn_login" name="btn_login">
                                        <i class="fa fa-sign-in-alt"></i> Entrar
                                    </button>
                                </div>

                                <div class="divisor2 text-right m-text-center">
                                    <a href="<?= $configBase?>recovery" id="btn_recovery"
                                       title="Recuperar Senha" class="color-dark font-text-sub radius">
                                        Esqueci Senha
                                    </a>
                                </div>

                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--Cadastro-->
                <div class="divisor2">
                    <div class="main_login">
                        <h1 class="text-center main_login_h1">Quero Me Cadastrar</h1>

                        <form method="post" id="form_register">
                            <label for="user_name">Nome Completo: </label>
                            <input type="text" name="user_name" id="user_name" required>

                            <label for="user_email">E-mail: </label>
                            <input type="email" name="user_email" id="user_email" required>

                            <label for="user_pass">Senha: </label>
                            <input type="password" name="user_pass" id="user_pass" required>

                            <div class="main_login_btns">
                                <button class="btn_new radius" id="btn_register" name="btn_register">
                                    <i class="fa fa-user-plus"></i> Criar Conta
                                </button>
                            </div>

                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php require 'pages-container/container-bestsellers.php'; ?>
            <?php require 'pages-container/container-thebest.php'; ?>
            </div>
        </div>
    </section>
</main>

<?php
require 'footer.php';
?>