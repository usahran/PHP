     <?
        include "../db_connect.php";  
    
        // GET/POST로 전달된 값 획득
        $num = $_GET[num];
        $page = $_GET[page];
    
        $name = $_POST[name];
        $passwd = $_POST[passwd];
       $title = $_POST[title];
       $content = $_POST[content];
   
       // 지정된 번호와 비밀번호를 가진 레코드를 읽어 옴(비밀번호 확인 목적)
       $sql = "select * from board where num=$num and passwd='$passwd'";
       $result = mysql_query($sql, $connect);
   
       if (mysql_num_rows($result))   // 번호, 비밀번호가 맞는 레코드가 있으면
       {
           // 작성일, 작성자 IP 다시 얻어 옴
           $day = date("Y-m-d");  
           $user_ip = $_SERVER[REMOTE_ADDR]; 
           
           // 글 내용 업데이트
           $sql  = "update board set name='$name', title='$title',";
           $sql .= " content='$content', day='$day',";
           $sql .= " user_ip='$user_ip' where num=$num";    
           mysql_query($sql, $connect);
       }
       else
           echo "<script> 
                     alert('비밀번호가 틀렸습니다.'); 
                     history.back(); 
                 </script>";
           
       mysql_close();          
       
       // 메인 페이지로 돌아감
       echo "<script>alert('수정완료');location.href='../nav4.php';</script>";
   ?>
