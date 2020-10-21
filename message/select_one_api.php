<?php
require_once('dbtools.php');

$id = $_POST['id'];

$sql = "SELECT * FROM message WHERE id = '$id'";

$db_conn = creat_connection();

$result = exec_sql($db_conn, $sql);

$messageData = array();

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $messageData[] = $row;
  }
  echo json_encode($messageData);
} else {
  echo 'no messageData';
}

mysqli_close($db_conn);
