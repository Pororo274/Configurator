<?php

function isEver($value, $num) {
  return mb_strlen($value) >= $num;
}

function isEqual($value1, $value2) {
  return $value1 == $value2;
}

function isEmail($value) {
  return filter_var($value, FILTER_VALIDATE_EMAIL);
}

function isEmailExist($value) {
  global $conn;
  $sql = "SELECT COUNT(*) AS emailCount FROM user WHERE email = :email";
  $params = [
    'email' => $value
  ];

  try {
    $prepare = $conn->prepare($sql);
    $prepare->execute($params);

    $result = $prepare->fetch(PDO::FETCH_ASSOC);

    if ($result['emailCount'] == 0) {
      return false;
    }
    return true;
  } catch (PDOException $e) {
    echo $e;
  }
}