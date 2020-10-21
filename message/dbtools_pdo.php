<?php

$db_host = "mysql";
$db_user = "root";
$db_pass = "123456";
$db_name = "message_board";
$charset = "utf8mb4";

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$charset";

try {
  $pdo = new PDO($dsn, $db_user, $db_pass);
} catch (\PDOException $e) {
  echo 'Connection Failed  ' . $e->getMessage();
}
