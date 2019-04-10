<?@session_start(); // 신규 도서 등록 폼 페이지
	include "../db_connect.php"; // db접속 php 포함
	$data = $_POST[b_modify];
	$sql = "select * from new_book n inner join groupcd g on n.group_cd = g.group_cd 
			where bookImageURL = '$data'"; // 중복 검사
	$result = mysql_query($sql);
	if($row = mysql_fetch_array($result)){
?>
<html>
  <head>
  <meta charset="utf-8">
    <title> 다있어 서점</title>
  </head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	<link rel="stylesheet" type="text/css" href="../css/css_base.css">
	<style type="text/css">
		#classification{height:410px;}
		main{top:150px;}
	</style>
  <body>
	<nav id="b_menu">
		<ul>
			<li><a href="../main.php">홈으로</a></li>
			<li><a href="../nav1.php">베스트셀러</a></li>
			<li><a href="../nav2.php">신간도서</a></li>
			<li><a href="#">추천도서</a></li>
			<li><a href="../nav4.php">입고 희망 게시판</a></li>
		</ul>
	</nav>
	<main>
		<div id="hd"><h1>책 수정</h1></div>
		<div id="modify_data">
			<form enctype="multipart/form-data" action="enroll_ok.php" method="post">
				<!-- multipart/form-data: 이미지 파일 등록을 위한 enctype -->
				<div><b>책 제목</b></div>
				<input type="hidden" name="isbn" value="<?=$row[isbn]?>"/>
				<input type="text" name="title" value="<?=$row[title]?>"/>
				<div><b>지은이</b></div>
				<input type="text" name="authors" value="<?=$row[authors]?>"/>
				<div><b>출판사</b></div>
				<input type="text" name="publisher" value="<?=$row[publisher]?>"/>
				<div><b>기존 책 표지</b></div>
				<input type="hidden" name="pre_img" value="<?=$row[bookImageURL]?>"/>
				<img src="../img/<?=$row[bookImageURL]?>" width="300px" height="500px" alt="<?$row[isbn]?>"/>
				<div><b>변경 후 책 표지</b></div>
				<input type="file" name="bookImageURL"/>
				<div><b>관심분야</b></div>
				<select id="sel1" name="sel1">
				<?
					$sql2 = "select * from groupcd ";
					$result2 = mysql_query($sql2);
					while($row2 = mysql_fetch_array($result2)){
						if($row[group_cd] == $row2[group_cd])
							echo "<option value='$row2[group_cd]' selected>$row2[group_nm]</option>";
						else
							echo "<option value='$row2[group_cd]'>$row2[group_nm]</option>";
					}
				?>
				</select>
				<button> 변경 </button>
			</form>
		</div>
	</main>
    <div id="footer">
     <hr>
     <div id="flogo"><a href="#"><img src="../image/logo.jpg"  height="120" width="200"></a></div>
     
     <div id="intro">
      <a href="#" id="foot">도서관 소개</a> &nbsp;&nbsp;ㅣ &nbsp;&nbsp;
      <a href="#" id="foot">이용안내</a> &nbsp;&nbsp;ㅣ &nbsp;&nbsp;
      <a href="#" id="foot">FAQ</a> &nbsp;&nbsp;ㅣ &nbsp;&nbsp;
      <a href="#" id="foot">공지사항</a> &nbsp;&nbsp;ㅣ &nbsp;&nbsp;
      <a href="#" id="foot">오시는 길</a> &nbsp;&nbsp;ㅣ &nbsp;&nbsp;
      <a href="#" id="foot">사이트맵</a> &nbsp;&nbsp;ㅣ &nbsp;&nbsp;
      <a href="#" id="foot">이용약관</a> &nbsp;&nbsp;ㅣ &nbsp;&nbsp;
      <a href="#" id="foot">개인정보 처리방침</a> </br></br>
      사업자등록번호 : 000-00-00000 ㅣ 통신 판매업 신고번호 : 경기성남 제 2018-000호 ㅣ 대표이사 : 양화목 </br>
      주소 : 경기도 성남시 분당구 정자동</br>
      yhm123@naver.com ㅣ 대표전화:1588-0000 ㅣ FAX : 031-700-0000</br></br>
      Copyright ⓒ Daiter Corp. All rights reserved.
     </div>
    </div>
  </body>
  <?
	}
	mysql_close($connect);
  ?>
</html>