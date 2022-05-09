<link rel="stylesheet" href="css/user_list.css">


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

if ($role != 2) {
    header('Location: ?');
}


$sql = "SELECT id, email, name, regDate FROM user";

try {
    $prepare = $conn->prepare($sql);
    $prepare->execute();
} catch (PDOException $e) {
    echo $e;
}

?>
<section class="user_list">
        <div class="container">
            <p class="page_zaglav user_list_zaglav">Список пользователей (28)</p>
            <form class="user_list_form">
                <input type="text" class="input" placeholder="Найти пользователя">
                <button class="button">Поиск</button>
            </form>
            <div class="overflow">
                <table class="user_list_table">
                            <!-- <tr class="user_list_tr glav_tr">
                                <th class="user_list_td">Id пользователя</th>
                                <th class="user_list_td">Дата регистрации</th>
                                <th class="user_list_td">Имя</th>
                                <th class="user_list_td">Email</th>
                                <th class="user_list_td">Действие</th>
                            </tr> -->
                    <!-- <tr class="user_list_tr">
                            <td class="user_td">127295459</td>
                            <td class="user_td">26.03.2022 12:34</td>
                            <td class="user_td">Антон</td>
                            <td class="user_td">anton_test@yandex.ru</td>
                            <td class="user_td"><a href="#">Забанить</a></td>
                    </tr> -->
                        <tr class="glav_tr">
                            <th>id пользователя</th>
                            <th>Дата регистрации</th>
                            <th>Имя</th>
                            <th>Email</th>
                            <th>Действие</th>
                        </tr>
                        <?php
                        while ($item = $prepare->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['regDate'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><a href="?delete=<?= $item['id'] ?>">Забанить</a></td>
                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>