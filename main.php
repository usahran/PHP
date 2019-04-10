<?@session_start();
  include "db_connect.php";
  $sql  = "select * from user ";
  $sql .= "where id='$_SESSION[userid]'";
  $result = mysql_query($sql, $connect);
  $row = mysql_fetch_array($result);
?>
<html>
  <head>
  <meta charset="utf-8">
    <title> 다있어 서점</title>
    <!--<link type="text/css" rel="stylesheet" href="css/common.css" />-->
  </head>



   <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script type="text/javascript" src="script/jquery.js"></script>-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	<script>
		var area = "<? echo $row[group_cd]?>";
		var c_name = ["bbest","bnew","brecom"];
	</script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/base.php"></script>
	<link rel="stylesheet" type="text/css" href="css/css_base.css?ver=5">
	<style type="text/css">
		#classification{height:410px;}
	</style>
  <body>
	<div id="loginform">
		<div id="quit" onclick="hide_form();"><img src="image/x.png"/></div>
		<div id="lb"><img src="image/logo.jpg"  height="120" width="200"></div>
		<form action="join/login.php" method="post" id="login">
			<input type="text" name="id" value="아이디"><br>
			<input type="password" name="pw" value="비밀번호"><br>
			<input type="submit" value="로그인">
		</form>
	</div>
	<div id="grayback"></div>
    <div id="logo"><a href="#"><img src="image/logo.jpg"  height="120" width="200"></a></div>
    <div id="menubox">
      <a href="#" onclick="show_form();"><b>로그인</b>&nbsp;&nbsp;</a>
      <a href="join.php"><b>회원가입</b>&nbsp;&nbsp;</a>
      <a href="#"><b>서점소개</b>&nbsp;&nbsp;</a>
      <a href="#"><b>이용안내</b>&nbsp;&nbsp;</a>
      <a href="#"><b>오시는길</b></a>
    </div>
    <div id="figure">
      <img src="image/library.png" height="520" width="100%">
	 <form id="search"  action="search.php" method="post">
		<input type="text" name="search_text" id="search_text" value="검색"/>
		<div><img src="image/search.png"/></div>
	  </form>
      <nav id="menu">
     <ul>
      <li><a href="nav1.php">베스트셀러</a>
        <ul>
          <li id="left" class="left">
            <span id="left_1">Magazine</span><br/>
            <span id="left_2">for hot trend<span>
          </li>
          <li id="right" class="right">
            <span id="right_1">새로운 정보와 트렌드를 읽을 수 있는 국내외 잡지 250여 종</span>
            <span id="right_2">각 분야의 실용적이고 영향력 있는 최신 정보를 얻을 수 있는 잡지들로 구성되어 있습니다.
            거리에서 쇼핑하듯 마음에 드는 잡지를 고르는 즐거움을 경험해보세요.</span>
            <span id="right_3">매거진 도서 보기></span>
          </li>
        </ul>
      </li>

      <li><a href="#">신간도서</a>
        <ul>
          <li id="left2" class="left">
            <span id="left_1">Magazine</span><br/>
            <span id="left_2">for hot trend<span>
          </li>
          <li id="right2" class="right">
            <span id="right_1">새로운 정보와 트렌드를 읽을 수 있는 국내외 잡지 250여 종</span>
            <span id="right_2">각 분야의 실용적이고 영향력 있는 최신 정보를 얻을 수 있는 잡지들로 구성되어 있습니다.
            거리에서 쇼핑하듯 마음에 드는 잡지를 고르는 즐거움을 경험해보세요.</span>
            <span id="right_3">매거진 도서 보기></span>
          </li>
        </ul>
      </li>

      <li><a href="#">추천도서</a>
        <ul>
          <li id="left3" class="left">
            <span id="left_1">Magazine</span><br/>
            <span id="left_2">for hot trend<span>
          </li>
          <li id="right3" class="right">
            <span id="right_1">새로운 정보와 트렌드를 읽을 수 있는 국내외 잡지 250여 종</span>
            <span id="right_2">각 분야의 실용적이고 영향력 있는 최신 정보를 얻을 수 있는 잡지들로 구성되어 있습니다.
            거리에서 쇼핑하듯 마음에 드는 잡지를 고르는 즐거움을 경험해보세요.</span>
            <span id="right_3">매거진 도서 보기></span>
          </li>
        </ul>
      </li>

      <li><a href="nav4.php">입고 희망 게시판</a>
        <ul>
          <li id="left4" class="left">
            <span id="left_1">Magazine</span><br/>
            <span id="left_2">for hot trend<span>
          </li>
          <li id="right4" class="right">
            <span id="right_1">새로운 정보와 트렌드를 읽을 수 있는 국내외 잡지 250여 종</span>
            <span id="right_2">각 분야의 실용적이고 영향력 있는 최신 정보를 얻을 수 있는 잡지들로 구성되어 있습니다.
            거리에서 쇼핑하듯 마음에 드는 잡지를 고르는 즐거움을 경험해보세요.</span>
            <span id="right_3">매거진 도서 보기></span>
          </li>
        </ul>
      </li>
     </ul>
    </nav>
    </div>

    <!--
    <div id="container">
      <div id="left">
        <span id="left_1"></span>
        <span id="left_2"></span>
      </div>
      <div id="right">
        <span id="right_1"></span>
        <span id="right_2"></span>
        <span id="right_3"></span>
      </div>
    </div>
     -->
	<main>
		<div id="classification">
			<div id="tit"> 베스트셀러</div>
			<div id="btns" class="btn1">
				<button type="button" name="prev"><</button>
				<button type="button" name="next">></button>
			</div>
			<div id="imgs" class="bbest">

			</div>
		</div>
		<div id="classification">
			<div id="tit"> 신작도서</div>
			<div id="btns" class="btn2">
				<button type="button" name="prev"><</button>
				<button type="button" name="next">></button>
			</div>
			<div id="imgs" class="bnew">

			</div>
		</div>
		<div id="classification">
			<div id="tit"> <?echo $_SESSION[userid];?>님의 추천도서</div>
			<div id="btns" class="btn3">
				<button type="button" name="prev"><</button>
				<button type="button" name="next">></button>
			</div>
			<div id="imgs" class="brecom">

			</div>
		</div>
	</main>
    <div id="footer">
     <hr>
     <div id="flogo"><a href="#"><img src="image/logo.jpg"  height="120" width="200"></a></div>

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
