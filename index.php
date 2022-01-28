<?php
include "path.php";
include  "app/controll/users.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>МЁД</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Roboto:wght@900&family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="login">
        <button type="button" class="btn btn-outline-info login1"><a href="<?php echo BASE_URL.'log.php'?>">Войти</a></button>
        <button type="button" class="btn btn-outline-info login2"><a href="<?php echo BASE_URL.'reg.php'?>">Регистрация</a></button>
    </div>
    <div class="hover">
        <div class="block"><h1>СПО <br>МЁД</h1></div>
        <div class="speech">Общение с нами полезно!</div>
    </div>
</div>
</body>
</html>