<?@session_start();?>
function show_form(){
	var grayback = document.getElementById("grayback");
	var loginform = document.getElementById("loginform");
	grayback.style.display="block";
	loginform.style.display="block";
}
function hide_form(){
	var grayback = document.getElementById("grayback");
	var loginform = document.getElementById("loginform");
	grayback.style.display="none";
	loginform.style.display="none";
}
$(function(){
	var userid='<?php echo $_SESSION[userid];?>';
	if(userid=="Master"){
		$('#menubox > a > b').eq(0).text(userid + "님 환영합니다.");
		$('#menubox > a').eq(0).attr({'onclick':'','href':'master/master_info.php'});
		$('#menubox > a > b').eq(1).text('로그아웃');
		$('#menubox > a').eq(1).attr({'href':'join/logout.php'});
	}else{
		if(userid!=""){
			$('#menubox > a > b').eq(0).text(userid + "님 환영합니다.");
			$('#menubox > a').eq(0).attr({'onclick':'','href':'user/user_info.php'});
			$('#menubox > a > b').eq(1).text('로그아웃');
			$('#menubox > a').eq(1).attr({'href':'join/logout.php'});
		}else{
			$('#menubox > a > b').eq(0).text('로그인');
			$('#menubox > a').eq(0).attr({'onclick':'show_form()','href':'#'});
			$('#menubox > a > b').eq(1).text('회원가입');
			$('#menubox > a').eq(1).attr({'href':'join/join.php'});
		}
	}
	var id=$('#login > input').eq(0);
	var pw=$('#login > input').eq(1);
	var search=$('#search > input');
	var defaultID=id.val();
	var defaultPW=pw.val();
	var defaultSC=search.val();
	id.focus(function(){
		if(id.val()==defaultID)
			id.val('');
	});
	id.blur(function(){
		if(id.val()==''){
			id.val(defaultID);
		}
	});
	pw.attr('type','text');
	pw.focus(function(){
		if(pw.val()==defaultPW){
			pw.attr('type','password');
			pw.val('');
		}
	});
	pw.blur(function(){
		if(pw.val()==''){
			pw.attr('type','text');
			pw.val(defaultPW);
		}
	});
	search.focus(function(){
		if(search.val()==defaultSC){
			search.css('color','#000');
			search.val('');
		}
	});
	search.blur(function(){
		if(search.val()==''){
			search.css('color','#aaa');
			search.val(defaultSC);
		}
	});
	$('#menu > ul > li').hover(function(){
		$(this).find('ul').stop().fadeIn(0);
	},function(){
		$(this).find('ul').stop().fadeOut(0);
	});
	
	var btns = ["btn1","btn2","btn3"];
	var c_name = ["bbest","bnew","brecom"];
	for(var i=0;i<btns.length;i++){
		m_event(btns[i],c_name[i]);
	}
	function m_event(btn,tagdata){
		var pst=0;
		$("." + btn + "> *").click(function(){
			if($(this).text() == '>'){
				if(pst>(-$("."+tagdata).width() + 1140)){
					pst+= -$("."+tagdata).find('div').outerWidth(true) * 4;
					$("."+tagdata).animate({marginLeft:pst},800);
				}
			}
			if($(this).text() == '<'){
				if(pst<0){
					pst+= $("."+tagdata).find('div').outerWidth(true) * 4;
					$("."+tagdata).animate({marginLeft:pst},800);
				}
			}
		});
	}
});