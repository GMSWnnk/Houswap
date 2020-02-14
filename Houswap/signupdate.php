<?php include("./dbconn.php");

#----------sign up source--------------

#get form data from signup.php 
$cs_id= trim($_POST['cs_id']);
$cs_password= trim($_POST['cs_password']);
$cs_name= trim($_POST['cs_name']);
$cs_sex= trim($_POST['cs_sex']);
$cs_email= trim($_POST['cs_email']);
$cs_phonenum= trim($_POST['cs_phonenum']);
$cs_adress= trim($_POST['cs_adress']);

#insert query
$insert_q="INSERT INTO customer 
           SET c_id='$cs_id',
               c_password='$cs_password',   
               c_name='$cs_name',
               c_sex ='$cs_sex',
               c_email ='$cs_mail',
               c_phonenum='$cs_phonenum',
               c_adress='$cs_adress'";

$insert_d=mysqli_query($conn,$insert_q);

//sucess message
echo"<script>alert('회원가입이 완료되었습니다.')</script>;";
echo"<script>location.replace('login.php')</script>";


#check for user Exist
$check_sql = "SELECT * FROM customer WHERE c_id='$cs_id'";

#Exist ID check from DB
$check_id =mysqli_query($conn, $check_sql);
if(mysqli_num_rows($check_id)>0)
{
    echo"<script>alert('존재하는 아이디입니다.')</script>;";
}

mysqli_close($conn);
?>


