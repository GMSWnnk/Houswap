<?php include("./dbconn.php");

#----------sign up source--------------

#get form data from signup.php 
$c_id= trim($_POST['c_id']);
$c_password= trim($_POST['c_password']);
$c_name= trim($_POST['c_name']);
$c_gender= trim($_POST['c_gender']);
$c_email= trim($_POST['c_email']);
$c_phonenum= trim($_POST['c_phonenum']);
$c_adress= trim($_POST['c_adress']);
$c_birth= trim($_POST['c_birth']);

#insert query
$insert_q="INSERT INTO customer 
           SET c_id='$c_id',
               c_password='$c_password',   
               c_name='$c_name',
               c_gender ='$c_gender',
               c_email ='$c_mail',
               c_phonenum='$c_phonenum',
               c_adress='$c_adress',
               c_birth='$c_birth'";

$insert_d=mysqli_query($conn,$insert_q);

//sucess message
echo"<script>alert('회원가입이 완료되었습니다.')</script>;";
echo"<script>location.replace('login.php')</script>";


#check for user Exist
$check_sql = "SELECT * FROM customer WHERE c_id='$c_id'";

#Exist ID check from DB
$check_id =mysqli_query($conn, $check_sql);
if(mysqli_num_rows($check_id)>0)
{
    echo"<script>alert('존재하는 아이디입니다.')</script>;";
}

mysqli_close($conn);
?>


