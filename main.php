<?php
include "path.php";
include "app/controll/users.php";
include "app/controll/url.php"
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>МЁД</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
              integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Roboto:wght@900&family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
        <body>
        <?php
        include "app/include/header.php"
        ?>

                <section class="med_menu">
                    <div class="container col-12 mt-5">
                        <div class="row">
                            <div class="col-md-6">

                                <a href="<?php echo BASE_URL . "shop.php"; ?>" class="med_item med_item_1">
                                    <div class="med_item_subtitle">Барахолка</div>
                                </a>
                                </div>



                            <div class="col-md-6">
                                <a href="<?php echo BASE_URL . "stories.php"; ?>" class="med_item med_item_2">
                                    <div class="med_item_subtitle">Байки от вожатых</div>
                                </a>

                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo BASE_URL . "game.php"; ?>" class="med_item med_item_3">
                                    <div class="med_item_subtitle">Онлайн-движуха</div>
                                </a>

                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo BASE_URL . "file.php"; ?>" class="med_item med_item_4">
                                    <div class="med_item_subtitle">Видева 23+</div>
                                </a>
                            </div>
                    </div>
                </section>




            <?php
            include "app/include/footer.php";
            ?>
        </body>
    </html>
