<?php


$routes = [
  '' => 'pages/main.php',
  'auth' => 'pages/auth.php',
  'reg' => 'pages/reg.php',
  'userlist' => 'pages/userList.php',
  'indexconfig' => 'pages/indexConfig.php',
  'profile' => 'pages/userArea.php',
  'userlist' => 'pages/userList.php',
  'tovarlist' => 'pages/tovar.php'
];

function route($get) {
  global $routes;
  require $routes[$get];
}

?>