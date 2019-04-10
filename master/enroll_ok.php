<?
	include "../db_connect.php"; // db접속 php 포함
	$isbn = $_POST[isbn];
	$title = $_POST[title];
	$authors = $_POST[authors];
	$publisher = $_POST[publisher];
	$sel1 = $_POST[sel1];
	$pre_img = $_POST[pre_img]; // 기존 이미지
	$thisTime = date("Y-m-d H:i");
	
	$book_code = "";
	$url = "";
	$dir="../img/"; //이미지 저장 디랙토리
	if(is_uploaded_file($_FILES["bookImageURL"]["tmp_name"])){
		$url = $_FILES["bookImageURL"]["name"]; //받아온 파일
		//저장될 이미지 이름 생성
		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghijklmnopqrstuvwxyz";
		$randomstring = '';
		for ($i=0; $i<10; $i++) {
			$randomstring .= $chars[rand(0, strlen($chars) - 1)];
		}
		$book_code = $randomstring;
		$book_code .= "_";
		$book_code .= $url; // ##########_filename.jpg
		$save_name = iconv("utf-8","cp949",$book_code); //문자 변환
		if(!move_uploaded_file($_FILES["bookImageURL"]["tmp_name"], "$dir/$save_name")){ // 저장
		  die("파일을 지정한 디렉토리에 저장하는데 실패했습니다.");
		}
	}
  
  if($isbn != ""){ //$isbn이 있으면 수정 | 아니면 등록
		$sql  = "update new_book set ";
		$sql .= "title = '$title',";
		$sql .= "authors = '$authors',";
		$sql .= "publisher = '$publisher',";
		if($url != "") // 받아온 이미지가 있으면 bookImageURL도 수정
			$sql .= "bookImageURL = '$book_code',";
		$sql .= "group_cd = $sel1 ";
		$sql .= "where isbn = '$isbn'";
		echo "$sql";
		$result = mysql_query($sql);
		if(!$result){
			echo "<script>alert('수정 실패');history.back();</script>";
		}else{
			echo "<script>alert('수정 성공');location.href='master_info.php';</script>";
		}
  }else{
		//isbn 10자리 생성
		$integer = "0123456789";
		$randomnum = '';
		for ($i=0; $i<10; $i++) {
			$randomnum .= $integer[rand(0, strlen($integer) - 1)];
		}
		//파일을 지정한 디렉토리에 저장
		$sql = "select * from new_book where bookImageURL = '$book_code'"; // 중복 검사
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		if(!$row){
			$sql = "insert into new_book values('$randomnum','$title','$authors','$publisher','$book_code','$sel1','$thisTime')";
			mysql_query($sql);
			echo "<script>alert('추가 성공!'); location.href='master_info.php';</script>";
		}else{
			echo "<script>alert('추가 실패!'); history.back();</script>";
		}
  }
  mysql_close($connect);
?>