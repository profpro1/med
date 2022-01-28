<?php
require "path.php";
require "app/controll/users.php";
//include "app/controll/url.php";
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
<body class="story">
<div class="stories">
    <?php
    include "app/include/header.php"
    ?>
</div>

<div class="container col-12 mt-5  audio-out"></div>

<div class="foot">
<?php
include "app/include/footer.php";
?>
</div>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/audio.js"></script>

</body>
</html>



