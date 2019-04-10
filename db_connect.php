<?
  $connect = mysql_connect("localhost","admin","1234");
  if(!$connect)
    die("DB 접속 실패 : " . mysql_error());
    
  mysql_select_db("members", $connect);
?>