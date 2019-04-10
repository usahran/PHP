<?
     $uid = $_POST[uid];
     $pw = $_POST[pw];
     $uname = $_POST[uname];
     $ph = $_POST[ph];
     $add = $_POST[add];
     $email = $_POST[email];
     echo"$uid";

  	if($uid != ""){
       $connect = mysql_connect("localhost", "admin", "1234");
          if (!$connect)
              die("DB 접속 실패 : " . mysql_error());
          mysql_select_db("members", $connect);
        
          $sql =  "select * from user ";
  	      $sql .= "where id='$uid'";
          $result = mysql_query($sql, $connect); 
          $row = mysql_fetch_array($result);
             if (!$row) 
                echo"<script>window.alert('사용 가능한 아이디입니다!<br>')</script>";
            else
                echo"<script>window.alert('이미 등록된 아이디입니다!<br>')</script>";
          mysql_close($connect);
          echo "<form name='back' action='join.php' method='post'>";
          echo "<input type='hidden' name='uid' value='$uid'>";
          echo "<input type='hidden' name='pw' value='$pw'>";
          echo "<input type='hidden' name='uname' value='$uname'>";
          echo "<input type='hidden' name='ph' value='$ph'>";
          echo "<input type='hidden' name='add' value='$add'>";
          echo "<input type='hidden' name='email' value='$email'>";
          echo "</form>";
                
          echo "<script>
              back.submit();
              </script>";
  	}
    ?>
