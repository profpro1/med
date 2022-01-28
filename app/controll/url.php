<?php
function auth_send(){
    header('WWW-Authenticate: Basic realm="Closed Zone"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body"
    ,"<h1>Ошибка аутентификации</h1>"
    ,"<p>Обратитесь к администратору для входа.</p>"
    ,"</body></html>";
    exit;
}
if($_SERVER['REQUEST_METHOD'] === 'GET' ) {

//    $login = trim($_POST['login']);
    $auth_user = $_SESSION['login'];

    if (!isset($_SESSION['login'])) {
        auth_send();
    } else {
        $existense = selectOne('users', ['login' => $login]);
        if ($login == $_SESSION['login']) {
            userAuth($existense);
        }
    }
}

//echo "<html><body >"
//,"<h1>Добро пожаловать!</h1>"
//,"</body></html>";
?>
