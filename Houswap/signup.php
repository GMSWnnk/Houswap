<?php 
include("./dbconn.php");
?>
<html>
<head>
<title>sign up</title>
	<link href="./loginpage.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1><a class="title" href='./mainview.php'>Houswap</a></h1>


<form action="./signupdate.php" method="post" name="signup" onsubmit='return EmptyCheck_signup();'>
    <!-- id -->
    <div class="signupform">
    	아이디
    	<input type="text" style=width:100%; id="id" placeholder="ID" name="c_id">
    </div>
	<!-- password -->
	<div class="signupform">
    	비밀번호
    	<input type="password" style=width:100%; id="password" placeholder="Password" name="c_password">
    	<div class="check" id="password_check"></div>
    </div>
	<!-- name -->
	<div class="signupform">
    	이름
    	<input type="text" style=width:100%; id="name" placeholder="Name" name="c_name">
    	<div class="check" id="name_check"></div>
     </div>
	<!-- gender -->
	<div class="signupform">
    	성별
    	<select style=width:100%; name="c_gender">
    		<option value="">성별</option>
    		<option value="남자">남자</option>
    		<option value="여자">여자</option>
    	</select>
    </div>
    <!-- birth -->
    <div class="signupform">
    	생년월일
    	<input type="text" style=width:100%; id="birth" placeholder="ex) 971028" name="c_birth">
    	<div class="check" id="birth_check"></div>
    </div>
	<!-- email -->
	<div class="signupform">
    	이메일
    	<input type="text" style=width:100%; id="email" placeholder="E-Mail" name="c_email">
    	<div class="check" id="email_check"></div>
    </div>
	<!-- phone number -->
	<div class="signupform">
    	휴대전화
    	<input type="text" style=width:100%; id="phonenum" placeholder="Phone Number" name="c_phonenum">
    	<div class="check" id="phonenum_check"></div>
    </div>
	<!-- adress -->
	<div class="signupform">
    	주소
    	<input type="text" style=width:100%; id="adress" placeholder="Adress" name="c_adress">
    	<div class="check" id="adress_check"></div>
    </div>
	
	<!-- submit button -->

	<div class="signupform">
	<input class="signsubmit" type="submit" value="회원가입">
	</div>

</form>

<script>
function EmptyCheck_signup(){
	   if(document.signup.c_id.value<5){
	       alert('아이디를 5자 이상 입력하세요.');
	       return false;
	   }
	   if(document.signup.c_password.value.length<5){
	       alert('비밀번호를 5자 이상 입력하세요.'); 
	       return false;
	   }
	   if(document.signup.c_name.value==""||document.signup.c_name.value==null){
	       alert('이름을 입력하세요.');
	       return false;
	   }
	   if(document.signup.c_gender.value==""||document.signup.c_gender.value==null){
	      alert('성별을 입력하세요.');
	      return false;
	   }
	   if(document.signup.c_email.value==""||document.signup.c_email.value==null){
	       alert('이메일을 입력하세요.');
	       return false;
	   }
	   if(document.signup.c_phonenum.value==""||document.signup.c_phonenum.value==null){
	       alert('핸드폰 번호를 입력하세요.');
	       return false;
	   }
	   if(document.signup.c_adress.value==""||document.signup.c_adress.value==null){
	       alert('주소를 입력하세요.');
	       return false;
	   }
	   
	else{
	   return true;
	   }   
	}
</script>

</body>
</html>

