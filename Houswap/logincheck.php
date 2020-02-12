<?php
include './dbconn.php';

//get form data from login.php
$login_id=trim($_POST['cs_id']);
$login_password=trim($_POST['cs_password']);

if(!$login_id){
    echo"<script>alert('아이디를 입력해 주세요.')</script>";
    echo"<script>location.replace('./login.php')</script>";
}
else if(!$login_password){
    echo"<script>alert('비밀번호를 입력해 주세요.')</script>";
    echo"<script>location.replace('./login.php')</script>";
}

$check_q="SELECT * FROM customer 
WHERE c_id='$login_id'&& c_password='$login_password'";
$check_result = mysqli_query($conn, $check_q);

//ddd
?>