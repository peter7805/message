<?php
session_start();

require_once('dbtools.php');

$id = $_POST['uid'];
$content = $_POST['content'];

$sql = "UPDATE message SET content = '$content' WHERE id = '$id'";

$db_conn = creat_connection();

$result = exec_sql($db_conn, $sql);

if ($result) {
  echo 'true';
} else {
  echo 'false';
}

mysqli_close($db_conn);
