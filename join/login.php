<?
@session_start();
 $uid = $_POST[id];
 $pw = $_POST[pw];

	$connect = mysql_connect("localhost", "admin", "1234");
	if (!$connect)
		die("DB b? ?? : " . mysql_error());
	mysql_select_db("members", $connect);
  
	$sql =  "select * from user ";
	$sql .= "where id='$uid'";
	$sql .= "and pw='$pw'";
	$result = mysql_query($sql, $connect);
	$row = mysql_fetch_array($result);
	if($row){
		$_SESSION[userid] = "$uid";
		$_SESSION[userpw] = "$pw";
		$_SESSION[usernm] = "$row[name]";
		header("Location:../main.php");
	}else{
		echo "<script>window.alert('UserID and password do not match.');history.go(-1);</script>";
	}
	mysql_close($connect);
?>