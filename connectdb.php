<?php

try {
  $conn = new PDO('mysql:host=localhost;dbname=configurator;charset=utf8', 'root');
} catch (PDOException $e) {
  echo $e;
}