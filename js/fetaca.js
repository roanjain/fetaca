$(document).ready(function(){
	
	 $(".interior").hide(0);
 $("#div1").show(500);
   $('#img1').addClass('border');
				
	$("#submitquery").click(function(){
		
			
		yourname =$('#YourName').val();
		youremail =$('#YourEmail').val();
		select =$('#select').val();
			
		if($('#floatingCirclesGG').is(':visible'))
 		{
    	myAjaxCall.abort();
		}
		else {
			
		
		 myAjaxCall = $.ajax({
			
			type:"POST",
			url:"submitquery.php",
			data: "youremail="+youremail+"&yourname="+yourname+"&select"+select,
        	cache:false,
			beforeSend: function(){
				$('#floatingCirclesGG').show();
			},
			
			complete: function(){
				$('#floatingCirclesGG').hide();
				
			},
			success: function(html){
				
				
				$("#loading_subscribee").html(html).show();
			
			}
		
			
		});
		}		
	});

				
				$('#programs').hover(function(){
	
				$('#graduate-arrow').show();
				
				$('#graduate-programs').hover(function(){
					
					if ($("#postgraduate-arrow").is(":visible")) {
               		 $("#postgraduate-arrow").hide();
           	  		}
					$('#graduate-arrow').show();
					
				});

				$('#postgraduate-programs').hover(function(){
					
					if ($("#graduate-arrow").is(":visible")) {
               		 $("#graduate-arrow").hide();
           	  		}
					$('#postgraduate-arrow').show();
					
				});
				$('#events-arrow').hide();
		 		$('#communities-arrow').hide();
		 		$('#insights-arrow').hide();
		 		$('#meetus-arrow').hide();
			
			 if ($("#events-box").is(":visible")) {
                $("#events-box").hide();
           	  }
           	 else if ($("#communities-box").is(":visible")) {
                $("#communities-box").hide();
           	  }else if ($("#insights-box").is(":visible")) {
                $("#insights-box").hide();
           	  }else if ($("#meetus-box").is(":visible")) {
                $("#meetus-box").hide();
           	  } 
           	  
			$('#programs-box').show();
		$('#programs-arrow').show();
	
		});
	
	
	$('#events').hover(function(){
	
				$('#programs-arrow').hide();
		 		$('#communities-arrow').hide();
		 		$('#insights-arrow').hide();
		 		$('#meetus-arrow').hide();
			
			
			 if ($("#programs-box").is(":visible")) {
                $("#programs-box").hide();
           	  }
           	 else if ($("#communities-box").is(":visible")) {
                $("#communities-box").hide();
           	  }else if ($("#insights-box").is(":visible")) {
                $("#insights-box").hide();
           	  }else if ($("#meetus-box").is(":visible")) {
                $("#meetus-box").hide();
           	  } 
    
			$('#events-box').show();
			$('#events-arrow').show();
		
					$('#prajwalan-data').hide();
		$('#prajwalan-btn').hide();
	$('#navodaya-btn').hide();
	$('#navodaya-data').hide();
					
				$('#kalrav-data').show(200);
		
		
		});
	
	$('#communities').hover(function(){
	
			
				$('#programs-arrow').hide();
		 		$('#events-arrow').hide();
		 		$('#insights-arrow').hide();
		 		$('#meetus-arrow').hide();
			
			
			 if ($("#programs-box").is(":visible")) {
                $("#programs-box").hide();
           	  }
           	 else if ($("#events-box").is(":visible")) {
                $("#events-box").hide();
           	  }else if ($("#insights-box").is(":visible")) {
                $("#insights-box").hide();
           	  }else if ($("#meetus-box").is(":visible")) {
                $("#meetus-box").hide();
           	  } 
    
	
			$('#communities-box').show();
			$('#communities-arrow').show();
		
		});
	
	$('#insights').hover(function(){
			
			
			
				$('#play-vid-btn').hide();
				$('#programs-arrow').hide();
		 		$('#events-arrow').hide();
		 		$('#communities-arrow').hide();
		 		$('#meetus-arrow').hide();
		
				$('#insights-box').show();
				$('#insights-arrow').show();
				
				
			
				 if ($("#programs-box").is(":visible")) {
                $("#programs-box").hide();
           	  }
           	 else if ($("#communities-box").is(":visible")) {
                $("#communities-box").hide();
           	  }else if ($("#events-box").is(":visible")) {
                $("#events-box").hide();
           	  }else if ($("#meetus-box").is(":visible")) {
                $("#meetus-box").hide();
           	  } 
    
		
		});
	
	$('#fcimg').hover(function(){
		$('#fcimg').toggleClass("fcimghover");
	});
	
	$('#meetus').hover(function(){
				$('#programs-arrow').hide();
		 		$('#events-arrow').hide();
		 		$('#communities-arrow').hide();
		 		$('#insights-arrow').hide();
			
			
				if ($("#programs-box").is(":visible")) {
                $("#programs-box").hide();
           	  }
           	 else if ($("#communities-box").is(":visible")) {
                $("#communities-box").hide();
           	  }else if ($("#insights-box").is(":visible")) {
                $("#insights-box").hide();
           	  }else if ($("#events-box").is(":visible")) {
                $("#events-box").hide();
           	  } 
    		$('#meetus-box').show();
					$('#meetus-arrow').show();
	
		});
	
    
    
		$("#meetus-box").mouseleave(function(){
    				$('#meetus-arrow').hide();
	
    		$(this).hide();
		});
	$("#insights-box").mouseleave(function(){
    		$(this).hide();
    		$('#insights-arrow').hide();
			
		});
		
$("#events-box").mouseleave(function(){
    		$(this).hide();
				$('#events-arrow').hide();
		 		
				
		});
$("#programs-box").mouseleave(function(){
    		$(this).hide();
				$('#programs-arrow').hide();
		       		 $("#postgraduate-arrow").hide();
         	
		});
		
		
		
	$("#communities-box").mouseleave(function(){
    		$(this).hide();
    	$('#communities-arrow').hide();
		 	
		});
		
	
	var programs= document.getElementById("programs").offsetLeft;
	$("#programs-arrow").css("margin-left",programs);

	var events= document.getElementById("events").offsetLeft;
	$("#events-arrow").css("margin-left",events);
	
	var communities= document.getElementById("communities").offsetLeft;
	$("#communities-arrow").css("margin-left",communities);

	var insights= document.getElementById("insights").offsetLeft;
	$("#insights-arrow").css("margin-left",insights);

	var meetus= document.getElementById("meetus").offsetLeft;
	$("#meetus-arrow").css("margin-left",meetus);


$('#kalrav').hover(function(){
		$('#prajwalan-data').hide();
		$('#prajwalan-btn').hide();
	$('#navodaya-btn').hide();
	$('#navodaya-data').hide();
	
	
		
	$('#kalrav-btn').show(200);
	$('#kalrav-data').fadeIn(200);
});

$('#prajwalan').hover(function(){
	$('#kalrav-data').hide();
	$('#kalrav-btn').hide();
	$('#navodaya-data').hide();	
	$('#navodaya-btn').hide();
	$('#prajwalan-btn').fadeIn(200);
	$('#prajwalan-data').fadeIn(200);

});
$('#navodaya').hover(function(){
	$('#prajwalan-btn').hide();
	$('#prajwalan-data').hide();
	$('#kalrav-btn').hide();
	$('#kalrav-data').hide();
	
		$('#navodaya-btn').fadeIn(200);
	
	$('#navodaya-data').fadeIn(200);
});
	
	
	$('#fetjournal').hover(function(){
		
		$('#play-vid-btn').hide();
				if ($("#fetchannel-arrow").is(":visible")) {
				  $("#fetchannel-arrow").hide();
           	  	  $("#fetchannelbox").hide();
        			$('#fetjournal-arrow').show();
					$('#fetjournal').toggleClass("newclass");
		  			$('#fetjournalbox').fadeIn();   	  
           	  }
            	  else if ($("#topstory-arrow").is(":visible")) {
                $("#topstory-arrow").hide();
           	  	  $("#topstorybox").hide();
        $('#fetjournal-arrow').show();
		$('#fetjournal').toggleClass("newclass");
		$('#fetjournalbox').fadeIn();
		   	  	
           	  }
		
		
		$('#fetjournal-arrow').show();
		$('#fetjournal').toggleClass("newclass");
		$('#fetjournalbox').fadeIn();
		
	});
	
	$('#fetchannel').hover(function(){
		
		$('#play-vid-btn').hide();
		
		if ($("#fetjournal-arrow").is(":visible")) {
                $("#fetjournal-arrow").hide();
        		   	  	  $("#fetjournalbox").hide();
        $('#fetchannel-arrow').show();
		$('#fetchannel').toggleClass("newclass");
		$('#fetchannelbox').fadeIn();
		        
           	  }
           	  else if ($("#topstory-arrow").is(":visible")) {
                $("#topstory-arrow").hide();
           	  	  $("#topstorybox").hide();
        $('#fetchannel-arrow').show();
		$('#fetchannel').toggleClass("newclass");
		$('#fetchannelbox').fadeIn();
		   	  	
           	  }
		
	});
	$('#topstory').hover(function(){
		
				if ($("#fetchannel-arrow").is(":visible")) {
				  $("#fetchannel-arrow").hide();
           	  	  $("#fetchannelbox").hide();
        			$('#topstory-arrow').show();
					$('#topstory').toggleClass("newclass");
		  			$('#topstorybox').fadeIn();   	  
           	  		$('#play-vid-btn').fadeIn();
           	  }
           	  else if ($("#fetjournal-arrow").is(":visible")) {
                $("#fetjournal-arrow").hide();
           	  	$("#fetjournalbox").hide();
           	  	$('#topstory-arrow').show();
				$('#topstory').toggleClass("newclass");
				$('#topstorybox').fadeIn();
           	  	$('#play-vid-btn').fadeIn();
           	  }
           	  
    
		
	});
		
	var newsright=document.getElementById("newsfet").offsetLeft;
	$("#news").css("margin-left",newsright-60);

});