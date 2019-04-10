<?
	include "../db_connect.php"; // db접속 php 포함
	$data = $_POST[b_del];
	$sql = "delete from new_book where bookImageURL = '$data'"; // 중복 검사
	$result = mysql_query($sql);
	echo"<script>alert('삭제되었습니다.');location.href='master_info.php';</script>";
	mysql_close($connect);
?>