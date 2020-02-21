<?php
include './dbconn.php';

//get form data from login.php
$login_id=trim($_POST['c_id']);
$login_password=trim($_POST['c_password']);

$check_q="SELECT * FROM customer WHERE c_id='$login_id' && c_password='$login_password'";
$check_result = mysqli_query($conn, $check_q);
$count = mysqli_num_rows($check_result);

if($count==0){
    echo"<script>alert('가입되지 않은 아이디이거나 잘못된 비밀번호입니다.');</script>";
    echo"<script>location.href='./login.php';</script>";
}

else{
   echo"<script>alert('로그인이 완료되었습니다.');</script>";
   echo"<script>location.href='./mainview.php';</script>";
   
   $_SESSION['ss_id'] = $login_id;
}
mysqli_close($conn);

?>