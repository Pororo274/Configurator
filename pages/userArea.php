<?php
require 'connectdb.php';
require 'incl/guard.php';

if (guard($_SESSION)) {
    $sql = "SELECT name, email FROM user WHERE id = :id";
    $params = [
        'id' => $_SESSION['uid']
     ];

     try {
         $prepare = $conn->prepare($sql);
         $prepare->execute($params);
         $result = $prepare->fetch(PDO::FETCH_ASSOC);
     } catch (PDOException $e) {
         echo $e;
     }
} else {
    header('Location: ?');
}

?>

<link rel="stylesheet" href="css/userArea.css">

    <section class="userArea">
        <div class="container">
            <div class="userArea_head">
                <p class="page_zaglav userArea_zaglav">
                    Профиль пользователя
                </p>
                <a href="#" class="button">Применить</a>
            </div>
            <div class="userArea_form">
                <form method="POST" name="">
                    <!-- <div class="userArea_form__item">
                        <label for="name" class="label userArea_label">Имя пользователя</label>
                        <div class="input_flex">
                            <input type="text" id="name" class="input">
                            <button href="#" class="button button_input">Изменить</button>
                        </div>
                    </div> -->
                    <div class="userArea_form__item">
                        <label for="name" class="label userArea_label">Имя пользователя</label>
                            <input type="text" id="name" class="input" value="<?= $result['name'] ?>">
                    </div>
                    <div class="userArea_form__item">
                        <label for="name" class="label userArea_label">Email</label>
                            <input type="text" id="name" class="input" value="<?= $result['email'] ?>">
                            
                    </div>
                    
                    <div class="userArea_form__item">
                        <label for="name" class="label userArea_label">Новый пароль</label>
                            <input type="text" id="name" class="input">
                    </div>
                    <div class="userArea_form__item">
                        <label for="name" class="label userArea_label">Потверждение пароля</label>
                            <input type="text" id="name" class="input">
                    </div>
                </form>
            </div>
        </div>
    </section>