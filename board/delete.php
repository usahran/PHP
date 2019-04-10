    <?
        include "../db_connect.php";  
        
        // GET/POST로 전달된 값 획득
        $num = $_GET[num];
        $page = $_GET[page];
    
        $passwd = $_POST[passwd];
    
       // 지정된 번호와 비밀번호를 가진 레코드를 읽어 옴(비밀번호 확인 목적)
       $sql = "select * from board where num=$num and passwd='$passwd'";
       $result = mysql_query($sql, $connect);
  
       // 번호, 비밀번호가 맞는 레코드가 있으면 삭제
       if (mysql_num_rows($result)) 
           mysql_query("delete from board where num=$num", $connect);
       else
           echo "<script> 
                     alert('비밀번호가 틀렸습니다.'); 
                     history.back(); 
                 </script>";
           
       mysql_close();          
       
       // 메인 페이지로 돌아감
       echo "<script>alert('삭제완료');location.href='../nav4.php';</script>";
   ?>
