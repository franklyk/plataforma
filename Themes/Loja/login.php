<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/Css/Views.css">
</head>
<body>
    <?php
    // require 'config.php';
    ?>
    <!-- <div class="result"></div> -->
    <div class="blur"></div>
    <fieldset class="camp_form_register">

        <legend><img src="<?php $configBase ?>Images/General/logo.png" alt=""></legend>
        <div class="header_register">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <div class="close_register">
            <span class="line1"></span>
            <span class="line2"></span>
        </div>
        </div>
        <form action="" method="post" class="camp_register">

            <div class="input_firstname div_input">
                <input type="text" class="user_firstname" name="user_firstname" id="user_firstname" required>
                <label for="user_firstname">Nome:</label>
            </div>
            <div class="input_lastname div_input">
                <input type="text" class="user_lastname" name="user_lastname" id="user_lastname" required>
                <label for="user_lastname">Sobrenome</label>
            </div>

            <div class="input_phone div_input">
                <input type="text" class="user_phone" name="user_phone" id="user_phone" required>
                <label for="user_phone">Telefone</label>
            </div>
            <div class="input_nasc div_input">
                <input type="text" class="user_phone" name="user_nasc" id="user_nasc" required>
                <label for="user_nasc">Nascimento</label>
            </div>
            <div class="input_email div_input">
                <input type="email" class="user_email" name="user_email" id="user_email" required>
                <label for="user_email">E-mail: </label>
            </div>
            <div class="input_pass div_input">
                <input type="password" class="user_pass" name="user_pass" id="user_pass" required>
                <label for="user_pass">Senha:</label>
                <span class="showHide">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </span>
            </div>
            <button type="submit" id="btn_register" class="btn_register" name="btn_register" value="submit"> <i class="fa fa-sign-in-alt"></i> Cadastrar </button>
    
        </form>
    </fieldset>
</body>
</html>