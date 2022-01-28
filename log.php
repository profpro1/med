<?php include "path.php";
include "app/controll/users.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Roboto:wght@900&family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
    <div class="container menu">
        <nav class="navbar ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="image/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top logo_check">
                </a>
                <form class="d-flex">
                    <button type="button" class="btn btn-outline-warning exit"><a href="index.php">Выйти</a></button>
                </form>
            </div>
        </nav>
    </div>
</div>
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="log.php">
        <h2 class="col-12">Авторизация</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
        <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин...">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <button type="submit" name="button-log" class="btn btn-secondary reg">Войти</button>

    </div>
</div>
    </form>
    </div>
</body>
</html>
