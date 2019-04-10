<?@session_start();?>
<html>
  <head>
    <meta charset="utf-8">
    <title> 다있어 서점</title>
    <!--<link type="text/css" rel="stylesheet" href="css/common.css" />-->
  </head>  
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap.css" rel="stylesheet">   
   <link rel="stylesheet" type="text/css" href="css/css_base.css?ver=6">
   
   
   <style>
	main{top:230px;}
	#classification{width:110%;}
	#menu > ul > li > ul {
		padding-top:16;
	}
   </style>
   
   
   <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script type="text/javascript" src="script/jquery.js"></script>-->
	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	 <script type="text/javascript" src="js/base.php" ></script>
	 <script>
	$(function(){
	    $('#menu > ul > li').hover(function(){
    		$(this).find('ul').stop().fadeIn(0);
    	},function(){
    		$(this).find('ul').stop().fadeOut(0);
    	});
		$.ajax({
			type     : "post",
			url      : "xml_Test/All_loanItemSrch.xml",
			dataType : "xml",
			success  : function(xmlData){
				var list = $(xmlData).find("doc").each(function(index){
					var count = 50;
					if(index<count){
						var show = "<div><a href='b_detail.php?isbn=" +$(this).find("isbn13").text()+ "'><img src=" + $(this).find("bookImageURL").text();
						if($(this).find("isbn13").text())
							show+= " alt=" + $(this).find("isbn13").text();
						show+=" /></a>";
						show+= "<div id='tit'>" + $(this).find("no").text()+". "; 
						show+= $(this).find("bookname").text() + "</div></div>";
						$(".b_best").append(show);
					}
				});
			}
		});
	});
	 </script>
  <body bgcolor="#dddddd">
    
      
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
    <div id="logo"><a href="main.php"><img src="image/logo.jpg"  height="120" width="200"></a></div>
    <div id="menubox">
	  <a href="#" onclick="show_form();"><b>로그인</b>&nbsp;&nbsp;</a>
      <a href="#"><b>회원가입</b>&nbsp;&nbsp;</a>
      <a href="#"><b>서점소개</b>&nbsp;&nbsp;</a>
      <a href="#"><b>이용안내</b>&nbsp;&nbsp;</a>
      <a href="#"><b>오시는길</b></a>
    </div>
    
    <div id="figure">
      <img src="image/subimg.jpg" height="200" width="100%">
		<form id="search"  action="search.php" method="post">
		  <input type="text" name="search_text" id="search_text" value="검색"/>
		  <div><img onclick="search_cl()"src="image/search.png"/></div>
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
	<main>

		<h3><p align=center>입고 희망 게시판</p></h3>
	    <table width=800 align=center class="table table-striped table-hover">
		    <tr bgcolor="#eeeeee">
		      <td align=center width=80>번호</td>
		      <td align=center width=420>제목</td>
		      <td align=center width=100>작성자</td>
		      <td align=center width=130>작성일</td>
		      <td align=center width=70>조회수</td>
		    </tr>
		    
		    <?
		      include "db_connect.php";
		      
		      $page=$_GET[page];
		      
		      $num_records_per_page=5;
		      
		      $sql="select count(*) from board";
		      $result=mysql_query($sql,$connect);
		      $num_records=mysql_result($result, 0, 0);
		      
		      $num_pages = ceil($num_records / $num_records_per_page);
		      
		      $page=min(max(1, $page), $num_pages);
		      
		      $start=($page-1)*$num_records_per_page;
			  
			  
			  $sql  ="select * from master_account m, board b ";
			  $sql .="where m.name = b.name ";
			  $sql .="order by b.num desc";
			  $result=mysql_query($sql,$connect);
			  while($row = mysql_fetch_array($result))
		      {
		        echo"<tr>
		              <td align=center>$row[num]</td>
		              <td><a href='board/view.php?num=$row[num]&page=$page'>$row[title]</a></td>
					  <td align=center><b><img src='image/M.jpg' width='15px' height='15px'>$row[name]</b></td>
					  <td align=center>$row[day]</td>
		              <td align=center>$row[hits]</td>
		             </tr>";
		      }
		      $sql ="select * from board o,user u where o.name=u.name ";
			  $sql .="order by num desc ";
		      $sql .="limit $start, $num_records_per_page";
		      $result=mysql_query($sql,$connect);
		      // 게시글 리스트 출력
		      while($row = mysql_fetch_array($result))
		      {
		        echo"<tr>
		              <td align=center>$row[num]</td>
		              <td><a href='board/view.php?num=$row[num]&page=$page'>$row[title]</a></td>
					  <td align=center>$row[name]</td>
					  <td align=center>$row[day]</td>
		              <td align=center>$row[hits]</td>
		             </tr>";
		      }
		      
		      mysql_close($connect);
		    ?>
		    <tr>
		      <td colspan=5 align=center bgcolor="#ffffff">
		    <?
		      // 한 화면에 표시할 페이지 번호 링크의 시작과 끝 번호를 계산
		      $num_links_per_view=3;
		      
		      $block=ceil($page / $num_links_per_view);
		      $first_link=($block-1)*$num_links_per_view +1; //첫번째 링크번호
		      
		      $last_link=min($first_link + $num_links_per_view -1, $num_pages);
		      
		      // 이전 링크 출력
		      if($first_link != 1)	        
		        echo "<a href='nav4.php?page=" . ($page - $num_links_per_view) . "'>[< 이전]</a> &nbsp";

    		        // 페이지 번호들 출력
           for ($i = $first_link; $i <= $last_link; $i++)
           {
               if ($page == $i)     
                   echo "<b>[$i]</b> &nbsp";
               else
                   echo "<a href='nav4.php?page=$i'>[$i]</a> &nbsp";
           }
           
           // [다음] 링크 출력
           if ($last_link != $num_pages)
               echo "<a href='nav4.php?page=" . ($page + $num_links_per_view) . 
                    "'>[다음 >]</a> &nbsp";
   ?>
           </td>
       </tr>
		    
		    </table>
		    
		    <table id="writebtn">
		    
		    <tr> 
             <td align=right><input type=button class="btn btn-success" value=글쓰기 onclick="ckk()"></td>
         </tr>

		    
		  </table>
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
  <script>
    function ckk()
      {
      var aaa ="<?echo $_SESSION[userid]?>";
       if(aaa!="")
        location.href='board/write_form.php?page=<?echo $page;?>';
       else{
        alert('로그인을 하셔야 이용가능합니다.');
        }
      }
  </script>
</html>