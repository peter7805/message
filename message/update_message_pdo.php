<?php
session_start();

require_once('dbtools_pdo.php');

$id = $_POST['uid'];
$content = $_POST['content'];

$sql = "UPDATE message SET content = ? WHERE id = ?";

$pdo->prepare($sql)->execute([$content, $id]);

mysqli_close($pdo);
