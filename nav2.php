<?
  @session_start();
  include "db_connect.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title> 다있어 서점</title>
  </head>
   <link rel="stylesheet" type="text/css" href="css/css_base.css?ver=3">
   <style>
	#classification{width:110%;}
	main{top:350px;float:left;}
	#footer{position:relative; top:270px;}
   </style>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	<script type="text/javascript" src="js/base.php" ></script>
  <body>
	<?
		include "inin.php";
    ?>
	<main>
		<div id = "sub_list">
		    <?
			  // 신간도서 테이블에 관리자가 등록한 책 리스트 출력
			  // 페이지 나누기 php강의 13-자유게시판.pptx
			  // 출처: http://eclass.shingu.ac.kr/User/EClassRoom/Default.aspx?LecNo=32021
		      $page=$_GET[page];
		      
		      $num_records_per_page=12;
		      
		      $sql="select count(*) from new_book";
		      $result=mysql_query($sql,$connect);
		      $num_records=mysql_result($result, 0, 0);
		      
		      $num_pages = ceil($num_records / $num_records_per_page);
		      
		      $page=min(max(1, $page), $num_pages);
		      
		      $start=($page-1)*$num_records_per_page;
			  
			  $num = $start;
			  
		      $sql ="select * from new_book ";
			  $sql .="order by title desc ";
		      $sql .="limit $start, $num_records_per_page";
		      $result=mysql_query($sql,$connect);
		      // 게시글 리스트 출력
		      while($row = mysql_fetch_array($result))
		      {
				$num++;
		        echo"<div>
					  <div id='top_img' align=center><a href = 'order/b_detail.php?isbn=$row[isbn]'><img src='img/$row[bookImageURL]' /></a></div>
		              <div id='bot_img'><a style='color:black' href='board/view.php?num=$row[num]&page=$page'>$num. $row[title]</a></div>
		             </div>";
		      }
		      mysql_close($connect);
		    ?>
		    
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