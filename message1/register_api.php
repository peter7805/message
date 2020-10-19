<?php
require_once('dbtools.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
//將密碼再加密
$password = password_hash($password, PASSWORD_DEFAULT);

//確認是否有重複帳號
$sql = "SELECT * FROM account WHERE username = '$username'";

$db_conn = creat_connection();

$result = exec_sql($db_conn, $sql);

if (mysqli_num_rows($result) != 0) {
  echo 'false';
} else {
  $insert_sql = "INSERT INTO account (username,email,password) VALUES ('$username','$email','$password')";
  
  if(exec_sql($db_conn,$insert_sql)){
    echo 'true';
  }else{
    echo 'insert_false';
  }
}

mysqli_close($db_conn);