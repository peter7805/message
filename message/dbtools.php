<?php
//建立2個的function提供連線資料庫時呼叫
//設定連線function
function creat_connection(){
  $db_host = "localhost";
  $db_user = "owner";
  $db_pass = "123456";
  $db_name = "message_board";

  $db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Error with connection'.mysqli_connect_error());

  mysqli_query($db_conn,"SET NAMES UTF8");

  return $db_conn;
}

//設定資料庫連線function
function exec_sql($db_conn,$sql){

  $result = mysqli_query($db_conn,$sql) or die ('Error with MySQL connection'.mysqli_connect_error());

  return $result;
}