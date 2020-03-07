<?php 
    include './dbconn.php';
?>

<html>
	<head>
		<title>하우스왑 - 동네 애물단지 물물교환</title>
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
		
		
	<!-- mainpage name, search -->
	<div class=maintitle align="center">
		<a class="title" href='./mainview.php'>Houswap</a> 
	</div>
	<input type="text" placeholder="search"> <button>검색</button>
</div>

	<div class="menu" align="center">
	<div class="textline"><b id="new">최근 올라온 상품</b><a href="./morenewpage.php">더보기</a></div>
<hr>
	
<div>
	<div class=newtable></div>
	<div class=newtable></div>
	<div class=newtable></div>
	<div class=newtable></div>
</div>


<div class="textline"><b id="deadline">마감 임박 상품</b><a href="./morenewpage.php">더보기</a></div>
	<hr>
	
<div>
	<div class=newtable></div>
	<div class=newtable></div>
	<div class=newtable></div>
	<div class=newtable></div>
</div>
</div>

</body>
</html>

