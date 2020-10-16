<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "123456";
$db_name = "message_board";

$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Error with MySQL connection');
