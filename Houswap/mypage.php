<?php 
    include './dbconn.php';
?>

<html>
	<head>
		<title>하우스왑 - 마이페이지</title>
		<link href="./mainpage.css" rel="stylesheet" type="text/css">
	</head>

<body>

<div id=topview> <!--login+mainfont+searchtab-->		
		<?php if(!isset($_SESSION['ss_id'])){ ?>
		<a href="./login.php">로그인</a>
		<a class=mypage href="./login.php">마이페이지</a>
		<?php 
		}
		
		else{?>
		<a href="./logout.php">로그아웃</a>
		<a class=mypage href="./mypage.php">마이페이지</a>
		<?php }?>
		
	<div class=maintitle align="center">
		<a class="title" href='./mainview.php'>Houswap</a> 
	</div>
	
			<h3 align="center">마이페이지</h3>
			<hr>
			
			<h3 class="mypagetext">내정보</h3>
		
</div>
	
</body>

</html>