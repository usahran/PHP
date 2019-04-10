$(function(){
	var send_list = ["uid", "uname", "ph", "addr", "email"];
	$('#modify').click(function(){
		var $form = $('#modify_form');
		var tmp = [];
		$('.info_right > input').show();
		for(var i = 0; i < $('.info_right > div').length; i++){
			var data_text = $('.info_right > div').eq(i).text();
			$('.info_right > input').eq(i).attr("value",data_text);
		}
		$('.info_right > div').remove();
		$(this).text("수정 완료");
		$(this).attr("id","send_modify");
		$('#leave_id').attr("id","quit_modify");
		$('#quit_modify').text("취소");
		$('#quit_modify').attr("onclick","");
		$('#quit_modify').click(function(){
			location.href = "../user/user_info.php";
		});
		$('#send_modify').click(function(){
			for(var i=0;i<send_list.length;i++){
				$form.append($('.info_right > input'));
			}
			$(this).attr("type","submit");
		});
	});
	$('#m_modify').click(function(){
		var $form = $('#modify_form');
		var tmp = [];
		$('.info_right > input').show();
		for(var i = 0; i < $('.info_right > div').length; i++){
			var data_text = $('.info_right > div').eq(i).text();
			$('.info_right > input').eq(i).attr("value",data_text);
		}
		$('.info_right > div').remove();
		$(this).text("수정 완료");
		$(this).attr("id","send_modify");
		$('#m_leave_id').attr("id","quit_modify");
		$('#quit_modify').text("취소");
		$('#quit_modify').attr("onclick","");
		$('#quit_modify').click(function(){
			location.href = "../master/master_info.php";
		});
		$('#send_modify').click(function(){
			for(var i=0;i<send_list.length;i++){
				$form.append($('.info_right > input'));
			}
			$(this).attr("type","submit");
		});
	});
	$('.table #i_click').click(function(){
		var thisID = $(this).find('td').eq(0).text();
		$('#input_id').attr("value",thisID);
		$('#search_id').attr("action","master_info.php?" + thisID);
		$('#search_id').submit();
	});
	var w_list = [];
	var target = 1;
	var purch_data = $('#purch_data > form > div');
	var wish_data = $('#wish_data > form > div');
	for(var i=0;i<purch_data.length;i++){
		w_list[i]=purch_data.eq(i).find('div').eq(target).text();
		wish_xml(w_list[i], i, purch_data.eq(i));
		purch_data.eq(i).find('div').eq(target).text("");
	}
	for(var i=0;i<wish_data.length;i++){
		w_list[i]=wish_data.eq(i).find('div').eq(target).text();
		wish_xml(w_list[i], i, wish_data.eq(i));
		wish_data.eq(i).find('div').eq(target).text("");
	}
	function wish_xml(w_list, i, tagdata){
		$.ajax({
			type     : "get",
			url      : "../order/srchDtlList.php?authKey=c28718fb49e39734141633a23324243341e8627d3334a8b032c9d4bf783bf65b&isbn13="+ parseInt(w_list) +"&loaninfoYN=Y&displayInfo=age",
			dataType : "xml",
			success  : function(xmlData){
				$(xmlData).find("detail").each(function(index){
					var show = "<img src=" + $(this).find("bookImageURL").text();
					show+= " alt='" + $(this).find("isbn13").text();
					show+= "' style='width: 100%' />";
					$(tagdata).find('div').eq(target).append(show);
					show = "<div class='w_text'>"+ $(this).find("bookname").text() +"</div>";
					$(tagdata).append(show);
				});
			}
		});
	}
	$('#w_order > button').hover(function(){
		$(this).css({"background":"#2c952c","border":"1px solid #2c952c","color":"#fff"});
	},function(){
		$(this).css({"background":"#ffcc33","border":"1px solid #ffcc33","color":"#333"});
	});
	var Now = new Date();
	var thisTime = Now.getFullYear();
	thisTime += '-' + (Now.getMonth() + 1);
	thisTime += '-' + Now.getDate();
	thisTime += ' ' + Now.getHours();
	thisTime += ':' + Now.getMinutes();
	$('#b_buy').click(function(){
		var chk = $('#w_check > input');
		var choose = [];
		chk.each(function (index) {choose[index] = $(this).prop("checked");});
		for(var i = chk.length - 1;i>=0;i--){
			if(!choose[i]){
				$('#w_order > #w_list').eq(i).remove();
				$('#w_order > .b_type').eq(i).remove();
				$('#w_order > .book_num').eq(i).remove();
				$('#w_order > .b_date').eq(i).remove();
			}else{
				$('.b_date').attr("value",thisTime);
			}
		}
		$(this).attr("type","submit");
	});
	$('#b_del').click(function(){
		var chk = $('#w_check > input');
		var choose = [];
		chk.each(function (index) {choose[index] = $(this).prop("checked");});
		for(var i = chk.length - 1;i>=0;i--){
			if(!choose[i]){
				$('#w_order > #w_list').eq(i).remove();
				$('#w_order > .b_type').eq(i).remove();
				$('#w_order > .book_num').eq(i).remove();
				$('#w_order > .b_date').eq(i).remove();
			}
		}
		$('#w_order').attr("action","../order/order_del.php");
		$(this).attr("type","submit");
	});
	$('#p_del').click(function(){
		var chk = $('#b_check > input');
		var choose = [];
		chk.each(function (index) {choose[index] = $(this).prop("checked");});
		for(var i = chk.length - 1;i>=0;i--){
			if(!choose[i]){
				$('#b_order > #b_list').eq(i).remove();
				$('#b_order > .b_type').eq(i).remove();
				$('#b_order > .book_num').eq(i).remove();
				$('#b_order > .b_date').eq(i).remove();
			}
		}
		$(this).attr("type","submit");
	});
});