<?php
require_once('dbtools_pdo.php');

$id = $_POST['id'];

$sql = "SELECT * FROM message WHERE id = :id";

$stmt = $pdo->prepare($sql);

$data_array = array(':id' => $id);

$stmt->execute($data_array);

//取出資料
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if (count($result) > 0) {
  echo json_encode($result);
} else {
  echo 'no messageData';
}

$pdo = null;
