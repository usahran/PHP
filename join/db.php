<html>
  <head>
  <meta charset="utf-8">
  </head>
  
  <body>
    <?
     $uid = $_POST[uid];
     $pw = $_POST[pw];
     $uname = $_POST[uname];
     $ph = $_POST[ph];
     $addr = $_POST[add];
     $email = $_POST[email];
	 $sel1 = $_POST[sel1];
	if($uid != ""){
		$connect = mysql_connect("localhost", "admin", "1234");
        if (!$connect)
            die("DB 접속 실패 : " . mysql_error());
        mysql_select_db("members", $connect);
		echo $num_rows;
		$sql =  "insert into user values ('$uid','$pw','$uname','$addr','$email','$ph',$sel1)";
		$result = mysql_query($sql, $connect); 
		if (!$result) 
			echo "<script>alert('회원가입 실패');history.go(-1);</script>";
		

        echo "<script>alert('회원가입 성공');location.href='../main.php';</script>";
        mysql_close($connect);
	}
    ?>
  </body>
</html>

