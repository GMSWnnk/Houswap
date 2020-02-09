<?php include("./dbconn.php");

#----------sign up source--------------

#check for user presence
$check_sql = "SELECT * FROM customer WHERE c_id='$c_id'";

#id 존재여부를 DB를 통해 체크
$check_num = mysqli_query($conn, $check_sql);
if(mysqli_num_rows($check_num)>0)
{
    echo "존재하는 아이디입니다.";
    exit;
}

#Signup.php에서 form값 받기
$c_id= trim(_POST['c_id']);
$c_password= trim(_POST['c_password']);
$c_name= trim(_POST['c_name']);
$c_sex= trim(_POST['c_sex']);
$c_email= trim(_POST['c_email']);
$c_phonenum= trim(_POST['c_phonenum']);
$c_adress= trim(_POST['c_adress']);

#Empty Error Message
if(!$c_id){ echo "아이디를 입력해주세요.";}
else if($c_id>5||$c_id<13){ echo"아이디는 5~12자 이내여야합니다.";}
if(!$c_password){ echo "비밀번호를 입력해주세요.";}
else if(!$c_name){ echo "이름을 입력해주세요.";}
else if(!$c_sex){ echo "성별을 선택해주세요.";}
else if(!$c_email){ echo "이메일을 입력해주세요.";}
else if(!$c_phonenum){ echo "휴대폰번호를 입력해주세요.";}
else if(!$c_adress){ echo "주소를 입력해주세요.";}


#insert query
$insert_q="INSERT INTO customer 
           SET c_id='$c_id',
               c_password='$c_password'";      
 
?>