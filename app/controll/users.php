<?php
 include SITE_ROOT."/app/database/db.php";

$errMsg = '';

//
function userAuth($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['login'];
    $_SESSION['admin'] = $user['admin'];
    if ($_SESSION['admin'] == '1') {
        header('location: ' . BASE_URL . "main.php");
    }
    elseif ($_SESSION['admin'] == 'admin') {
            header('location: ' . BASE_URL . "admin/admin.php");
        }
    else {
        header('location: ' . BASE_URL);
    }
}
//registration of new users
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $login = trim($_POST['login']);
    $vk = trim($_POST['vk']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login ==='' ||$vk ===''||$passF ===''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($login,'UTF-8')<2){
        $errMsg = "Логин должен быть более двух символов";

    }elseif ($passF !== $passS){
        $errMsg = "Пароли в обеих полях должны соотвествовать!";
    }else{
        $existense = selectOne('users',['vk'=>$vk]);
        if(!empty($existence['vk']) && $existense['vk'] === $vk) {
            $errMsg = "Пользователь с таким id Вконтакте уже есть!";
        }else {
            $pass = password_hash($_POST['pass-first'], PASSWORD_DEFAULT);
            $post = [
                'login' => $login,
                'vk' => $vk,
                'password' => $pass
            ];
            $id=insert('users',$post);
            $errMsg = "В течение дня к вам на "."<strong>". $vk ."</strong>"." придет сообщение с идентификацией вашей личности и затем войдите с помощью логина и пароля!";

        }
    }
} else{
    $login = '';
    $vk = '';
}



//authorization of  users
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $admin='';
    $login = trim($_POST['login']);
    $pass = trim($_POST['password']);

    if ($login === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";
    } else {
        $existense = selectOne('users', ['login' => $login]);
        if ($existense && password_verify($pass, $existense['password'])) {
            userAuth($existense);

        } else {
            $errMsg = "Логин либо пароль введены неверно!";
        }
    }
}else{
    $login = '';
}

















