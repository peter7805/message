<?php
require_once('dbtools_pdo.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
//將密碼再加密
$password = password_hash($password, PASSWORD_DEFAULT);
//確認是否有重複帳號
$sql = "SELECT * FROM account WHERE email = :email";

$stmt = $pdo->prepare($sql);

$data_array = array(':email' => $email);

$stmt->execute($data_array);

//取出資料
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
  echo 'false';
} else {
  $insert_sql = "INSERT INTO account (username, email, password) VALUES (:usernema, :email, :password)";
  $insert_stmt = $pdo->prepare($insert_sql);
  $data_array = array(':usernema' => $username, ':email' => $email, ':password' => $password);
  if ($insert_stmt->execute($data_array)) {
    echo 'true';
  } else {
    echo 'insert_false';
  }
}

$pdo = null;
