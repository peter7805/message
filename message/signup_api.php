<?php
require_once('dbtools.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
//將密碼再加密
$password = password_hash($password, PASSWORD_DEFAULT);
//確認信箱格式
$checkemail = '/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/';
//確認是否有重複帳號
$sql = "SELECT * FROM account WHERE email = '$email'";

$db_conn = creat_connection();

$result = exec_sql($db_conn, $sql);

if (mysqli_num_rows($result) != 0) {
  echo 'false';
} else {
  if (!preg_match($checkemail, $email)) {
    echo 'email_false';
  } else {
    $db_conn = creat_connection();
    $insert_sql = "INSERT INTO account (username, email, password) VALUES ('$username', '$email', '$password')";
    if (exec_sql($db_conn, $insert_sql)) {
      echo 'true';
    } else {
      echo 'insert_false';
    }
  }
}

mysqli_close($db_conn);
