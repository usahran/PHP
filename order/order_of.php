<?
	@session_start();
	$uid = $_SESSION[userid];
	$b_type = $_POST[b_type];
	$isbn = $_POST[b_num];
	$b_date = $_POST[b_date];
	$b_cnt = $_POST[b_cnt];
	$b_ch = $_POST[b_ch];
	$connect = mysql_connect("localhost", "admin", "1234");
	if (!$connect)
		die("DB b? ?? : " . mysql_error());
	mysql_select_db("members", $connect);
	for($i=0;$b_type[$i];$i++){
		$o_type = str_replace("W","B",$b_type[$i]);
		$sql  = "update orderlist set ";
		$sql .= "o_type = '$o_type',";
		$sql .= "date = '$b_date[$i]',";
		$sql .= "count = '$b_cnt[$i]'";
		$sql .= "where o_type = '$b_type[$i]'";
		$result = mysql_query($sql, $connect);
	}
	if (!$result) 
		echo"<script>alert('구매 항목을 선택해주세요.');history.go(-1);</script>";
	else{
		echo"<script>location.href='../user/user_info.php';</script>";
	}
	mysql_close($connect);
?>