<?php 
    include './dbconn.php';
?>

<html>
	<head>
		<title>하우스왑</title>
		<link href="./mainpage.css" rel="stylesheet" type="text/css">
	</head>

<body> 
		<?php if(!isset($_SESSION['ss_id'])){ ?>
		<h5><a href="./login.php">로그인</a>
		<a class=mypage href="./login.php">마이페이지</a></h5>		
		<?php 
		}
		
		else{?>
		<h5><a href="./logout.php">로그아웃</a>
		<a class=mypage href="./mypage.php">마이페이지</a></h5>	  
		<?php }?>
		
	<!-- mainpage name, search -->
	<h1><a class="title" href='./mainview.php'>Houswap</a> 
		<input type="text" placeholder="search">
		<button>검색</button>
	</h1>

	<div id="menu">
		<div id="menufont">
		<a class=menu>메뉴1</a> 
		<a class=menu>메뉴2</a>
		<a class=menu>메뉴3</a>
		<a class=menu>메뉴4</a>
		</div>
	</div>

	<h4>최근 올라온 상품</h4>
	<hr>
	
		<table>
		<tr>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100 height=100>"?>
			</td>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100 height=100>"?>
			</td>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100 height=100>"?>
			</td>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100 height=100>"?>
			</td>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100 height=100>"?>
			</td>
		</tr>
		
		<tr align=center>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		</tr>
		</table>


</body>
</html>

