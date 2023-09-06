<!DOCTYPE html>
<body>
    <?php
        // require "modal.php";
        require "header.php";
    ?>
    <main class="container">
        <section class="container_main">
            <div class="container_controller">
                <?php require 'pages-container/container-top.php' ?>
                <?php require 'pages-container/container-bestsellers.php' ?>
                <?php require 'pages-container/container-banner-small.php' ?>
                <?php require 'pages-container/container-foryou.php' ?>
                <?php require 'pages-container/container-thebest.php' ?>
            </div>
        </section>
    </main>

    <?php require 'footer.php' ?>

</body>
</html>