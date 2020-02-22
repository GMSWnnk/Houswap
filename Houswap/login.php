<?php include './dbconn.php';?>

<html>
<head>
<title>login</title>
		<link href="./loginpage.css" rel="stylesheet" type="text/css">
</head>

<body>
	
<h1><a class="title" href='./mainview.php'>Houswap</a></h1>

<script>
function EmptyCheck_login(){
	   if(document.login.c_id.value<5){
	       alert('아이디를 입력하세요.');
	       return false;
	   }
	   if(document.login.c_password.value.length<5){
	       alert('비밀번호를 입력하세요.'); 
	       return false;
	   }
	else{
	   return true;
	   }   
	}
</script>

<form action="./logincheck.php" method="post" name="login" onsubmit='return EmptyCheck_login();'>
	<table class="logintable">
		<tr>
			<td>
				<input type="text" style=width:100%;height:100%; placeholder="ID" name="c_id">
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="password"  style=width:100%;height:100%; placeholder="Password" name="c_password">
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="submit" style=width:100%;height:100%; value="로그인">
			</td>
		</tr>	
	</table>
	
<hr style="width:300px;"></hr>	


<div class="sginbutton">
	<h5><a id="signupbutton" href='./signup.php'>회원가입</a></h5>
</div>

</form>


</body>
</html>
