    <?
        include "../db_connect.php";  
        
        // GET/POST�� ���޵� �� ȹ��
        $num = $_GET[num];
        $page = $_GET[page];
    
        $passwd = $_POST[passwd];
    
       // ������ ��ȣ�� ��й�ȣ�� ���� ���ڵ带 �о� ��(��й�ȣ Ȯ�� ����)
       $sql = "select * from board where num=$num and passwd='$passwd'";
       $result = mysql_query($sql, $connect);
  
       // ��ȣ, ��й�ȣ�� �´� ���ڵ尡 ������ ����
       if (mysql_num_rows($result)) 
           mysql_query("delete from board where num=$num", $connect);
       else
           echo "<script> 
                     alert('��й�ȣ�� Ʋ�Ƚ��ϴ�.'); 
                     history.back(); 
                 </script>";
           
       mysql_close();          
       
       // ���� �������� ���ư�
       echo "<script>alert('�����Ϸ�');location.href='../nav4.php';</script>";
   ?>
