     <?
        include "../db_connect.php";  
    
        // GET/POST�� ���޵� �� ȹ��
        $num = $_GET[num];
        $page = $_GET[page];
    
        $name = $_POST[name];
        $passwd = $_POST[passwd];
       $title = $_POST[title];
       $content = $_POST[content];
   
       // ������ ��ȣ�� ��й�ȣ�� ���� ���ڵ带 �о� ��(��й�ȣ Ȯ�� ����)
       $sql = "select * from board where num=$num and passwd='$passwd'";
       $result = mysql_query($sql, $connect);
   
       if (mysql_num_rows($result))   // ��ȣ, ��й�ȣ�� �´� ���ڵ尡 ������
       {
           // �ۼ���, �ۼ��� IP �ٽ� ��� ��
           $day = date("Y-m-d");  
           $user_ip = $_SERVER[REMOTE_ADDR]; 
           
           // �� ���� ������Ʈ
           $sql  = "update board set name='$name', title='$title',";
           $sql .= " content='$content', day='$day',";
           $sql .= " user_ip='$user_ip' where num=$num";    
           mysql_query($sql, $connect);
       }
       else
           echo "<script> 
                     alert('��й�ȣ�� Ʋ�Ƚ��ϴ�.'); 
                     history.back(); 
                 </script>";
           
       mysql_close();          
       
       // ���� �������� ���ư�
       echo "<script>alert('�����Ϸ�');location.href='../nav4.php';</script>";
   ?>
