<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIGN-UP AMPM</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="../css/style.css" media="screen" title="no title" charset="utf-8">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?
    $uid = $_POST[uid];
    $pw = $_POST[pw];
    $uname = $_POST[uname];
    $ph = $_POST[ph];
    $add = $_POST[add];
    $email = $_POST[email];
  ?>
  
  
  <style type="text/css">
    
  </style>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js" ></script>
   <script>
    $(function(){
      $('#Password2').keyup(function(){
        if($('#Password').val() =="" || $('#Password2').val() == "")
            $("#pwpw").html("비밀번호 확인을 위해 다시 한번 입력 해 주세요.");
        else if( $('#Password').val() == $('#Password2').val()){
            $("#pwpw").text("");
            $("#pwpw").html("비밀번호가 일치합니다.");
            }
        else{
            $("#pwpw").text("");
            $("#pwpw").html("비밀번호가 틀립니다.");
            }
    })
    
      $('#Password').keyup(function(){
        if($('#Password').val() =="" || $('#Password2').val() == "")
            $("#pwpw").html("비밀번호 확인을 위해 다시 한번 입력 해 주세요.");
        else if( $('#Password').val() == $('#Password2').val()){
            $("#pwpw").text("");
            $("#pwpw").html("비밀번호가 일치합니다.");
            }
        else{
            $("#pwpw").text("");
            $("#pwpw").html("비밀번호가 틀립니다.");
            }
    })
    
    
    
    });
   </script>
    
	<body>
		<article class="container">
			<div class="page-header">
				<center><a href="../main.php"><img src="../image/logo.jpg"  height="120" width="200"></a>
				<h1>Sign up</h1></center>
			</div>
			<form name="senddata" action="db.php" method="post">
				<div class="col-md-6 col-md-offset-3">
					<div class="form-group">
						<label for="InputId">아이디</label>
						<input type="text" class="form-control" id="uid" placeholder="아이디" name="uid"> 
					</div>
					<div class="form-group">
					<button type="button" onclick="ids()" class="btn btn-success">중복체크</button>
					<p class="help-block" id="idid"></p>
					</div>
					<div class="form-group">
						<label for="InputPassword1">비밀번호</label>
						<input type="password" class="form-control" id="Password" placeholder="비밀번호" name="pw">
					</div>
					<div class="form-group">
						<label for="InputPassword2">비밀번호 확인</label>
						<input type="password" class="form-control" id="Password2" placeholder="비밀번호 확인">
						<p class="help-block" id="pwpw">비밀번호 확인을 위해 다시 한번 입력 해 주세요</p>
					</div>
					<div class="form-group">
						<label for="username">이름</label>
						<input type="text" class="form-control" id="Name" placeholder="이름을 입력해 주세요" name="uname">
					</div>
					<div class="form-group">
						<label for="InputEmail">전화 번호</label>
						<input type="text" class="form-control" id="PhoneNum" placeholder="전화 번호를 입력해 주세요( - 생략)" name="ph">
					</div>
					<div class="form-group">
						<label for="InputEmail">주소</label>
						<input type="text" class="form-control" id="Address" placeholder="주소를 입력해 주세요" name="add">
					</div>
					<div class="form-group">
						<label for="InputEmail">이메일 주소</label>
						<input type="email" class="form-control" id="Email" placeholder="이메일 주소를 입력해 주세요" name="email">
					</div>
					<div class="form-group">
						<label for="sel1">관심분야</label>
						<select class="form-control" id="sel1" name="sel1">
						  <option value="1">철학</option>
						  <option value="2">종교</option>
						  <option value="3">사회과학</option>
						  <option value="4">자연과학</option>
						  <option value="5">기술과학</option>
						  <option value="6">예술</option>
						  <option value="7">언어</option>
						  <option value="8">문학</option>
						  <option value="9">역사</option>
						</select>
					</div>
					<div class="form-group text-center">
						<button type="button" onclick="ck()" class="btn btn-info">회원가입<i class="fa fa-check spaceLeft"></i></button>
						<button type="reset" onclick="javascript:history.back(-1)" class="btn btn-warning">가입취소<i class="fa fa-times spaceLeft"></i></button>
					</div>
				</div>
			</form>
		</article>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    
    
    <script type="text/javascript">
	    var a1,a2,a3,a4,a5,a6,a7,a8;
		  function format(){
		  if(a2 != "" && a3 != ""){
		      if(a2 == a3)
		        document.getElementById("pwpw").value = "비밀번호가 일치합니다.";
		      else
		        document.getElementById("pwpw").value = "비밀번호가 일치하지 않습니다.";
		    }
		   }
		    
		function ck(){
		  a1=document.getElementById("uid").value;
		  a2=document.getElementById("Password").value;
		  a3=document.getElementById("Password2").value;
		  a4=document.getElementById("Name").value;
		  a5=document.getElementById("PhoneNum").value;
		  a6=document.getElementById("Address").value;
		  a7=document.getElementById("Email").value;
		  a8=document.getElementById("sel1").value;
		  if(a1 == ""){
		    alert("아이디를 입력하세요"); 
		    uid.focus();
		    }
		  else if(a2 == ""){
		    alert("비밀번호를 입력하세요"); 
		    Password.focus();
		    }
		    else if(a3 == ""){
		    alert("비밀번호 확인을 입력하세요"); 
		    Password2.focus();
		    }
		    else if(a4 == ""){
		    alert("이름을 입력하세요"); 
		    Name.focus();
		    }
		    else if(a5 == ""){
		    alert("전화번호를 입력하세요"); 
		    PhoneNum.focus();
		    }
		    else if(a6 == ""){
		    alert("주소를 입력하세요"); 
		    Address.focus();
		    }
		    else if(a7 == ""){
		    alert("이메일을 입력하세요"); 
		    Email.focus();
		    }
		    else if(a8 == ''){
		    alert("관심분야를 선택해주세요");
		    sel1.focus();
		    }
		    else
		    document.senddata.submit();	  
		}
		
		function ids(){
		  a1=document.getElementById("uid").value;
		  console.log(a1);
		  if(a1 == ""){
		    alert("아이디를 입력하세요"); 
		    uid.focus();
		  }else{
		    senddata.action = 'login_check.php';
		    senddata.submit();
		    
      }
		}
	
		var r1 = "<?echo $uid;?>";
		var r2 = "<?echo $pw;?>";
		var r3 = "<?echo $uname;?>";
		var r4 = "<?echo $ph;?>";
		var r5 = "<?echo $add;?>";
		var r6 = "<?echo $email;?>";
		var r7 = "<?echo $sel1;?>";
		document.getElementById("uid").value = r1;
		document.getElementById("Password").value = r2;
		document.getElementById("Name").value = r3;
		document.getElementById("PhoneNum").value = r4;
		document.getElementById("Address").value = r5;
		document.getElementById("Email").value = r6;
		document.getElementById("sel1").value = r7;
    </script>
  </body>
</html>
