<?@session_start(); // 신규 도서 등록 폼 페이지
?>
<html>
  <head>
  <meta charset="utf-8">
    <title> 다있어 서점</title>
  </head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	<script>
		var area = "<?=$row[area]?>"; // user의 관심분야에 맞는 추천도서를 받아오는 작업
		var c_name = ["bbest","bnew","brecom"]; // class_name의 줄임 3개의 class에 각각 api작업을 넣어주기 위한 배열
	</script>
	<script type="text/javascript" src="../js/base.php"></script>
	<link rel="stylesheet" type="text/css" href="../css/css_base.css">
	<style type="text/css">
		#classification{height:410px;}
		main{top:150px;}
		#footer{margin-top:200px;}
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
		<div id="hd"><h1>도서 등록</h1></div>
		<form enctype="multipart/form-data" action="enroll_ok.php" method="post">
			<!-- multipart/form-data: 이미지 파일 등록을 위한 enctype -->
			<div>책 제목</div>
			<input type="text" name="title" />
			<div>지은이</div>
			<input type="text" name="authors" />
			<div>출판사</div>
			<input type="text" name="publisher" />
			<div>책 표지</div>
			<input type="file" name="bookImageURL"/>
			<div>관심분야</div>
			<select id="sel1" name="sel1">
			  <option value="1">철학</option>
			  <option value="2">종교</option>
			  <option value="3">사회과학</option>
			  <option value="4">자연과학</option>
			  <option value="5">기술과학</option>
			  <option value="6">예술</option>
			  <option value="7">언어</option>
			  <option value="8">문학</option>
			  <option value="9">역사</option>
			</select>
			<button> 등록 </button>
		</form>
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
</html>