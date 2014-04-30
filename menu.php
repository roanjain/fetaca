<script>
	
	
	$(document).ready(function(){
		
		
	$("#newsfet").click(function(){
		
			
		if($('#newsfetloading').is(':visible'))
 		{
    	myAjaxCall.abort();
		}
		else {
		
		myAjaxCall = $.ajax({
			
			type:"POST",
			url:"newsfetsmall.php",
			cache:false,
			beforeSend: function(){
				$('#newsfetloading').show();
			},
			
			complete: function(){
				$('#newsfetloading').hide();
				
			},
			success: function(html){
				
				
				$("#divnewsfetsmall").html(html).show();
			}
		
			
		});
		}		
	});

});
</script>
<div id="menuwrapper"><center>
<div id='cssmenu'>
<ul>
         <li><a href="http://www.fetagracollege.org/news.php"><span id="newsfet" style="cursor: pointer;">News@FET
         <?php //	<div style="position:absolute;top:17px; width:0px;height: 0px;border-left: 6px solid transparent;margin-left:8px; border-right: 6px solid transparent;display: inline-block;zoom: 1;border-top: 6px solid #ffffff;"></div> ?>
         	
         	
         	</span></a> </li>
         <li><a href='http://www.fetagracollege.org/TandPCell/'><span>T & P Cell</span></a></li>
         <li><a href='http://www.fetagracollege.org/search/search.php'><span>Search</span></a></li>
         
         <li><a href='http://www.fetagracollege.org/admission.php'><span>Admission</span></a></li>
  		 <li><a href='http://www.fetagracollege.org/about.php'><span>About</span></a></li>
         <li><a href='http://www.fetagracollege.org'><span>Home</span></a></li>
         
</ul>

</div>
</center>
</div>
<div id="newsfetloading" style="display:none; position:absolute;left:75%;background:#ffffff;
border-bottom:1px solid #212121;border-bottom-right-radius: 3px;
border-bottom-left-radius: 3px;
padding: 0%; border-right:1px solid #212121; border-left:1px solid #212121; z-index:1000; width: 13%;height: 29%;box-shadow: 0px 9px 6px -4px rgba(0, 0, 0, 0.7);">
	Loading...
</div>
