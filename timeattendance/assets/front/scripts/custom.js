$(document).ready(function(){
	$(".form_date").glDatePicker();
	$('.form_time').timepicker();
	$('.form_time').keypress(function(){
		return false;
	});
	var quote_for = $("#quote_for").val();
	if(quote_for > 0){
		show_form(quote_for);
	}
	$("#quote_for").on('change',function(){
		show_form($(this).val());
	});
	$(".num").keypress(function(event) {
        return isNumber(event); 
	});
	$(".form_time").on('change',function(){
		var req_min = $("#no_of_minutes").val();
		var time 	= $(this).val();
		var mer		= time.slice(-2);
		var arr 	= time.substring(0,time.length - 2).split(':');
		var hrs		= arr[0];
		var min		= arr[1];
		if(req_min > 0)
			get_endtime(req_min,mer,hrs,min);
	});
	$("#no_of_minutes").on('change',function(){
		var req_min = $(this).val();
		var time 	= $(".form_time").val();
		var mer		= time.slice(-2);
		var arr 	= time.substring(0,time.length - 2).split(':');
		var hrs		= arr[0];
		var min		= arr[1];
		if(req_min > 0 && time != "")
			get_endtime(req_min,mer,hrs,min);
	});
	$(".eventQuote").on('click',function(){
		var quote_for = $("#quote_for").val();
	    $.ajax({
	        url: HTTP_PATH+"preparequote/validate_event_quote_form/"+quote_for,
	        cache: false,
	        dataType: "json",
	        type: "POST",
	        data : {
	            'formData' : $("#request_quote").serialize()
	        },
	        success: function (data)
	        {
	            if(data.status == true){
	            	console.log("HAI");
	                $("#request_quote").submit()
	            }else{
	                $("#closeerrMsg").html(data.error);
	                return false; 
	            }
	        }
	    });
	    return true;
	}); 
});
function isNumber(evt) 
{
    var charCode = (evt.which) ? evt.which : evt.keyCode;

    if (charCode != 45 && (charCode != 46 || 
            $(this).val().indexOf('.') != -1) && (charCode < 48 || charCode > 57) && charCode != 8)
        return false;

    return true;
}  
function show_form(quote_for)
{
	$("#quote_hidden").val(quote_for);
	if(quote_for == "1"){
		$(".option").show();
		$("#request_quote")[0].reset();
	}else{
		$(".option").hide();
		$("#request_quote")[0].reset();
	}
}
function get_endtime(req_min,mer,hrs,min)
{
	var n_min 	= hrs * 60;
	var totmin	= parseInt(n_min) + parseInt(min) + parseInt(req_min);
	var end_time_hrs = Math.floor(totmin/60);
	if(end_time_hrs > 12)
	{
		if(parseInt(end_time_hrs) - 12 > 12){
			var end_time =  (parseInt(end_time_hrs) - 12 - 12)+":" + (totmin-Math.floor(totmin/60)*60);
		}else{
			var end_time =  (parseInt(end_time_hrs) - 12)+":" + (totmin-Math.floor(totmin/60)*60);
		}
	}
	else
	{
		var end_time =  end_time_hrs+":" + (totmin-Math.floor(totmin/60)*60);
	}
	var arr = end_time.split(':');
	var sub = arr[0] - hrs;
	if(sub < 12){
		$("#end_time").val(end_time+mer);
	}else{
		if(mer == "am"){
			$("#end_time").val(end_time+"pm");
		}else{
			$("#end_time").val(end_time+"am");
		}
	}
}