<?@session_start();
  include "db_connect.php"; // db접속 php 포함
  $sql  = "select * from user "; // user 테이블 중에
  $sql .= "where id='$_SESSION[userid]'"; // 세션 변수에 담긴 userid를 데이터를
  $result = mysql_query($sql, $connect); // query로 result에 넣어주고
  $row = mysql_fetch_array($result); // 연관 배열식으로 받아오는 코드
  $page = $_GET[page];
  if(!$page)
    $page = 1;
?>
<html>
  <head>
	<meta charset="utf-8">
    <title> 다있어 서점</title>
  </head>
   <link rel="stylesheet" type="text/css" href="css/css_base.css">
   <style>
	#classification{width:110%;}
	main{top:150px;float:left;}
  #sub_list > * {float:left; width:210px;}
  #num_group{float:left;}
	#footer{position:relative; top:270px;}
   </style>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	 <script type="text/javascript" src="js/base.php" ></script>
	 <script>
		var area = "<?=$row[group_cd]?>";

		var c_name = ["bbest","bnew","brecom"];
		var btns = ["btn1","btn2","btn3"];
		var pageNo = parseInt("<?=$page?>");
		//console.log(pageNo);

		var book = "authKey=c28718fb49e39734141633a23324243341e8627d3334a8b032c9d4bf783bf65b&kdc=";
		book += " " + area + "&pageNo=" + pageNo + "&pageSize=50";
		var test = " " + area + "&pageNo=" + pageNo + "&pageSize=" + (51 - pageNo);
		//console.log(test);
		//console.log(book);
		$.ajax({
		  type     : "post",
		  url      : "order/loanItemSrch.php?" + book,
		  dataType : "xml",
		  success  : function(xmlData){
			var list = $(xmlData).find("doc").each(function(index){
				var count = 48;
				console.log(index);
				if(index<count){
					var show = "<div><div id='top_img' align=center><a href='order/b_detail.php?isbn=" +parseInt($(this).find("isbn13").text())+ "'><img style='width:200px;height:300px;'src='" + $(this).find("bookImageURL").text() + "'/>"; // 하나의 틀에 링크와 이미지를 넣음
					show +="<div style='color:black'>" + $(this).find("bookname").text() + "</div>"
					show += "</a></div></div>";
					$(".subList").append(show); // 해당 태그 뒤에 추가
				}
			});
		  }
		});

	 </script>
  <body>
    <?
		include "inin.php"; // 서브 php 포함
    ?>
	<main>
		<div class = "subList" id = "sub_list">
		    <?
		      include "db_connect.php";
			  // 검색 테이블에 사용한 베스트셀러 1000권 책 출력
			  // 페이지 나누기 php강의 13-자유게시판.pptx
			  // 출처: http://eclass.shingu.ac.kr/User/EClassRoom/Default.aspx?LecNo=32021

		      $num_records_per_page=48;


		      $num_records=2500;

		      $num_pages = ceil($num_records / $num_records_per_page);

		      $page=min(max(1, $page), $num_pages);

		      $start=($page-1)*$num_records_per_page;

			  $num = $start;
		      mysql_close($connect);
		    ?>
	  </div>
	  <center id="num_group">
	  <div id="select_num">
			<?
		      // 한 화면에 표시할 페이지 번호 링크의 시작과 끝 번호를 계산
		      $num_links_per_view=8;

		      $block=ceil($page / $num_links_per_view);
		      $first_link=($block-1)*$num_links_per_view +1; //첫번째 링크번호

		      $last_link=min($first_link + $num_links_per_view -1, $num_pages);

		      // 이전 링크 출력
		      if($first_link != 1)
		        echo "<a style='color:black; 'href='nav3.php?page=" . ($page - $num_links_per_view) . "'>[< 이전]</a> &nbsp";

    		        // 페이지 번호들 출력
           for ($i = $first_link; $i <= $last_link; $i++)
           {
               if ($page == $i)
                   echo "<b>[$i]</b> &nbsp";
               else
                   echo "<a style='color:black;' href='nav3.php?page=$i'>[$i]</a> &nbsp";
           }

           // [다음] 링크 출력
           if ($last_link != $num_pages)
               echo "<a style='color:black;' href='nav3.php?page=" . ($page + $num_links_per_view) .
                    "'>[다음 >]</a> &nbsp";
			?>
	  </div>
	  </center>
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
