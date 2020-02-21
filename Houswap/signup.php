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


<form action="./signupdate.php" method="post" name="signupupdate" onsubmit='return EmptyCheck();'>
	<table class="signuptable">
		<tr>
			<td>아이디
				<input type="text" style=width:100%;height:100%; name="c_id">
			</td>
		</tr>
		
		<tr>
			<td>비밀번호
				<input type="password" style=width:100%;height:100%; name="c_password">
			</td>
		</tr>
		
		<tr>
			<td>이름
				<input type="text" style=width:100%;height:100%; name="c_name">
			</td>
		</tr>
		
		<tr>
			<td>성별
				<select style=width:100%;height:100% name="c_sex">
					<option value="">성별</option>
					<option value="남자">남자</option>
					<option value="여자">여자</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>이메일
			 <input type="text" style=width:100%;height:100%; name="c_email">
			</td>
		</tr>
		
		<tr>
			<td>휴대폰번호
				<input type="text" style=width:100%;height:100%; name="c_phonenum"> 
			</td>
		</tr>
		
		<tr>
			<td>주소
				<input type="text" style=width:100%;height:100%; name="c_adress">
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

<?php  
/*$overlap_q= "SELECT * FROM customer WHERE c_id='$c_id'";
$result=mysqli_query($conn, $overlap_q);
$count=mysqli_num_row($result);

if($count==0){
    echo"사용 가능한 아이디입니다.";
}
else{
    echo"존재하는 아이디입니다.";
}*/
?>

<script>
function EmptyCheck(){
	if(document.signupupdate.c_id.value<5){
	    alert('아이디를 5자 이상 입력하세요.');
	    return false;
	}
	if(document.signupupdate.c_password.value.length<5){
	    alert('비밀번호를 5자 이상 입력하세요.'); 
	    return false;
	}
	if(document.signupupdate.c_name.value==""||document.signupupdate.c_name.value==null){
	    alert('이름을 입력하세요.');
	    return false;
	}
	if(document.signupupdate.c_sex.value==""||document.signupupdate.c_sex.value==null){
		alert('성별을 입력하세요.');
		return false;
	}
	if(document.signupupdate.c_email.value==""||document.signupupdate.c_email.value==null){
	    alert('이메일을 입력하세요.');
	    return false;
	}
	if(document.signupupdate.c_phonenum.value==""||document.signupupdate.c_phonenum.value==null){
	    alert('핸드폰 번호를 입력하세요.');
	    return false;
	}
	if(document.signupupdate.c_adress.value==""||document.signupupdate.c_adress.value==null){
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

