<?php include './dbconn.php';?>
<html>
<head>
<title>sign up</title>
	<link href="./loginpage.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1><a class="title" href='./mainview.php'>Houswap</a></h1>


<form action="./signupdate.php" method="post" name="signupupdate" onsubmit='return EmptyCheck();'>
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

<?php #error------------------------------------ ?>
<script>
function EmptyCheck(){
	if(document.signupupdate.cs_id.value<5||document.signupupdate.cs_id.value==null){
	    alert('아이디를 입력하세요.');
	    return false;
	}
	else if(document.signupupdate.cs_password.value<5||document.signupupdate.cs_password.vlaue==null){
	    alert('비밀번호를 입력하세요.'); 
	    return false;
	}
	else if(document.signupupdate.cs_name.value==''||document.signupupdate.cs_name.value==null){
	    alert('이름을 입력하세요.');
	    return false;
	}
	else if(document.signupupdate.cs_sex.value==''||document.signupupdate.cs_sex.value==null){
		alert('성별을 입력하세요.');
		return false;
	}
	else if(document.signupupdate.cs_email.value==''||document.signupupdate.cs_email.value==null){
	    alert('이메일을 입력하세요.');
	    return false;
	}
	else if(document.signupupdate.cs_phonenum.value==''||document.signupupdate.cs_phonenum.value==null){
	    alert('핸드폰 번호를 입력하세요.');
	    return false;
	}
	else if(document.signupupdate.cs_adress.value==''||document.signupupdate.cs_adress.value==null){
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

