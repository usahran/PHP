<html>
  <head>
  <meta charset="utf-8">
  </head>
  
  <body>
    <?
	include "../db_connect.php";
	@session_start();
	$uid = $_POST[uid];
	$uname = $_POST[uname];
	$ph = $_POST[ph];
	$addr = $_POST[addr];
	$email = $_POST[email];
	if($uid != ""){
        $sql  = "update master_account set ";
		$sql .= "id = '$uid',";
		$sql .= "name = '$uname',";
		$sql .= "phone = '$ph',";
		$sql .= "addr = '$addr',";
		$sql .= "mail = '$email'";
		$sql .= "where code = '$_SESSION[code]'";
           
        $result = mysql_query($sql, $connect); 
		if (!$result) 
			echo"<script>alert('Already in use ID');history.go(-1);</script>";
		else{
			echo"<script>location.href='../main.php';</script>";
		}
        
	}
	mysql_close($connect);
    ?>
  </body>
</html>

