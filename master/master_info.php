<html>
  <head>
  </head>
  <meta charset="utf-8">
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/css_base.css?ver=7">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
  <script type="text/javascript" src="../js/base.php"></script>
  <script type="text/javascript" src="../js/user_info.js?ver=6"></script>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">

  <script>
	var bname="";
	<?
		include "../db_connect.php";
		@session_start();
		$info_code = $_SESSION[code];
		$info_id = $_SESSION[userid];
		$info_pw = $_SESSION[userpw];
		$thisID = $_GET[thisID];
		if($info_code!=""){
	?>
	$(function(){
        $(".table").dataTable();
    });
  </script>
  <body>
	<nav id="b_menu">
		<ul>
			<li><a href="../main.php">홈으로</a></li>
			<li><a href="../nav1.php">베스트셀러</a></li>
			<li><a href="#">신간도서</a></li>
			<li><a href="#">추천도서</a></li>
			<li><a href="../nav4.php">입고 희망 게시판</a></li>
		</ul>
	</nav>
	<div id="loginform">
		<div id="quit" onclick="hide_form();"><img src="../image/x.png"/></div>
		<form action="../user/user_del.php" method="post" id="del">
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
		<form id="modify_form" action="master_modify.php" method="post">
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
						$sql  = "select * from master_account ";
						$sql .= "where code='$info_code'";
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
				<button type="button" id="m_modify">정보 수정</button>
				<button type="button" id="m_leave_id">회원 탈퇴</button>
			</div>
		</form>
		<div id="hd"><h1>회원 정보</h1></div>
		<div id="info_btns">
			<button onclick="location.href = 'master_info.php';">전체보기</button>
		</div>
		<form action="master_info.php" id="search_id" method="get">
			<input type="hidden" id="input_id" name="thisID">
		</form>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">아이디</th>
					<th scope="col">이書</th>
					<th scope="col">전화번호</th>
					<th scope="col">주소</th>
					<th scope="col">메일</th>
				</tr>
			</thead>
			<tbody>
				<?
					$sql  = "select * from user ";
					if($thisID!=""){
						$sql .="where id='$thisID'";
					}
					$result = mysql_query($sql);
					$cnt = 0;
					while($row = mysql_fetch_array($result)){
						$cnt++;
						echo "<tr id='i_click'><th scope='row'>$cnt</th>";
						if($row[id] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[id]</td>";
						if($row[name] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[name]</td>";
						if($row[phone] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[phone]</td>";
						if($row[addr] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[addr]</td>";
						if($row[mail] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[mail]</td>";
					}
				?>
			</tbody>
		</table>
		<div id="hd"><h1>주문 정보</h1></div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">주문번호</th>
					<th scope="col">책번호</th>
					<th scope="col">책이름</th>
					<th scope="col">날짜</th>
					<th scope="col">수량</th>
					<th scope="col">구입한 ID</th>
				</tr>
			</thead>
			<tbody>
				<?
					$sql  = "select * from orderlist ";
					if($thisID!=""){
						$sql .= "where user_id='$thisID'";
					}
					$sql .= "order by date desc";
					$result = mysql_query($sql);
					$cnt = 0;
					while($row = mysql_fetch_array($result)){
						$cnt++;
						echo "<tr id='o_click'><th scope='row'>$cnt</th>";
						if($row[o_type] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[o_type]</td>";
						if($row[isbn] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[isbn]</td>";
						if($row[b_name] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[b_name]</td>";
						if($row[date] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[date]</td>";
						if($row[count] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[count]</td>";
						if($row[user_id] == "")
							echo "<td>$not_data</td>";
						else
							echo "<td>$row[user_id]</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
    </div>
  </body>
  <?
	}
	mysql_close($connect);
  ?>
</html>

