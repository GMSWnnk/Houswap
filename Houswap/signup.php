<?php include './dbconn.php';?>
<html>
<head>
<title>sign up</title>
	<link href="./loginpage.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1><a class="title" href='./mainview.php'>Houswap</a></h1>

<form action="./signupdate.php" method="post" name="signup update">
	<table class="signuptable">
		<tr>
			<td>아이디
				<input type="text" style=width:100%;height:100%; name="cs_id">
			</td>
		</tr>
		
		<tr>
			<td>비밀번호
				<input type="password" style=width:100%;height:100%; name="cs_password">
			</td>
		</tr>
		
		<tr>
			<td>이름
				<input type="text" style=width:100%;height:100%; name="cs_name">
			</td>
		</tr>
		
		<tr>
			<td>성별
				<select style=width:100%;height:100% name="cs_sex">
					<option value="">성별</option>
					<option value="남자">남자</option>
					<option value="여자">여자</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>이메일
			 <input type="text" style=width:100%;height:100%; name="cs_email">
			</td>
		</tr>
		
		<tr>
			<td>휴대폰번호
				<input type="text" style=width:100%;height:100%; name="cs_phonenum"> 
			</td>
		</tr>
		
		<tr>
			<td>주소
				<input type="text" style=width:100%;height:100%; name="cs_adress">
			</td>
		</tr>

		
		<!-- submit button -->
		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
		
	</table>
</form>

</body>
</html>

