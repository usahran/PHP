<?
        include "../db_connect.php";  
    
        // GET/POST�� ���޵� �� ȹ��
        $name = $_POST[name];
        $passwd = $_POST[passwd];
        $title = $_POST[title];
        $content = $_POST[content];
		
       if ($name && $passwd && $title && $content)
       {
		   
           // �ۼ���, �ۼ��� IP ���
           $day = date("Y-m-d");  
           $user_ip = $_SERVER[REMOTE_ADDR]; 
      
           // ���� ����
           $sql  = "insert into board";
           $sql .= " (name, passwd, title, content, day, hits, user_ip)";
           $sql .= " values('$name', '$passwd', '$title', '$content',";
           $sql .= " '$day', 0, '$user_ip')";      
           $result = mysql_query($sql, $connect);
           mysql_close();
      
          // ���� �������� ���ư�
        echo "<script>location.href='../nav4.php';</script>";
       }
       else
           echo "<script> 
                     alert('�̸�, ��й�ȣ, ����, ������ ��� �ԷµǾ�� �մϴ�.'); 
                     history.back(); 
                 </script>";
      
   ?>
