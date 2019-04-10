<?
	include "../db_connect.php";
	@session_start();
	$id = $_POST[id];
	$pw = $_POST[pw];
	echo "$id, $pw";
	if($id != ""){
		$sql  = "select * from user ";
		$sql .= "where id = '$id'";
		$sql .= "and pw = '$pw'";
		$result = mysql_query($sql, $connect);
		$row = mysql_fetch_array($result);
		$uid = $row[id];
		if($uid!=""){
			$sql  = "delete from user ";
			$sql .= "where id = '$uid'";
			$result = mysql_query($sql, $connect);
			$sql  = "delete from orderlist ";
			$sql .= "where user_id = '$uid'";
			$result = mysql_query($sql, $connect);
			unset($_SESSION[userid]);
			echo"<script>alert('success');location.href='../main.php';</script>";
		}else{
			echo"<script>alert('fail');history.go(-1);</script>";
		}
	}
	mysql_close($connect);
?>
