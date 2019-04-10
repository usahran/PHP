<?
@session_start();
	unset($_SESSION[userid]);
	unset($_SESSION[userpw]);
	unset($_SESSION[code]);
	header("Location:../main.php");
?>