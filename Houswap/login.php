<?php include './dbconn.php';?>

<html>
<head>
<title>login</title>
		<link href="./loginpage.css" rel="stylesheet" type="text/css">
</head>

<body>
	
<h1><a class="title" href='./mainview.php'>Houswap</a></h1>

<form action="./logincheck.php" method="post" name="logincheck">
	<table class="logintable">
		<tr>
			<td>
				<input type="text" style=width:100%;height:100%; placeholder="아이디" name="cs_id">
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="password"  style=width:100%;height:100%; placeholder="비밀번호" name="cs_password">
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="submit" style=width:100%;height:100%; value="로그인">
			</td>
		</tr>	
		
			
	</table>
	
<hr style="width:300px;"></hr>	

<div>
<div class="sginbutton">
	<h5><a id="signupbutton" href='./signup.php'>회원가입</a></h5>
</div>
</div>


</form>


</body>
</html>
