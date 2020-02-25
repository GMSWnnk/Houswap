<?php 
    include './dbconn.php';
?>

<html>
	<head>
		<title>하우스왑</title>
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
	<div class=maintitle>
		<a class="title" href='./mainview.php'>Houswap</a> 
		<input type="text" placeholder="search">
		<button>검색</button>
	</div>	

	<div id="menu">
		<div id="menuclass">
		<table id="menutable">
			<tr><td><a class=menu>메뉴1</a></td>
			<td><a class=menu>메뉴2</a></td>
			<td><a class=menu>메뉴3</a></td>
			<td><a class=menu>메뉴4</a></td>
			<td><a class=menu>메뉴5</a></td></tr>
		</table>
		</div>
	</div>
</div>

<div class=row>	
	<div class="newtable">
		<h4>최근 올라온 상품</h4>
		<hr align="left">
		<table class="photo">
		<tr>
			<td>
			<?php echo "<img src='images/joongbu.png'width=150px height=150px>"?>
			</td>
			<td>
			<?php echo "<img src='images/joongbu.png'width=150px height=150px>"?>
			</td>
			<td>
			<?php echo "<img src='images/joongbu.png'width=150px height=150px>"?>
			</td>
		</tr>
		<tr align=center>
			<td>게시글1</td>
			<td>게시글2</td>
			<td>게시글3</td>
		</tr>
		
		<tr>
			<td>
			<?php echo "<img src='images/joongbu.png'width=150px height=150px>"?>
			</td>
			<td>
			<?php echo "<img src='images/joongbu.png'1111.jpg'width=150px height=150px>"?>
			</td>
			<td>
			<?php echo "<img src='images/joongbu.png'width=150px height=150px>"?>
			</td>
		</tr>
		<tr align=center>
			<td>게시글4</td>
			<td>게시글5</td>
			<td>게시글6</td>
		

		</tr>
		</table>
	</div>
</div>

<div class="newtable">
	<h4>마감 임박 상품</h4>
	<hr align="left">	
		<table class="photo">
		<tr>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100px height=100px>"?>
			</td>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100px height=100px>"?>
			</td>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100px height=100px>"?>
			</td>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100px height=100px>"?>
			</td>
			<td>
			<?php echo "<img src='images/1111.jpg'width=100px height=100px>"?>
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
</div>


</body>
</html>

