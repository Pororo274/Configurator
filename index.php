<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Configurator</title>
</head>
<body>
  <?php
  session_start();
  require 'connectdb.php';
  require 'router/router.php';
  require 'incl/actions.php';

  actionHandler();


  $p = $_GET['p'] ?? '';

  if ($p != 'auth' && $p != 'reg') {
    require 'incl/header.php';
  }
  

  route($p);

  if ($p != 'auth' && $p != 'reg') {
    require 'incl/footer.php';
  }

  
  ?>
</body>
</html>