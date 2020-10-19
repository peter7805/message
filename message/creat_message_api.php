<?php
session_start();

require_once('dbtools.php');

$username = $_SESSION['username'];
$memberId = $_SESSION['id'];
$message = $_POST['message'];

var_dump($username);
var_dump($memberId);
var_dump($message);
// exit;

$sql = "INSERT INTO message (username,memberId,message) VALUES ('$username','$memberId',$message')";

$db_conn = creat_connection();

$result = exec_sql($db_conn, $sql);

if ($result) {
  echo 'true';
} else {
  echo 'false';
}

mysqli_close($db_conn);
