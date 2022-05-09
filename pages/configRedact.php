<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/configRedact.css">
</head>
<body>
<?php
                include('incl/header.php');
            ?>
    <section class="configRedact">
        <div class="container">
            <form>
            <div class="configRedact_head">
                <p class="page_zaglav configRedact_zaglav">Редактирование MyTestConfig</p>
                <button href="#" class="button">Сохранить изменения</button>
            </div>
            <form class="configRedact_form">
                <label for="name" class="label configRedact_label">Название конфигурации</label>
                <input type="text" id="name" class="input configRedact_input">
                <label for="about" class="label configRedact_label m40">Описание</label>
                <textarea type="text" id="about" class="input configRedact_input configRedact_textarea"></textarea>
            </form>
            <h2 class="configurator__title title configurator__title_congifRedact">Конфигуратор</h2>
            <p class="configurator__subtitle subtitle">Добавьте товар в категорию, для этого кликните по карточке товара. Обязательные комплектующие отмечены звездочкой.</p>
            <div class="configurator__list">
                <div class="list__type1 list">
                    <a href="#" class="configurator__item">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/cpu.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Процессор*</p>
                    </a>
                    <a href="tovar.php" class="configurator__item">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/gpu.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Видеокарта</p>
                    </a>
                    <a href="#" class="configurator__item">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/power.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Блок питания*</p>
                    </a>
                    <a href="#" class="configurator__item">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/ssd.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">SSD диск</p>
                    </a>
                    <a href="#" class="configurator__item">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/case.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Корпус*</p>
                    </a>
                    <a href="#" class="configurator__item">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/cooler.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Кулер*</p>
                    </a>
                </div>
                <div class="list__type2 list">
                    <a href="#" class="configurator__item change__width">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/motherboard.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Материнская плата*</p>
                    </a>
                    <a href="#" class="configurator__item change__width">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/ram.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Оперативная память*</p>
                    </a>
                    <a href="#" class="configurator__item change__width">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/hdd.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Жесткий диск</p>
                    </a>
                    <a href="#" class="configurator__item change__width">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/cooling_system.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Система охлаждения</p>
                    </a>
                    <a href="#" class="configurator__item change__width">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/sound_card.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Звуковая карта</p>
                    </a>
                    <a href="#" class="configurator__item change__width">
                        <div class="configurator__icon">
                            <img src="img/configurator_block/connector.png" alt="icon">                                       
                        </div>
                        <p class="configurator__name">Контроллеры</p>
                    </a>
                </div>
            </div>
            <div class="configurator__control">
                <div class="configurator__price">
                    <p class="configurator__text">Стоимость конфигурации:</p>
                    <h2 class="configurator__value">40 880 ₽</h2>
                </div>
            </div>
            <p class="page_textZaglav configRedact_textZaglav">Cостав конфигурации</p>
            <p class="configRedact_text">Для проверки совместимости в конфигурации должно быть не меньше 2-х компонентов</p>
            <div class="configuration_list__flex">
                <div class="configuration_list__item">
                    <div class="configuration_list__main">
                        <div class="configuration_list__img">
                            <div class="config_img">
                                <img src="img/configurator_block/processor.png" alt="">
                            </div>
                        </div>
                        <div class="configuration_list__info">
                            <p class="config_info__name">
                                Процессор AMD A6 9500, OEM
                            </p>
                            <p class="config_info__code">
                                Код товара: 1228336
                            </p>
                            <p class="config_info__about">
                                Ядро Excavator, сокет SocketAM4, ядер — 2, потоков — 2, частота 3.5 ГГц и 3.8 ГГц в режиме Turbo, техпроцесс 28нм, поддержка памяти DDR4 каналов памяти — 2, контроллер PCI Express 3.0, графическое ядро AMD Radeon R5
                            </p>
                        </div>
                    </div>
                    <div class="configuration_list__price">
                        <p class="config_price">
                            5 990 ₽
                        </p>
                        <a href="#" class="config_replace">Заменить</a>
                        <a href="#" class="config_replace">Удалить</a>
                    </div>
                </div>
                <div class="configuration_list__item">
                    <div class="configuration_list__main">
                        <div class="configuration_list__img">
                            <div class="config_img">
                                <img src="img/configurator_block/mothe_plate.png" alt="">
                            </div>
                        </div>
                        <div class="configuration_list__info">
                            <p class="config_info__name">
                                Материнская плата ASUS PRIME H310M-K R2.0
                            </p>
                            <p class="config_info__code">
                                Код товара: 1008126
                            </p>
                            <p class="config_info__about">
                                Гнездо процессора: LGA 1151v2; чипсет Intel H310; память DDR4 — 2слота; частотой до 2666МГц; тип поставки: Ret; mATX
                            </p>
                        </div>
                    </div>
                    <div class="configuration_list__price">
                        <p class="config_price">
                            5 990 ₽
                        </p>
                        <a href="#" class="config_replace">Заменить</a>
                        <a href="#" class="config_replace">Удалить</a>
                    </div>
                </div>
                <div class="configuration_list__item">
                    <div class="configuration_list__main">
                        <div class="configuration_list__img">
                            <div class="config_img">
                                <img src="img/configurator_block/kuler1.png" alt="">
                            </div>
                        </div>
                        <div class="configuration_list__info">
                            <p class="config_info__name">
                                Кулер Aerocool BAS
                            </p>
                            <p class="config_info__code">
                                Код товара: 1121195
                            </p>
                            <p class="config_info__about">
                                Вентиляторов — 1шт, 120мм, 1200 об/мин; для ЦП до 100 Вт; основание: цельное, материал — алюминий; радиатор — алюминий; питание от МП — 3-pin; высота 62 мм
                            </p>
                        </div>
                    </div>
                    <div class="configuration_list__price">
                        <div class="count">
                            <div class="count_number">1</div>
                            <div class="count_text">штук</div>
                            <div class="count_multi"><img src="img/configurator_block/multi.png" alt=""></div>
                        </div>
                        <p class="config_price">
                            1 730 ₽
                        </p>
                        <a href="#" class="config_replace">Заменить</a>
                        <a href="#" class="config_replace">Удалить</a>
                    </div>
                </div>
                <div class="configuration_list__item">
                    <div class="configuration_list__main">
                        <div class="configuration_list__img">
                            <div class="config_img">
                                <img src="img/configurator_block/ozu1.png" alt="">
                            </div>
                        </div>
                        <div class="configuration_list__info">
                            <p class="config_info__name">
                                Модуль памяти Corsair Vengeance LPX CMK16GX4M2A2666C16 DDR4 — 2x 8ГБ
                            </p>
                            <p class="config_info__code">
                                Код товара: 1265252
                            </p>
                            <p class="config_info__about">
                                288-pin; частота: 2666; латентность: CL16; форм-фактор: DIMM; комплект модулей для идеальной совместной работы, оснащается радиатором для эффективного охлаждения, тип поставки: Ret
                            </p>
                        </div>
                    </div>
                    <div class="configuration_list__price">
                        <div class="count">
                            <div class="count_number">1</div>
                            <div class="count_text">штук</div>
                            <div class="count_multi"><img src="img/configurator_block/multi.png" alt=""></div>
                        </div>
                        <p class="config_price">
                            1 730 ₽
                        </p>
                        <a href="#" class="config_replace">Заменить</a>
                        <a href="#" class="config_replace">Удалить</a>
                    </div>
                </div>
                <div class="configuration_list__item">
                    <div class="configuration_list__main">
                        <div class="configuration_list__img">
                            <div class="config_img">
                                <img src="img/configurator_block/pc1.png" alt="">
                            </div>
                        </div>
                        <div class="configuration_list__info">
                            <p class="config_info__name">
                                Корпус mATX Aerocool Qs-240, черный
                            </p>
                            <p class="config_info__code">
                                Код товара: 1385212
                            </p>
                            <p class="config_info__about">
                                Размер: Micro-Tower; USB 2.0: 2шт, USB 3.0: 1шт, + аудио на передней панели; внутренние 3.5"- 2шт; прозрачная боковая панель, материал стенок — сталь, 0.5мм, видеокарта длиной, до: 320мм
                            </p>
                        </div>
                    </div>
                    <div class="configuration_list__price">
                        <p class="config_price">
                            5 990 ₽
                        </p>
                        <a href="#" class="config_replace">Заменить</a>
                        <a href="#" class="config_replace">Удалить</a>
                    </div>
                </div>
                <div class="configuration_list__item">
                    <div class="configuration_list__main">
                        <div class="configuration_list__img">
                            <div class="config_img">
                                <img src="img/configurator_block/block_power.png" alt="">
                            </div>
                        </div>
                        <div class="configuration_list__info">
                            <p class="config_info__name">
                                Блок питания LinkWorld LW2-500W case, 500Вт
                            </p>
                            <p class="config_info__code">
                                Код товара: 1115759
                            </p>
                            <p class="config_info__about">
                                Размер вентилятора 80мм; ATX; мощность: 500Вт; питание MB и CPU: 24+4 pin; питание видеокарты: отсутствует; разъемы Molex: 2шт; разъемы SATA: 3шт; цвет: стандарт; тип поставки Ret
                            </p>
                        </div>
                    </div>
                    <div class="configuration_list__price">
                        <p class="config_price">
                            5 990 ₽
                        </p>
                        <a href="#" class="config_replace">Заменить</a>
                        <a href="#" class="config_replace">Удалить</a>
                    </div>
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