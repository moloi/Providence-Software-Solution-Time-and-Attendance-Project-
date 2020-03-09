$(document).ready(function(){
	event_calendar.LoadMonth();
});

event_calendar = {
	LoadMonth:function(month, year){
		var url 	= HTTP_PATH+'upcomingevents/calendar';
		var param 	= {month:month,year:year};
		var id 		= 'Calendar';
	    event_calendar.ajaxcall(url, param, id);
	    $('#Events').html('');		
	},
	loadpage:function(data, containerid){
		var res = $("#"+containerid).html(data);
	},
	add_rows:function(){
		var rows 		= $('#Calendar_table tr').length;
		var cols 		= $('#Calendar_table tr:nth-child(2) > td').length;
		var blocks		= $('#Calendar_table td').length;
		var ava_blocks	= parseInt(blocks) + 4;
		var cur_blocks	= parseInt(rows) * parseInt(cols);
		var req_blocks	= parseInt(cur_blocks) - ava_blocks;
		for(var i =1; i <= req_blocks; i++){
			$("#Calendar_table tr:nth-child("+rows+")").append('<td class="empty">&nbsp;</td>');
		}
	},
	ajaxcall:function(url, param, containerid){
		var bustcachevar = 1; //bust potential caching of external pages after initial request? (1=yes, 0=no)
		var bustcacheparameter="";

		if (bustcachevar) bustcacheparameter=(url.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime()
		$.ajax({
		  url: url+bustcacheparameter,
		  data: param, 
		  type: 'post',
		  dataType : 'html',
		  error  : function (error) {
		  	event_calendar.loadpage(error, containerid);
		    event_calendar.add_rows();
		  },
		  success: function(result) {
		    event_calendar.loadpage(result, containerid);
		    event_calendar.add_rows();
		  }
		});
	}
}
function LoadEvents(date) {
	var url 	= HTTP_PATH+'upcomingevents/events';
	var param 	= {date:date};
	var id 		= 'Events';
    event_calendar.ajaxcall(url, param, id);
}