<?php


function actionHandler() {
  if (isset($_GET['logout'])) {
    logout();
  }
}

function logout() {
  unset($_SESSION);
  setcookie('PHPSESSID', '', time() - 3600, '/');
}