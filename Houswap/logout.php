<?php 
session_start();
session_unset();


if(!isset($_SESSION['ss_id'])){
 echo"<script>alert('로그아웃 되었습니다.')</script>";   
 echo"<script>location.replace('./mainview.php')</script>";   
}

session_destory();
?>