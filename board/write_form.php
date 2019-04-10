<?@session_start();?>
<html>
  <meta charset="utf-8">
  <head>
    <title> 다있어 서점</title>
    <!--<link type="text/css" rel="stylesheet" href="css/common.css" />-->
  </head>
   <link rel="stylesheet" type="text/css" href="../css/css_base.css?ver=1">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/bootstrap.css" rel="stylesheet">
   <style>
   body{margin:0 auto;}
	main{top:300px;}
	#classification{width:110%;}
   </style>
   
   <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script type="text/javascript" src="script/jquery.js"></script>-->
	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	 <script type="text/javascript" src="../js/base.php" ></script>
	 <script>
	$(function(){
	    $('#menu > ul > li').hover(function(){
    		$(this).find('ul').stop().fadeIn(0);
    	},function(){
    		$(this).find('ul').stop().fadeOut(0);
    	});
		
	});
	 </script>
	
  <body>
    <?
    ?>
    <div id="loginform">
		<div id="quit" onclick="hide_login();"><img src="../image/x.png"/></div>
		<div id="lb"><img src="../image/logo.jpg"  height="120" width="200"></div>
		<form action="../join/login.php" method="post" id="login">
			<input type="text" name="id" value="아이디"><br>
			<input type="password" name="pw" value="비밀번호"><br>
			<input type="submit" value="로그인">
		</form>
	</div>
	<div id="grayback"></div>
    <div id="logo"><a href="../main.php"><img src="../image/logo.jpg"  height="120" width="200"></a></div>
    <div id="menubox">
	  <a href="#" onclick="show_login();"><b>로그인</b>&nbsp;&nbsp;</a>
      <a href="#"><b>회원가입</b>&nbsp;&nbsp;</a>
      <a href="#"><b>서점소개</b>&nbsp;&nbsp;</a>
      <a href="#"><b>이용안내</b>&nbsp;&nbsp;</a>
      <a href="#"><b>오시는길</b></a>
    </div>
    
    <div id="figure">
      <img src="../image/subimg.jpg" height="200" width="100%">
      <nav id="menu">
     <ul>
      <li><a href="../nav1.php">베스트셀러</a>
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
      
      <li><a href="../nav4.php">입고 희망 게시판</a>
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
	<main>
		
		<h3><p align=center>입고 희망 도서</p></h3>
    
    <form method=post action=write.php name=writefrm id=writefrm>
       <table class="table table-hover">
          <tr >
               <td>아이디</td>
               <td align=left><input type=text name=name size=25
                                     maxlength=16 value='<?echo $_SESSION[userid];?>' readonly></td>
           </tr>
           
           <tr >
               <td>이름</td>
               <td align=left><input type=text name=name size=25
                                     maxlength=16 value='<?echo $_SESSION[usernm];?>' readonly></td>
           </tr>
   
           <tr>
               <td>비밀번호</td>
               <td align=left><input type=password id=passwd name=passwd size=25 
                                     maxlength=16></td>
           </tr>
          <tr>
               <td>제목</td>
               <td align=left><input type=text name=title size=50
                                     maxlength=100 value=''></td>
           </tr>
   
           <tr>
               <td>내용</td>
               <td align=left><textarea name=content cols=74 rows=14 
                                        wrap=virtual></textarea>
               </td>
           </tr>
   
           <tr>
                <td></td>
               <td><input type=button onclick="ckk2()" value=글등록 class="btn btn-primary">&nbsp;
               <input class="btn btn-danger" type=button value=목록보기 
                          onclick="location.href='../nav4.php?page=<?=$page?>'"></td>
               
           </tr>
       </table>
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
      사업자등록번호 : 000-00-00000 ㅣ 통신 판매업 신고번호 : 경기성남 제 2018-000호 ㅣ 대표이사 : 양화목, 박정훈 </br>
      주소 : 경기도 성남시 분당구 정자동</br>
      yhm123@naver.com ㅣ 대표전화:1588-0000 ㅣ FAX : 031-700-0000</br></br>
      Copyright ⓒ Daiter Corp. All rights reserved.
     </div>
    </div>
  </body>
  
    <script>
    function ckk2()
      {
      var aaa ="<?echo $_SESSION[userpw]?>";
      var subm=document.getElementById("writefrm");
      var pww=document.getElementById("passwd");
       if(aaa==pww.value)
        subm.submit();
       else if(pww.value==""){
         alert('비밀번호를 입력해주세요.');
        }
       else{
        alert('비밀번호가 틀립니다.');
        }
      }
  </script>
</html>