$(document).ready(function(){

				$("#deandeskbox").hide();
		$("#historybox").hide();
		
		if($("#aboutbox").is(':visible')){
			
		myAjaxCall.abort();
		
		}
		
		else if($('#loading').is(':visible'))
 		{
    	myAjaxCall.abort();
		}
		else {
			
		
		 myAjaxCall = $.ajax({
			
			type:"POST",
			url:"aboutus.php",
			cache:false,
			beforeSend: function(){
				$('#loading').show();
			},
			
			complete: function(){
				$('#loading').hide();
			},
			success: function(h){
				
				
				$("#aboutusbox").html(h).show();
			}
		
			
		});
		}		
	
	
		$('.a').click(function(){
			var left=document.getElementById("events-switch").offsetLeft;
			var top =document.getElementById("events-switch").offsetTop;
			$("#events-switch-box").css("left",left-50);
			$("#events-switch-box").css("top",top+12);
			$('.b').show();
		});
	
	$("#aboutus").click(function(){
		
		$("#deandeskbox").hide();
		$("#historybox").hide();
		
		if($("#aboutbox").is(':visible')){
			
		myAjaxCall.abort();
		
		}
		
		else if($('#loading').is(':visible'))
 		{
    	myAjaxCall.abort();
		}
		else {
			
		
		 myAjaxCall = $.ajax({
			
			type:"POST",
			url:"aboutus.php",
			cache:false,
			beforeSend: function(){
				$('#loading').show();
			},
			
			complete: function(){
				$('#loading').hide();
			},
			success: function(h){
				
				
				$("#aboutusbox").html(h).show();
			}
		
			
		});
		}		
	});

		$("#deandesk").click(function(){
		
		$("#aboutusbox").hide();
		$("#historybox").hide();
			
			
		if($("#deanbox").is(':visible')){
			
		myAjaxCall.abort();
		
		}
		
		else if($('#loading').is(':visible'))
 		{
    	myAjaxCall.abort();
		}
		else {
			
		
		 myAjaxCall = $.ajax({
			
			type:"POST",
			url:"deandesk.php",
			cache:false,
			beforeSend: function(){
				$('#loading').show();
			},
			
			complete: function(){
				$('#loading').hide();
			},
			success: function(html){
				
				
				$("#deandeskbox").html(html).show();
			}
		
			
		});
		}		
	});


	
	$("#history").click(function(){
		
		$("#aboutusbox").hide();
		$("#deandeskbox").hide();
		
		if($("#ourhistorybox").is(':visible')){
			
		myAjaxCall.abort();
		
		}
		
		else if($('#loading').is(':visible'))
 		{
    	myAjaxCall.abort();
		}
		else {
			
		
		 myAjaxCall = $.ajax({
			
			type:"POST",
			url:"history.php",
			cache:false,
			beforeSend: function(){
				$('#loading').show();
			},
			
			complete: function(){
				$('#loading').hide();
			},
			success: function(html){
				
				
				$("#historybox").html(html).show();
			}
		
			
		});
		}		
	});

});

