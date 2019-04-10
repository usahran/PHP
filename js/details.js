$(function(){
	$.ajax({
		type     : "get",
		url      : "../order/srchDtlList.php?authKey=c28718fb49e39734141633a23324243341e8627d3334a8b032c9d4bf783bf65b&isbn13="+ bname +"&loaninfoYN=Y&displayInfo=age",
		dataType : "xml",
		success  : function(xmlData){
			console.log(bname);
			var list = $(xmlData).find("detail").each(function(index){
				var show = "<img src='" + $(this).find("bookImageURL").text() + "' ";
				show+= "alt='" + $(this).find("isbn13").text() + "' ";
				show+= " style='width: 350px' />";
				$("#data_img").append(show);
				$(".b_right > a").eq(0).append($(this).find("bookname").text());
				if($(this).find("authors").text()=="")
					$(".b_right > a").eq(1).append("알수 없음");
				else
					$(".b_right > a").eq(1).append($(this).find("authors").text());
				if($(this).find("publisher").text()=="")
					$(".b_right > a").eq(2).append("알수 없음");
				else
					$(".b_right > a").eq(2).append($(this).find("publisher").text());
				if($(this).find("publication_year").text()=="")
					$(".b_right > a").eq(3).append("알수 없음");
				else
					$(".b_right > a").eq(3).append($(this).find("publication_year").text());
				show = "<div id='description'> <h3>설띵</h3><p>" + $(this).find("description").text() + "</p> </div>"
				$("#description > p").append($(this).find("description").text());
			});
		}
	});
	$.ajax({
		type     : "get",
		url      : "recommandList.php?authKey=c28718fb49e39734141633a23324243341e8627d3334a8b032c9d4bf783bf65b&isbn13="+ bname,
		dataType : "xml",
		success  : function(xmlData){
			var list = $(xmlData).find("book").each(function(index){
				var count = 50;
				if(index<count){
					var show = "<div id='data_imgs' ><a href='b_detail.php?isbn=" +parseInt($(this).find("isbn13").text())+ "'><img src=" + $(this).find("bookImageURL").text();
					if($(this).find("isbn13").text())
						show+= " alt='" + $(this).find("isbn13").text();
					show+= "' /></a>";
					show+= "<div id='tit'>" + $(this).find("no").text()+". "; 
					show+= $(this).find("bookname").text() + "</div></div>";
					$("#b_other").append(show);
					var scrollsize = $("#b_other").find('div').outerWidth(true);
					$("#b_other").width((index+1)*scrollsize);
				}
			});
		}
	});
	$('#b_order > button').click(function(){
		var tagid = "b_buy";
		var Now = new Date();
		var thisTime = Now.getFullYear();
		thisTime += '-' + (Now.getMonth() + 1);
		thisTime += '-' + Now.getDate();
		thisTime += ' ' + Now.getHours();
		thisTime += ':' + Now.getMinutes();
		var chars = "0123456789ACDEFGHIJKLMNOPQRSTUVXTZ";
		var randomstring = '';
		for (var i=0; i<3; i++) {
			var rnum = Math.floor(Math.random() * chars.length);
			randomstring += chars.substring(rnum,rnum+1);
		}
		var tempstring = Now.getMonth() + 1;
		tempstring += Now.getDate();
		tempstring += Now.getHours();
		tempstring += Now.getMinutes();
		tempstring += randomstring;
		var book_num = parseInt($('#data_img > img').attr("alt"));
		$('#book_num').attr("value",book_num);
		$('#b_date').attr("value",thisTime);
		if(!book_num){
			alert("없음");
			return false;
		}else{
			if($(this).attr('id')==tagid){
				var order_num = "B_" + Now.getFullYear();
				order_num += tempstring;
				order_num += randomstring;
				$('#b_type').attr("value",order_num);
				var b_name = $(".b_right > a").eq(0).text();
				$('#b_name').attr("value",b_name);
				$(this).attr("type","submit");
			}else{
				var order_num = "W_" + Now.getFullYear();
				order_num += tempstring;
				$('#b_type').attr("value",order_num);
				var b_name = $(".b_right > a").eq(0).text();
				$('#b_name').attr("value",b_name);
				$(this).attr("type","submit");
			}
		}
		
	});
	var scrolls = 0;
	$(".btn4 > *").click(function(){
		if($(this).text() == '>'){
			if(scrolls>(-$("#b_other").width() + 1140)){
				scrolls+= -$("#b_other").find('div').outerWidth(true) * 4;
				$("#b_other").animate({marginLeft:scrolls},800);
			}
		}
		if($(this).text() == '<'){
			if(scrolls<0){
				scrolls+= $("#b_other").find('div').outerWidth(true) * 4;
				$("#b_other").animate({marginLeft:scrolls},800);
			}
		}
	});
});