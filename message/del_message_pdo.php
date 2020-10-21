<?php
session_start();

require_once('dbtools_pdo.php');

$id = $_POST['id'];

$sql = "DELETE FROM message WHERE id = :id";

$stmt = $pdo->prepare($sql);

$data_array = array(':id' => $id);

$result = $stmt->execute($data_array);

if ($result) {
  echo 'true';
} else {
  echo 'false';
}

$pdo = null;
