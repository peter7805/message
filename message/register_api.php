<?php
require_once('dbtools.php');

$username = $POST_['username'];
$password = $POST_['password'];

//確認是否有重複帳號
$sql = "SELECT * FROM account WHERE username = '$username'";

$result = mysqli_query($db_conn, $sql);

if (mysqli_num_rows($result) != 0) {
  echo 'false';
} else {
  $sql = "INSERT INTO account(username,password ) VALUE ($username,$password)";
  $result = mysqli_query($db_conn, $sql);
  echo 'true';
}

mysqli_close($db_conn);
