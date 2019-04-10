<?
  include "../db_connect.php";
  $title = $_POST[title];
  $isbn = $_POST[isbn];
  $authors = $_POST[authors];
  $publisher = $_POST[publisher];
  for($i = 0; $i<1000;$i++){
    $sql  = "insert into search ";
    $sql .= "values('$title[$i]','$isbn[$i]','$authors[$i]','$publisher[$i]')";
    mysql_query($sql);
  }
?>