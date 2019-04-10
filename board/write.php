<?
        include "../db_connect.php";  
    
        // GET/POST로 전달된 값 획득
        $name = $_POST[name];
        $passwd = $_POST[passwd];
        $title = $_POST[title];
        $content = $_POST[content];
		
       if ($name && $passwd && $title && $content)
       {
		   
           // 작성일, 작성자 IP 얻기
           $day = date("Y-m-d");  
           $user_ip = $_SERVER[REMOTE_ADDR]; 
      
           // 쿼리 실행
           $sql  = "insert into board";
           $sql .= " (name, passwd, title, content, day, hits, user_ip)";
           $sql .= " values('$name', '$passwd', '$title', '$content',";
           $sql .= " '$day', 0, '$user_ip')";      
           $result = mysql_query($sql, $connect);
           mysql_close();
      
          // 메인 페이지로 돌아감
        echo "<script>location.href='../nav4.php';</script>";
       }
       else
           echo "<script> 
                     alert('이름, 비밀번호, 제목, 내용이 모두 입력되어야 합니다.'); 
                     history.back(); 
                 </script>";
      
   ?>
