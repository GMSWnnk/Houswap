<?php 
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="1234";
$mysql_db="houswap";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);

if(!$conn){
    die("연결 실패: " . mysqli_connect_error());
}

session_start();

?>