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
        <?php } 
        
		else{?>
		<a href="./logout.php">로그아웃</a>
		<a class="mypage" href="./mypage.php">마이페이지</a>
		<?php 
		//session에 등록된 id 불러오기
		$session_id=$_SESSION['ss_id'];
		
		$sql = "SELECT * FROM customer WHERE c_id='$session_id';";
		$result = mysqli_query($conn, $sql);
		$assoc = mysqli_fetch_assoc($result);
		?>
</div>		
    <div class="maintitle" align="center">
    		<a class="title" href='./mainview.php'>Houswap</a> 
    		
    		<h3 class=mypagetitle>마이페이지</h3>
    <hr>
     </div>
     
     	<div class=mypagetable>
    		<h3 class=myinfo>회원 정보 수정</h3>		
    		
    	<table class="mypage">
    	<tr>
    		<th class="mypage">아이디</th>
    		<td class="mypage">
    		<input type="text" value="<?php echo $assoc['c_id']?>" readonly>
    		</td>
        </tr>
        <tr>
             <th class="mypage">비밀번호</th>
             <td class="mypage">
             <input type="text" value="<?php echo $assoc['c_password']?>" name="c_password">
             </td>
        </tr>
        <tr>
             <th class="mypage">이름</th>
             <td class="mypage">
             <input type="text" value="<?php echo $assoc['c_name']?>" name="c_name">
             </td>
        </tr>
        <tr>
             <th class="mypage">성별</th>
             <td class="mypage">
             <select name="c_gender">
             <option value="<?php echo $assoc['c_gender']?>"><?php echo $assoc['c_gender']?></option>
             <?php
             if($assoc['c_gender']=="여자"){?> 
             <option value="남자">남자</option>
             <?php }
             else {?>
			 <option value="여자">여자</option>  <?php }?>            
             </select>
             </td>
        </tr>
        <tr>
             <th class="mypage">생년월일</th>
             <td class="mypage">
             <input type="text" value="<?php echo $assoc['c_birth']?>" name="c_birth">
             </td>
        </tr>
        <tr>
             <th class="mypage">이메일</th>
             <td class="mypage">
             <input type="text" value="<?php echo $assoc['c_email']?>" name="c_email">
             </td>
        </tr>
        <tr>
             <th class="mypage">휴대전화</th>
             <td class="mypage">
             <input type="text" value="<?php echo $assoc['c_phonenum']?>" name="c_phone">
             </td>
        </tr>
        <tr>
             <th class="mypage">주소</th>
             <td class="mypage">
             <input type="text" value="<?php echo $assoc['c_adress']?>" name="c_adress">
             </td>
        </tr>
          
       	</table> <?php }?>

</div>
	
</body>

</html>