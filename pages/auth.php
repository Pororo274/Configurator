<link rel="stylesheet" href="css/reg.css">

<?php
require 'connectdb.php';
require 'incl/validators.php';
$msgs = [
  
];

function validateEmail($email) {
  if (empty($email)) {
    return 'Поле должно быть заполнено';
  }

  if (!isEmail($email)) {
    return 'Некорректный Email';
  }

  if (!isEmailExist($email)) {
    return 'Такой email не зарегистрирован';
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

if (isset($_POST['auth'])) {
  $msgs['email'] = validateEmail($_POST['email']);
  $msgs['password'] = validatePassword($_POST['password']);

  if (!isset($msgs['email']) &&
      !isset($msgs['password'])) {
        $sql = "SELECT id, password FROM user WHERE email = :email";
        $params = [
          'email' => $_POST['email'],
        ];

    try {
      $prepare = $conn->prepare($sql);
      $prepare->execute($params);
      $result = $prepare->fetch(PDO::FETCH_ASSOC);

      if (password_verify($_POST['password'], $result['password'])) {
          $_SESSION['uid'] = $result['id'];
        header('Location: ?p=profile');
      } else {
        $msgs['password'] = 'Неверный пароль';
      }
      
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

                <p class="content__left__text reg__text">Нет аккаунта? Так создай его!</p>

                <a class="content__left__button button__auth" href="?p=reg">Регистрация</a>

            </div>

            <div class="content__right__body">

                <h1 class="content__right__header">Авторизация</h1>

                <form action="?p=auth" class="content__right__form form" name="auth" method="POST">
                    <div class="input-wrap">
                        <input type="text" class="form__input" placeholder="Email" name="email" value="<?= $_POST['email'] ?? '' ?>">
                        <div class="msg"><?= $msgs['email'] ?? '' ?></div>
                    </div>
                    <div class="input-wrap">
                        <input type="text" class="form__input" placeholder="Пароль" name="password" value="<?= $_POST['password'] ?? '' ?>">
                        <div class="msg"><?= $msgs['password'] ?? '' ?></div>
                    </div>
                    <input type="submit" class="form__input submit" value="Авторизоваться" name="auth">

                </form>

            </div>

        </div>

    </div>

</div>