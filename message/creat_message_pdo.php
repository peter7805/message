<?php
session_start();

require_once('dbtools_pdo.php');

$username = $_SESSION['username'];
$memberId = $_SESSION['id'];
$message = $_POST['message'];

$sql = "INSERT INTO message (username, memberId, content) VALUES (:username, :memberId, :content)";

$stmt = $pdo->prepare($sql);

$data_array = array(':username' => $username, ':memberId' => $memberId, ':content' => $message);

$result = $stmt->execute($data_array);

if ($result) {
  echo 'true';
} else {
  echo 'false';
}

$pdo = null;
