

<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a class="navbar-brand" href="<?php echo BASE_URL.'main.php'?>">
                    <img src="image/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top logo_check">
                </a>
            </div>
            <nav class="col-10">
                <ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL.'shop.php'?>">Барахолка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL.'stories.php'?>">Байки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL.'game.php'?>">Онлайн</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a  href="<?php echo BASE_URL.'file.php'?>" class="nav-link disabled">Файлы</a>
                        </li>
                    </ul>
                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="<?php echo BASE_URL.'personal.php'?>" id="user">

                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul>
                                <?php if ($_SESSION['admin']=='admin'): ?>
                                    <li><a href="#">Админ панель</a> </li>
                                <?php endif; ?>
                                <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a> </li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . "log.php"; ?>">
                                <i class="fa fa-user"></i>
                                Войти
                            </a>
                            <ul>
                                <li><a href="<?php echo BASE_URL . "reg.php"; ?>">Регистрация</a> </li>
                            </ul>
                        <?php endif; ?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
