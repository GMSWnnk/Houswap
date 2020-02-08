<?php 
    include './dbconn.php';
?>

<html>
	<head>
		<title>하우스왑</title>
		<link href="./mainpage.css" rel="stylesheet" type="text/css">
	</head>

<body>
		<h3><a href="./login.php">Login</a></h3>
		

	<div>
	<h1> &nbsp&nbsp Houswap &nbsp&nbsp
		<input type="text" placeholder="search">
		<button>검색</button>
	</h1>
	</div>
		<h4>최근 올라온 상품</h4>
	<hr>
	<br>
		<table>
		<tr>
			<td>
			<?php echo"<img src='D:/eclipsphp/houswap/Houswap/images/1111.jpg'
			width =100 height=100>";?></td>
			<td><img src="D:/eclipsphp/houswap/Houswap/images/1111.jpg" 
			width =100 height=100></td>
			<td><img src="D:/eclipsphp/houswap/Houswap/images/1111.jpg" 
			width =100 height=100></td>
			<td><img src="D:/eclipsphp/houswap/Houswap/images/1111.jpg"
			width =100 height=100></td>
			<td><img src="D:/eclipsphp/houswap/Houswap/images/1111.jpg" 
			width =100 height=100></td>
		</tr>
		
		<tr align=center>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		</tr>
		</table>
		

<?


?>

</body>
</html>

