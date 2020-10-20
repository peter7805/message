<?php
session_start();

require_once('dbtools.php');

$memberId = $_SESSION['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO message (memberId,title,content) VALUES ('$memberId','$title','$content')";

$db_conn = creat_connection();

$result = exec_sql($db_conn, $sql);

if ($result) {
  echo 'true';
} else {
  echo 'false';
}

mysqli_close($db_conn);