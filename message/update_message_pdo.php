<?php
session_start();

require_once('dbtools_pdo.php');

$id = $_POST['uid'];
$content = $_POST['content'];

$sql = "UPDATE message SET content = :content WHERE id = :id";

$stmt = $pdo->prepare($sql);

$data_array = array(':id' => $id, ':content' => $content);

$result = $stmt->execute($data_array);

if ($result) {
  echo 'true';
} else {
  echo 'false';
}

$pdo = null;
