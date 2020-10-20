<?php
session_start();

require_once('dbtools.php');

$username = $_SESSION['username'];
$memberId = $_SESSION['id'];
$message = $_POST['message'];

$sql = "INSERT INTO message (username,memberId,content) VALUES ('$username','$memberId','$message')";

$db_conn = creat_connection();

$result = exec_sql($db_conn, $sql);

if ($result) {
  echo 'true';
} else {
  echo 'false';
}

mysqli_close($db_conn);
