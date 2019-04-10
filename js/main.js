$(function(){
var books = ["authKey=c28718fb49e39734141633a23324243341e8627d3334a8b032c9d4bf783bf65b&startDt=2017-01-01&endDt=2019-04-10&%20gender=0;1&from_age=6&to_age=60&region=11;21;&addCode=0;1;2;3;4;5;6;7;8;9&kdc=0;1;2;3;4;5;6;7;8;9&pageNo=1&pageSize=50",
				"authKey=c28718fb49e39734141633a23324243341e8627d3334a8b032c9d4bf783bf65b&startDt=2019-01-01&endDt=2019-04-10&%20gender=0;1&from_age=6&to_age=60&region=11;21;&addCode=0;1;2;3;4;5;6;7;8;9&kdc=0;1;2;3;4;5;6;7;8;9&pageNo=1&pageSize=50",
				"authKey=c28718fb49e39734141633a23324243341e8627d3334a8b032c9d4bf783bf65b&kdc="];
	if(area==""){
	  books[2] += "0;1;2;3;4;5;6;7;8;9;&pageNo=1&pageSize=50";
	}else{
  	books[2] += area + ";&pageNo=1&pageSize=50";
  }
	for(var i=0;i<books.length;i++){
		xmlStart(books[i],c_name[i]);
		console.log(c_name[i]);
	}

	function xmlStart(linkdata,tagdata){
		var count = 50;
		$.ajax({
		  type     : "post",
		  url      : "order/loanItemSrch.php?" + linkdata,
		  dataType : "xml",
		  success  : function(xmlData){
			var list = $(xmlData).find("doc").each(function(index){
				if(index<count){
					var show = "<div id='data_imgs' ><a href='order/b_detail.php?isbn=" +parseInt($(this).find("isbn13").text())+ "'><img src='" + $(this).find("bookImageURL").text() + "'/></a></div>";

					$("." + tagdata).append(show);
				}
			});
		  }
		});
		var tagWidth = 210 * count;
		$("." + tagdata).css({"width":tagWidth});
	}
});
