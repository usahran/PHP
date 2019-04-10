<?@session_start();?> <!-- inin.php와 링크가 다름 -->
<html>
<style>
	main{top:230px;}
	#classification{width:110%;}
	#menu > ul > li > ul {
		padding-top:16;
	}
</style>
<script>
	function show_form(){
		var grayback = document.getElementById("grayback");
		var loginform = document.getElementById("loginform");
		grayback.style.display="block";
		loginform.style.display="block";
	}
	function hide_form(){
		var grayback = document.getElementById("grayback");
		var loginform = document.getElementById("loginform");
		grayback.style.display="none";
		loginform.style.display="none";
	}
	function search_cl(){
		var subm=document.getElementById("search");
		var pww=document.getElementById("search_text").value;
		if(pww==null || pww=="검색"){
			alert('검색어를 입력해주세요.');
		}
		else if(pww.length < 2){
			alert('두글자 이상 입력해주세요.');
		}
		else{
			subm.submit();
		}
	}
	$(function(){
		var userid="<?=$_SESSION[userid]?>";
		if(userid=="Master"){
			$('#menubox > a > b').eq(0).text(userid + "님 환영합니다.");
			$('#menubox > a').eq(0).attr({'onclick':'','href':'../master/master_info.php'});
			$('#menubox > a > b').eq(1).text('로그아웃');
			$('#menubox > a').eq(1).attr({'href':'join/logout.php'});
		}else{
			var tmp = $('#menubox > a').eq(1).attr('href');
			console.log(tmp);
			if(userid!=""){
				$('#menubox > a > b').eq(0).text(userid + "님 환영합니다.");
				$('#menubox > a').eq(0).attr({'onclick':'','href':'../user/user_info.php'});
				$('#menubox > a > b').eq(1).text('로그아웃');
				$('#menubox > a').eq(1).attr({'href':'../join/logout.php'});
			}else{
				$('#menubox > a > b').eq(0).text('로그인');
				$('#menubox > a').eq(0).attr({'onclick':'show_form()','href':'#'});
				$('#menubox > a > b').eq(1).text('회원가입');
				$('#menubox > a').eq(1).attr({'href':tmp});
			}
		}
		var id=$('#login > input').eq(0);
		var pw=$('#login > input').eq(1);
		var search=$('#search > input');
		var defaultID=id.val();
		var defaultPW=pw.val();
		var defaultSC=search.val();
		id.focus(function(){
			if(id.val()==defaultID)
				id.val('');
		});
		id.blur(function(){
			if(id.val()==''){
				id.val(defaultID);
			}
		});
		pw.attr('type','text');
		pw.focus(function(){
			if(pw.val()==defaultPW){
				pw.attr('type','password');
				pw.val('');
			}
		});
		pw.blur(function(){
			if(pw.val()==''){
				pw.attr('type','text');
				pw.val(defaultPW);
			}
		});
		search.focus(function(){
			if(search.val()==defaultSC){
				search.css('color','#000');
				search.val('');
			}
		});
		search.blur(function(){
			if(search.val()==''){
				search.css('color','#aaa');
				search.val(defaultSC);
			}
		});
		$('#menu > ul > li').hover(function(){
			$(this).find('ul').stop().fadeIn(0);
		},function(){
			$(this).find('ul').stop().fadeOut(0);
		});
	});
</script>
<body>
	<div id="loginform">
		<div id="quit" onclick="hide_form();"><img src="../image/x.png"/></div>
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
	  <a href="#" onclick="show_form();"><b>로그인</b>&nbsp;&nbsp;</a>
      <a href="../join/join.php"><b>회원가입</b>&nbsp;&nbsp;</a>
      <a href="#"><b>서점소개</b>&nbsp;&nbsp;</a>
      <a href="#"><b>이용안내</b>&nbsp;&nbsp;</a>
      <a href="#"><b>오시는길</b></a>
    </div>
    
    <div id="figure">
      <img src="../image/subimg.jpg" height="200" width="100%">
		<form id="search"  action="../search.php" method="get">
		  <input type="text" name="search_text" id="search_text" value="검색어를 입력해주세요"/>
		  <div><img onclick="search_cl()"src="../image/search.png"/></div>
		</form>
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
      
      <li><a href="../nav2.php">신간도서</a>
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
</body>

</html>