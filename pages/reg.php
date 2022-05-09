<link rel="stylesheet" href="css/reg.css">

<?php
require 'connectdb.php';
require 'incl/validators.php';
$msgs = [
  
];

function validateName($name) {
  if (empty($name)) {
    return 'Поле должно быть заполнено';
  }

  if (!isEver($name, 6)) {
    return 'Поле должно содержать не менее 6 символов';
  }
  return null;
}

function validateEmail($email) {
  if (empty($email)) {
    return 'Поле должно быть заполнено';
  }

  if (!isEmail($email)) {
    return 'Некорректный Email';
  }

  if (isEmailExist($email)) {
    return 'Такой email уже зарегистрирован';
  }
  return null;
}

function validatePassword($password) {
  if (empty($password)) {
    return 'Поле должно быть заполнено';
  }

  if (!isEver($password, 6)) {
    return 'Поле должно содержать не менее 6 символов';
  }
}


function validatePasswordConfirm($password, $passwordConfirm) {
  if (empty($passwordConfirm)) {
    return 'Поле должно быть заполнено';
  }

  if (!isEqual($password, $passwordConfirm)) {
    return 'Пароли не совпадают';
  }
}


if (isset($_POST['reg'])) {
  $msgs['name'] = validateName($_POST['name']);
  $msgs['email'] = validateEmail($_POST['email']);
  $msgs['password'] = validatePassword($_POST['password']);
  $msgs['password_confirm'] = validatePasswordConfirm($_POST['password'], $_POST['password_confirm']);

  if (!isset($msgs['name']) &&
      !isset($msgs['email']) &&
      !isset($msgs['password']) &&
      !isset($msgs['password_confirm'])) {
    $sql = "INSERT INTO user (email, password, name) VALUES (:email, :password, :name)";
    $params = [
      'email' => $_POST['email'],
      'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
      'name' => $_POST['name']
    ];

    try {
      $prepare = $conn->prepare($sql);
      $prepare->execute($params);
      header('Location: ?p=auth');
    } catch (PDOException $e) {
      echo $e;
    }
  }
}
?>

<style>
  <?php
    foreach ($msgs as $key => $value) {
      ?>
      [name="<?= isset($msgs[$key]) ? $key : '' ?>"] {
        border-color: #c95858;
      }

      [name="<?= isset($msgs[$key]) ? $key : '' ?>"] + .msg {
        position: absolute;
        color: #c95858;
        background: linear-gradient(180deg, #211940 0%, #211940 50%, #181231 100%);
        left: 30px;
        top: 100%;
        font-size: 12px;
        padding: 0 5px;
        transform: translateY(-50%);
      } 
      <?php
    }
  ?>
  .input-wrap {
    position: relative;
  }
</style>

<div class="bg"></div>
    
    <div class="wrapper__auth">
        <div class="wrapper__container auth__container">
                <div class="wrapper__content">
                    <div class="content__left__body">
                        <h1 class="content__left__header">Добро пожаловать!</h1>
                        <p class="content__left__text reg__text">Чтобы оставаться на связи с нами, пожалуйста, войдите в систему, указав свои личные данные</p>
                        <a class="content__left__button button__auth" href="?p=auth">Авторизация</a>
                    </div>
                    <div class="content__right__body">
                        <h1 class="content__right__header">Регистрация</h1>

                        <form class="content__right__form form" name="reg" method="POST" action="?p=reg">
                            <div class="input-wrap">
                              <input type="text" class="form__input" placeholder="Имя" name="name" value="<?= $_POST['name'] ?? '' ?>">
                              <div class="msg"><?= $msgs['name'] ?? '' ?></div>
                            </div>
                            <div class="input-wrap">
                              <input type="text" class="form__input" placeholder="Email" name="email" value="<?= $_POST['email'] ?? '' ?>">
                              <div class="msg"><?= $msgs['email'] ?? '' ?></div>
                            </div>
                            <div class="input-wrap">
                              <input type="text" class="form__input" placeholder="Пароль" name="password" value="<?= $_POST['password'] ?? '' ?>">
                              <div class="msg"><?= $msgs['password'] ?? '' ?></div>
                            </div>
                            <div class="input-wrap">
                              <input type="text" class="form__input" placeholder="Подтвердите пароль" name="password_confirm" value="<?= $_POST['password_confirm'] ?? '' ?>">
                              <div class="msg"><?= $msgs['password_confirm'] ?? '' ?></div>
                            </div>
                            <input type="submit" class="form__input submit" value="Зарегистрироваться" name="reg">
                        </form>
                    </div>
                </div>
        </div>
    </div>