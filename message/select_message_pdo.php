<?php
require_once('dbtools_pdo.php');

$sql = "SELECT * FROM message ORDER BY creat_time DESC";

$stmt = $pdo->prepare($sql);

$stmt->execute();

//取出所有資料
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
  echo json_encode($result);
} else {
  echo 'no messageData';
}

$pdo = null;
