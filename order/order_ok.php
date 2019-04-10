<?
	@session_start();
	$uid = $_SESSION[userid];
	$b_type = $_GET[b_type];
	$isbn = $_GET[b_num];
	$b_date = $_GET[b_date];
	$b_cnt = $_GET[b_cnt];
	$b_name = $_GET[b_name];
	if($uid!=""){
		$connect = mysql_connect("localhost", "admin", "1234");
		if (!$connect)
			die("DB b? ?? : " . mysql_error());
		mysql_select_db("members", $connect);
		
		$sql  = "select * from orderlist ";
		$sql .= "where user_id='$uid'";
		$sql .= "and isbn='$isbn'";
		$sub = substr($b_type,0,1);
		if($sub=="W"){
			$sql .= "and o_type like 'W%'";
			$result = mysql_query($sql, $connect);
			$row = mysql_fetch_array($result, $connect);
			//echo "$sub $sql";
		}else if($sub=="B"){
			$sql  = "delete from orderlist ";
			$sql .= "where user_id='$uid'";
			$sql .= "and isbn='$isbn'";
			$sql .= "and o_type like 'W%'";
			$result = mysql_query($sql, $connect);
			//echo "$sub $sql";
		}
		if(!$row){
			$sql  = "insert into orderlist values ('$b_type','$isbn','$b_name','$b_date','$b_cnt','$uid')";
			$result = mysql_query($sql, $connect);
			//echo "!!!$sql";
		}else{
			echo "<script>alert('이미 장바구니에 존재 합니다.');history.go(-1);</script>";
		}
		mysql_close($connect);
		echo "<script>location.href='../user/user_info.php'</script>";
	}else{
		echo "<script>alert('로그인 후 이용가능 합니다.');history.go(-1);</script>";
	}
?>
