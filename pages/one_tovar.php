<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/one_tovar.css">
</head>
<body>
<?php
                include('incl/header.php');
            ?>
    <section class="one_tovar">
        <div class="container">
            <p class="page_zaglav one_tovar_zaglav">Видеокарта</p>
            <div class="one_tovar_card">
                <div class="one_tovar_img">
                    <div>
                        <img src="img/configurator_block/tovar_info.png" alt="">
                    </div>
                </div>
                <div class="line_tovar"></div>
                <div class="one_tovar_info">
                    <p class="one_tovar_info_zaglav">Видеокарта ASUS NVIDIA GeForce RTX 3090, TUF-RTX3090-24G-GAMING</p>
                    <p class="one_tovar_code">Код товара: 1753472</p>
                    <div class="one_tovar_price">
                        379 260 ₽
                    </div>
                    <a href="configRedact.php" class="button one_tovar_button">В сборку</a>
                    <a href="redactComplect.php" class="button one_tovar_button">Редактировать</a>
                </div>
            </div>
            <p class="page_zaglav one_tovar_zaglav1">Характеристики</p>
            <div class="one_tovar_char">
                <div class="one_tovar_char__item">
                    <p class="char_name">
                        Интерфейс
                    </p>
                    <p class="char_value">
                        PCI-E 4.0
                    </p>
                </div>
                <div class="one_tovar_char__item">
                    <p class="char_name">
                        Видеочипсет
                    </p>
                    <p class="char_value">
                        NVIDIA GeForce RTX 3090
                    </p>
                </div>
                <div class="one_tovar_char__item">
                    <p class="char_name">
                        Частота видеопамяти 
                    </p>
                    <p class="char_value">
                        19500 МГц
                    </p>
                </div>
                <div class="one_tovar_char__item">
                    <p class="char_name">
                        Частота графического процессора 
                    </p>
                    <p class="char_value">
                        1740 МГц (1770 МГц, в режиме Boost)
                    </p>
                </div>
                <div class="one_tovar_char__item">
                    <p class="char_name">
                        Техпроцесс
                    </p>
                    <p class="char_value">
                        8 нм
                    </p>
                </div>
                <div class="one_tovar_char__item">
                    <p class="char_name">
                        Объем видеопамяти
                    </p>
                    <p class="char_value">
                        24 ГБ
                    </p>
                </div>
                <div class="one_tovar_char__item">
                    <p class="char_name">
                        Тип видеопамяти
                    </p>
                    <p class="char_value">
                        GDDR6X
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php
                        include('incl/footer.php');
                    ?>
</body>
</html>