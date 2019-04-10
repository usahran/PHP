<?$bname=$_GET[isbn];?>
<!DOCTYPE HTML>
<html>
  <meta charset="utf-8">
	<head></head>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	<script type="text/javascript" src="../js/base.php"></script>
	<script type="text/javascript" src="../js/details.js?ver=4"></script>
	<script>var bname="<?echo"$bname";?>";var area="";</script>
	
	<link rel="stylesheet" type="text/css" href="../css/css_base.css?ver=2">
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
		<div id="detail_book">
			<div id="detail_b">
				<div id="data_img">
				
				</div>
			</div>
			<div id="b_content">
				<div class="b_left" id="titles"><b>서 명: </b></div>
				<div class='b_right'><a href="#"></a></div><br/>
				<div class="b_left" id="authors"><b>지은이: </b></div>
				<div class='b_right'><a href="#"></a></div><br/>
				<div class="b_left" id="publisher"><b>출판사: </b></div>
				<div class='b_right'><a href="#"></a></div><br/>
				<div class="b_left" id="publication_year"><b>발행년도: </b></div>
				<div class='b_right'><a href="#"></a></div><br/>
				<div id="description"> <h3>설띵</h3><p></p></div>
			</div>
			<div id="b_select">
				<form id="b_order" action="order_ok.php" method="get">
					<input type="hidden" id="b_type" name="b_type"/>
					<input type="hidden" id="book_num" name="b_num"/>
					<input type="hidden" id="b_date" name="b_date"/>
					<input type="hidden" id="b_name" name="b_name"/>
					<button type="button" id="b_buy"> 구매하기 </button>
					<button type="button" id="b_wishlist"> 장바구니 </button>
					<input type="number" class="b_cnt" value="1" min="1" max="999" name="b_cnt"/>수량
				</form>
			</div>
		</div>
		<div id="classification">
			<div id="b_tit">이 책의 추천 도서 목록 </div>
			<div id="btns" class="btn4">
				<button type="button" name="prev"><</button>
				<button type="button" name="next">></button>
			</div>
			<div id="b_other">
			</div>
		</div>
	</body>
</html>
