$(function(){
  $.ajax({
		  type     : "post",
		  url      : "../order/loanItemSrch.php?authKey=c28718fb49e39734141633a23324243341e8627d3334a8b032c9d4bf783bf65b&startDt=2016-01-01&endDt=2018-05-10&%20gender=0;1&from_age=6&to_age=60&region=11;21;&addCode=0;1;2;3;4;5;6;7;8;9&kdc=0;1;2;3;4;5;6;7;8;9&pageNo=1&pageSize=1000",
		  dataType : "xml",
		  success  : function(xmlData){
			var list = $(xmlData).find("doc").each(function(index){
				var show  = "<input type='text' name='isbn[]' value='" +parseInt($(this).find("isbn13").text())+ "'><input type='text' name='title[]' value='" + $(this).find("bookname").text() + "'>";
					show += "<input type='text' name='authors[]' value='" +$(this).find("authors").text()+ "'>";
					show += "<input type='text' name='publisher[]' value='" +$(this).find("publisher").text()+"'>";
				$("#formform").append(show);
			});
		  }
	});
});