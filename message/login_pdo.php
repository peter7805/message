<?php
session_start();

require_once('dbtools_pdo.php');

$email = $_POST['email'];
$password = $_POST['password'];

//確認是否有此帳號
$sql = "SELECT * FROM account WHERE email = :email";

$stmt = $pdo->prepare($sql);

$data_array = array(':email' => $email);

$stmt->execute($data_array);

//取出資料
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
  $confirm_pwd = $result['password'];
  $check_pwd = password_verify($password, $confirm_pwd);
  if (!$check_pwd) {
    echo 'pwd_false';
  } else {
    $_SESSION['username'] = $result['username'];
    $_SESSION['id'] = $result['id'];
    echo 'true';
  }
} else {
  echo 'account_false';
}

$pdo = null;
