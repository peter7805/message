<?php
session_start();
require_once('dbtools.php');

$email = $_POST['email'];
$password = $_POST['password'];

//確認是否有此帳號
$sql = "SELECT * FROM account WHERE email = '$email'";

$db_conn = creat_connection();

$result = exec_sql($db_conn, $sql);
$result2 = mysqli_fetch_assoc($result);
$confirm_pwd = $result2['password'];

if (mysqli_num_rows($result) != 0) {
  $check_pwd = password_verify($password, $confirm_pwd);
  if (!$check_pwd) {
  // if ($password != $confirm_pwd) {
    echo 'pwd_false';
  } else {
    $_SESSION['username'] = $result2['username'];
    $_SESSION['id'] = $result2['id'];
    echo 'true';
  }
} else {
  echo 'account_false';
}

mysqli_close($db_conn);