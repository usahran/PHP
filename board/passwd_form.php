   <?
        // GET/POST�� ���޵� �� ȹ��
        $num = $_GET[num];
        $page = $_GET[page];
    ?>
  <html>
  <head>
    <title> ���־� ����</title>
    <!--<link type="text/css" rel="stylesheet" href="css/common.css" />-->
  </head>
   <link rel="stylesheet" type="text/css" href="../css/css_base.css?ver=1">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/bootstrap.css" rel="stylesheet">
   <style>
   body{margin:0 auto;}
	main{top:300px;}
	#classification{width:110%;}
   </style>
   
   <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script type="text/javascript" src="script/jquery.js"></script>-->
	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
	 <script type="text/javascript" src="../js/base.php" ></script>
	 <script>
	$(function(){
	    $('#menu > ul > li').hover(function(){
    		$(this).find('ul').stop().fadeIn(0);
    	},function(){
    		$(this).find('ul').stop().fadeOut(0);
    	});
		
	});
	 </script>
	
  <body>
    <?
    ?>
    <div id="loginform">
		<div id="quit" onclick="hide_login();"><img src="../image/x.png"/></div>
		<div id="lb"><img src="../image/logo.jpg"  height="120" width="200"></div>
		<form action="../join/login.php" method="post" id="login">
			<input type="text" name="id" value="���̵�"><br>
			<input type="password" name="pw" value="��й�ȣ"><br>
			<input type="submit" value="�α���">
		</form>
	</div>
	<div id="grayback"></div>
    <div id="logo"><a href="../main.php"><img src="../image/logo.jpg"  height="120" width="200"></a></div>
    <div id="menubox">
	  <a href="#" onclick="show_login();"><b>�α���</b>&nbsp;&nbsp;</a>
      <a href="#"><b>ȸ������</b>&nbsp;&nbsp;</a>
      <a href="#"><b>�����Ұ�</b>&nbsp;&nbsp;</a>
      <a href="#"><b>�̿�ȳ�</b>&nbsp;&nbsp;</a>
      <a href="#"><b>���ô±�</b></a>
    </div>
    
    <div id="figure">
      <img src="../image/subimg.jpg" height="200" width="100%">
      <nav id="menu">
     <ul>
      <li><a href="../nav1.php">����Ʈ����</a>
        <ul>
          <li id="left" class="left">
            <span id="left_1">Magazine</span><br/>
            <span id="left_2">for hot trend<span>
          </li>
          <li id="right" class="right">
            <span id="right_1">���ο� ������ Ʈ���带 ���� �� �ִ� ������ ���� 250�� ��</span>
            <span id="right_2">�� �о��� �ǿ����̰� ����� �ִ� �ֽ� ������ ���� �� �ִ� ������� �����Ǿ� �ֽ��ϴ�.
            �Ÿ����� �����ϵ� ������ ��� ������ ���� ��ſ��� �����غ�����.</span>
            <span id="right_3">�Ű��� ���� ����></span>
          </li>
        </ul>
      </li>
      
      <li><a href="#">�Ű�����</a>
        <ul>
          <li id="left2" class="left">
            <span id="left_1">Magazine</span><br/>
            <span id="left_2">for hot trend<span>
          </li>
          <li id="right2" class="right">
            <span id="right_1">���ο� ������ Ʈ���带 ���� �� �ִ� ������ ���� 250�� ��</span>
            <span id="right_2">�� �о��� �ǿ����̰� ����� �ִ� �ֽ� ������ ���� �� �ִ� ������� �����Ǿ� �ֽ��ϴ�.
            �Ÿ����� �����ϵ� ������ ��� ������ ���� ��ſ��� �����غ�����.</span>
            <span id="right_3">�Ű��� ���� ����></span>
          </li>
        </ul>
      </li>
      
      <li><a href="#">��õ����</a>
        <ul>
          <li id="left3" class="left">
            <span id="left_1">Magazine</span><br/>
            <span id="left_2">for hot trend<span>
          </li>
          <li id="right3" class="right">
            <span id="right_1">���ο� ������ Ʈ���带 ���� �� �ִ� ������ ���� 250�� ��</span>
            <span id="right_2">�� �о��� �ǿ����̰� ����� �ִ� �ֽ� ������ ���� �� �ִ� ������� �����Ǿ� �ֽ��ϴ�.
            �Ÿ����� �����ϵ� ������ ��� ������ ���� ��ſ��� �����غ�����.</span>
            <span id="right_3">�Ű��� ���� ����></span>
          </li>
        </ul>
      </li>
      
      <li><a href="../nav4.php">�԰� ��� �Խ���</a>
        <ul>
          <li id="left4" class="left">
            <span id="left_1">Magazine</span><br/>
            <span id="left_2">for hot trend<span>
          </li>
          <li id="right4" class="right">
            <span id="right_1">���ο� ������ Ʈ���带 ���� �� �ִ� ������ ���� 250�� ��</span>
            <span id="right_2">�� �о��� �ǿ����̰� ����� �ִ� �ֽ� ������ ���� �� �ִ� ������� �����Ǿ� �ֽ��ϴ�.
            �Ÿ����� �����ϵ� ������ ��� ������ ���� ��ſ��� �����غ�����.</span>
            <span id="right_3">�Ű��� ���� ����></span>
          </li>
        </ul>
      </li>
     </ul>
    </nav>
    </div>
	<main>
		
		<h3><p align=center>�԰� ��� ����</p></h3>
    
     <form method=post action="delete.php?num=<?=$num?>&page=<?=$page?>">
       ��й�ȣ�� �Է��ϼ���.<br>
       ��й�ȣ : <input type=password name="passwd" size=25 maxlength=16><br><br>
       <input class="btn btn-primary" type=submit value=����>
       <input class="btn btn-danger" type=button value=��� onclick="history.back()">
   </form>
		
    </main>
    <div id="footer">
     <hr>
     <div id="flogo"><a href="#"><img src="../image/logo.jpg"  height="120" width="200"></a></div>
     
     <div id="intro">
      <a href="#" id="foot">������ �Ұ�</a> &nbsp;&nbsp;�� &nbsp;&nbsp;
      <a href="#" id="foot">�̿�ȳ�</a> &nbsp;&nbsp;�� &nbsp;&nbsp;
      <a href="#" id="foot">FAQ</a> &nbsp;&nbsp;�� &nbsp;&nbsp;
      <a href="#" id="foot">��������</a> &nbsp;&nbsp;�� &nbsp;&nbsp;
      <a href="#" id="foot">���ô� ��</a> &nbsp;&nbsp;�� &nbsp;&nbsp;
      <a href="#" id="foot">����Ʈ��</a> &nbsp;&nbsp;�� &nbsp;&nbsp;
      <a href="#" id="foot">�̿���</a> &nbsp;&nbsp;�� &nbsp;&nbsp;
      <a href="#" id="foot">�������� ó����ħ</a> </br></br>
      ����ڵ�Ϲ�ȣ : 000-00-00000 �� ��� �Ǹž� �Ű��ȣ : ��⼺�� �� 2018-000ȣ �� ��ǥ�̻� : ��ȭ��, ������ </br>
      �ּ� : ��⵵ ������ �д籸 ���ڵ�</br>
      yhm123@naver.com �� ��ǥ��ȭ:1588-0000 �� FAX : 031-700-0000</br></br>
      Copyright �� Daiter Corp. All rights reserved.
     </div>
    </div>
  </body>
</html>