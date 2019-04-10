<html>
  <head>
  </head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/css_base.css?ver=1">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
  <script type="text/javascript" src="../js/base.php"></script>
  <script type="text/javascript" src="../js/user_info.js?ver=2"></script>
  <script>
	var bname="";
	<?
		include "../db_connect.php";
		@session_start();
		$info_id = $_SESSION[userid];
		$info_pw = $_SESSION[userpw];
	?>
  </script>
  <body>
	<nav id="b_menu">
		<ul>
			<li><a href="../main.php">홈으로</a></li>
			<li><a href="../nav1.php">베스트셀러</a></li>
			<li><a href="../nav2.php">신간도서</a></li>
			<li><a href="../nav3.php">추천도서</a></li>
			<li><a href="../nav4.php">입고 희망 게시판</a></li>
		</ul>
	</nav>
	<div id="loginform">
		<div id="quit" onclick="hide_form();"><img src="../image/x.png"/></div>
		<form action="user_del.php" method="post" id="del">
			최종적으로 비밀번호를 <br/>
			입력해주세요.
			<input type="hidden" name="id" value="<?echo"$info_id";?>"/>
			<input type="password" name="pw"><br>
			<input type="submit" value="삭제">
		</form>
	</div>
	<div id="grayback"></div>
    <div id="info">
      <div id="hd"><h1>내 정보</h1></div>
	  <form id="modify_form" action="user_modify.php" method="post">
		  <div id="info_data">
			<div class="info_left">
			  <div>아이디</div>
			  <div>이름</div>
			  <div>전화 번호</div>
			  <div>주소</div>
			  <div>e-mail</div>
			</div>
			<div class="info_right">
				<input type="text" value="id" name="uid"/>
				<input type="text" value="name" name="uname"/>
				<input type="text" value="phone" name="ph"/>
				<input type="text" value="addr" name="addr"/>
				<input type="text" value="email" name="email"/>
			  <?
				$not_data = "정보가 없습니다.";
				$sql  = "select * from user ";
				$sql .= "where id='$info_id'";
				$sql .= "and pw='$info_pw'";
				$result = mysql_query($sql);
				$row = mysql_fetch_array($result);
				if($row[id] == "")
					echo "<div>$not_data</div>";
				else
					echo "<div>$row[id]</div>";
				if($row[name] == "")
					echo "<div>$not_data</div>";
				else
					echo "<div>$row[name]</div>";
				if($row[phone] == "")
					echo "<div>$not_data</div>";
				else
					echo "<div>$row[phone]</div>";
				if($row[addr] == "")
					echo "<div>$not_data</div>";
				else
					echo "<div>$row[addr]</div>";
				if($row[mail] == "")
					echo "<div>$not_data</div>";
				else
					echo "<div>$row[mail]</div>";
			  ?>
			</div>
		  </div>
		  <div id="info_btns">
			  <button type="button" id="modify">정보 수정</button>
			  <button type="button" id="leave_id" onclick="show_form()">회원 탈퇴</button>
		  </div>
	  </form>
    </div>
	<div id="wishlist">
      <div id="hd"><h1>장바구니</h1></div>
	  <div class="w_header">
		<div>선택</div><div>그림</div><div>일자</div><div>갯수</div><div>책 이름</div>
	  </div>
	  <div id="wish_data">
		<form action="../order/order_of.php" method="post" class="orders" id="w_order">
			<?
			$sql  = "select * from orderlist ";
			$sql .= "where user_id='$info_id'";
			$sql .= "and o_type like 'W%'";
			$sql .= "order by date desc";
			$result = mysql_query($sql, $connect);
			$cnt = 0;
			while($row = mysql_fetch_array($result)){
				$cnt++;
				echo "<input type='hidden' class='b_type' name='b_type[]' value='$row[o_type]'/>";
				echo "<input type='hidden' class='book_num' name='b_num[]' value='$row[isbn]'/>";
				echo "<input type='hidden' class='b_date' name='b_date[]' value='$row[date]'/>";
				echo "<div class='items' id='w_list'>";
				echo "<div id='w_check'><input type='checkbox' name='b_ch[]' value='$cnt'/></div>";
				echo "<a href='b_detail.php?isbn=$row[isbn]'><div id='data_img'>$row[isbn]</div></a>";
				echo "<div class='w_text'>$row[date]</div>";
				echo "<div class='w_text'><input type='number' class='b_cnt' value='$row[count]' min='1' max='999' name='b_cnt[]'/></div></div>";
			}

			?>
			<button type="button" class="b_del" id="b_buy">구매하기</button>
			<button type="button" class="b_del o_del" id="b_del">삭제하기</button>
		</form>
	  </div>
	</div>
	<div id="purchlist">
      <div id="hd"><h1>구매목록</h1></div>
	  <div class="w_header">
		<div>선택</div><div>그림</div><div>일자</div><div>갯수</div><div>책 이름</div>
	  </div>
	  <div id="purch_data">
		<form action="../order/order_del.php" method="post" class="orders" id="b_order">
			<?
			$cnt = 0;
			$sql  = "select * from orderlist ";
			$sql .= "where user_id='$info_id'";
			$sql .= "and o_type like 'B%'";
			$sql .= "order by date desc";
			$result = mysql_query($sql, $connect);
			while($row = mysql_fetch_array($result)){
				$cnt++;
				echo "<input type='hidden' class='b_type' name='b_type[]' value='$row[o_type]'/>";
				echo "<input type='hidden' class='book_num' name='b_num[]' value='$row[isbn]'/>";
				echo "<input type='hidden' class='b_date' name='b_date[]' value='$row[date]'/>";
				echo "<div class='items' id='b_list'><div id='b_check'>";
				echo "<input type='checkbox' name='b_ch[]' value='$cnt' /></div>";
				echo "<a href='b_detail.php?isbn=$row[isbn]'><div id='b_img'>$row[isbn]</div></a>";
				echo "<div class='b_text'>$row[date]</div>";
				echo "<div class='b_text'><input type='number' class='b_cnt' value='$row[count]' readonly/></div></div>";
			}
			mysql_close($connect);
			?>
			<button type="button" class="b_del o_del" id="p_del">삭제하기</button>
		</form>
	  </div>
	</div>
  </body>
</html>
