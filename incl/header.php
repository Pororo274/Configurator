<?php
require 'connectdb.php';

if (isset($_SESSION['uid'])) {
    $sql = "SELECT roleId FROM user WHERE id = :id";
    $params = [
        'id' => $_SESSION['uid']
    ];

    try {
        $prepare = $conn->prepare($sql);
        $prepare->execute($params);
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
        $role = $result['roleId'];
    } catch (PDOException $e) {
        echo $e;
    }
} else {
    $role = 0;
}

?>
<header class="header">
                <div class="header__container container">
                    <div class="header__navigation">
                        <!--Логотиип-->
                        <a href="?" class="header__logo logo">
                            <div class="logo__figure">C</div>
                            <p class="logo__text">Configurator</p>
                        </a>
                        <!--Навигация-->
                        <nav class="header__nav">
                            <ul class="header__menu menu">
                                <li class="header__item"><a href="?#start" class="header__link">Главная</a></li>
                                <!-- <li class="header__item"><a href="?#benefits" class="header__link">Преимущества</a></li> -->
                                <!-- <li class="header__item"><a href="?p=userlist" class="header__link">Пользователи</a></li> -->
                                <li class="header__item"><a href="?#configurator" class="header__link">Конфигуратор</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--Кнопки-->
                    <div class="header__buttons">
                        <?php
                        if ($role == 0) {
                            ?>
                            <a href="?p=auth" class="auth__button button">Вход</a>
                            <a href="?p=reg" class="auth__button button">Регистрация</a>
                            <?php
                        }

                        if ($role == 1) {
                            ?>
                            <a href="myConfig.php" class="auth__button button">Мои конфигурации</a>
                            <?php
                        }

                        if ($role == 2) {
                            ?>
                            <a href="?p=userlist" class="auth__button button">Пользователи</a>
                            <?php
                        }

                        if ($role > 0) {
                            ?>
                            <a href="?p=profile" class="auth__button button">Личный кабинет</a>
                            <a href="?logout" class="auth__button button">Выход</a>
                            <?php
                        }

                        ?>
                    </div>
                    <!--Бургер меню-->
                    <div class="header__burger">
                        <input id="menu__toggle" type="checkbox"/>
                        <label class="menu__btn" for="menu__toggle">
                            <span></span>
                        </label>
                        <div class="burger__bg"></div>
                        <ul class="burger__menu">
                            <li><a class="burger_link hover__link" href="?#start">Главная</a></li>
                            <li><a class="burger_link hover__link" href="?#benefits">Преимущества</a></li>
                            <li><a class="burger_link hover__link" href="#configurator">Конфигуратор</a></li>
                            <li><a class="burger_link hover__link" href="?p=auth">Вход</a></li>
                            <li><a class="burger_link hover__link" href="?p=reg">Регистрация</a></li>
                        </ul>
                    </div>
                </div>
            </header>