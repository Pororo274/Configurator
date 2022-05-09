<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/redactComplet.css">
</head>
<body>
<?php
                include('incl/header.php');
            ?>
    <section class="redactComplet">
        <div class="container">
            <form class="redactComplet_form">
                <div class="redactComplet_head">
                    <p class="page_zaglav redactComplet_zaglav">Редактирование MyTestConfig</p>
                    <button href="#" class="button">Сохранить изменения</button>
                </div>
                <label for="name" class="label redactComplet_label">Название комплектующего</label>
                <input type="text" id="name" class="input redactComplet_input">
                <div class="redactComplet_flex_head">
                    <div class="redactComplet_flex_head__item">
                        <label for="price" class="label redactComplet_label">Цена в ₽ </label>
                        <input type="text" id="price" class="input redactComplet_input_price">
                    </div>
                    <div class="redactComplet_flex_head__item">
                        <p for="img" class="label redactComplet_label">Изображения</p>
                        <input type="file" id="img" class="input redactComplet_input_img">
                        <label for="img" class="redactComplet_label_img">Загрузить</label>
                    </div>
                </div>
                <p class="redactComplet_character">Характеристики</p>
                <div class="redactComplet_flex">
                    <div class="redactComplet_flex__item">
                        <p>Интерфейс</p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Видеочипсет</p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Частота графического процессора </p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Техпроцесс</p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Объем видеопамяти</p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Тип видеопамяти</p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Частота видеопамяти </p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Поддержка технологий</p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Разъемов HDMI</p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Версия разъема HDMI</p>
                        <input type="text" id="price" class="input">
                    </div>
                    <div class="redactComplet_flex__item">
                        <p>Разъемов Display Port</p>
                        <input type="text" id="price" class="input">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php
                        include('incl/footer.php');
                    ?>
</body>
</html>