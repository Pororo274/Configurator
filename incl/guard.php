<?php

function guard($session) {
  global $conn;
  if (!isset($_SESSION['uid'])) {
    return false;
  }
  return true;
}

function getStatus() {
  if (isset($_SESSION['uid'])) {
    $sql = "SELECT roleId FROM user WHERE id = :id";
    $params = [
        'id' => $_SESSION['uid']
    ];

    try {
        $prepare = $conn->prepare($sql);
        $prepare->execute($params);
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
        return $result['roleId'];
    } catch (PDOException $e) {
        echo $e;
    }
} else {
    return 0;
}
}