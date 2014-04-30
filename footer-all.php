<script>
	
	$(document).ready(function(){
		
		
	$("#subscribe-submit").click(function(){
		
			
		if($('#floatingCirclesG').is(':visible'))
 		{
    	myAjaxCall.abort();
		}
		else {
			
		
		 myAjaxCall = $.ajax({
			
			type:"POST",
			url:"subscribe.php",
			cache:false,
			beforeSend: function(){
				$('#floatingCirclesG').show();
			},
			
			complete: function(){
				$('#floatingCirclesG').hide();
				
			},
			success: function(html){
				
				
				$("#divPersonalized").html(html).show();
			}
		
			
		});
		}		
	});

	
	$('#fbicon').hover(function(){
	
		$('#fbicon').toggleClass("socialicononhover");
		
	});
	$('#twicon').hover(function(){
	
		$('#twicon').toggleClass("socialicononhover");
		
	});$('#lnicon').hover(function(){
	
		$('#lnicon').toggleClass("socialicononhover");
		
	});
	
	$('#slidebottom #next').click(function() {
    $(this).next().slideToggle();
  	$(this).next().slideToggle();
  	
  });
});
	
</script>
<div class="footer">
<div id="fimg">
<img src="images/fetlogo.jpg" width="90px;" height="103px;" />
</div>


<div id="footer-mid">
	<table style="width: 100%;height:100%;color: #212121;">
		<tr style="width: 100%;height: 100%;">
			<td style="width:15%;border-right: 1px solid silver;padding-left: 4%;vertical-align: top;padding-top: 5px;">
				<table>
					<tr><span style="font-size: 140%;">Home</span> </tr><br />
					<tr><span style="font-size: 140%;">Downloads</span></tr><br />
					<tr><span style="font-size: 140%;">Search</span></tr><br />
					<tr><span style="font-size: 140%;">FAQs</span></tr><br />
					<tr<span style="font-size: 140%;">Quick Links</span></tr><br />
				
				</table>
			</td>
			<td style="width:25%;border-right: 1px solid silver;padding-left: 0%;padding-right:2px;">
				<div id="newsroom">
				<span style="font-size: 160%;padding-left: 5%;">Newsroom</span>	
				<div id="newsroom-data">
					 <div id="newsf">
					 	<div id="date-colnewsf">
					 		<div id="datenewsf">8</div>
					 		<div id="monthnewsf">
					 			<span style="padding-left:25%;font-family:'Dosis';"> Feb</span>
					 		</div>
					 		</div>
					 	 <span style="position: absolute;margin-left: 1%;">Workshop By Rakshit Tandon Sir<br /></span> </div>
					 <div id="newsf">
					 	<div id="date-colnewsf">
					 		<div id="datenewsf">13</div>
					 		<div id="monthnewsf">
					 			<span style="padding-left:25%;font-family:'Dosis';"> Mar</span>
					 		</div>
					 		</div>
					 	 <span style="position: absolute;margin-left: 1%;">Welcome Tech fest<br /></span> </div>
					 <div id="newsf">
					 	<div id="date-colnewsf">
					 		<div id="datenewsf">29</div>
					 		<div id="monthnewsf">
					 			<span style="font-family:'Dosis';padding-left:25%;"> Jun</span>
					 		</div>
					 		</div>
					 	 <span style="position: absolute;margin-left: 1%;width: 20%;">Seminar At Cryptography And Network Security<br /></span> </div>
					 <div id="newsf">
					 	<div id="date-colnewsf">
					 		<div id="datenewsf">10</div>
					 		<div id="monthnewsf">
					 			<span style="font-family:'Dosis'; padding-left:25%;">Dec</span>
					 		</div>
					 		</div>
					 	 <span style="position: absolute;margin-left: 1%;width: 20%;">Introducing You The New Hope<br /></span> </div>
					 <div id="newsf">
					 	<div id="date-colnewsf">
					 		<div id="datenewsf">29</div>
					 		<div id="monthnewsf">
					 			<span style="padding-left:25%;font-family:'Dosis';"> Jun</span>
					 		</div>
					 		</div>
					 	 <span style="position: absolute;margin-left: 1%;width: 20%;">The Sound Of Victory<br /></span> </div>
					 
					<div id="seemorenewsf">See More</div>
				</div>
				
				</div>
				
				
			</td>
			<td style="width:42%;border-right: 1px solid silver;padding-left: 1%">
				<div id='social-col'>
				<div id="social" style="height: 17%;padding-top: 1%;">
					<span style="font-size: 155%;color:#212121; padding-left:3%;">Like Us ?? Why Not Follow Us
						<div id="socialiconswrapper" style="display: inline;padding-left: 14%">
						
<div id="fbicon" style="background-image: url('images/facebook.png');background-repeat: no-repeat;position:absolute;top:5%;
background-position: center center;padding: 6px 3px 9px;border: 1px solid #212121;display: inline-block;border-radius: 10em 10em 10em 10em;">
<span style="opacity: 0;color: #ffffff;">fbico</span></div>



<div id="twicon" style="background-image: url('images/twitter_bird.png');background-repeat: no-repeat;position:absolute;top:5%;margin-left:5%;
background-position: center center;padding: 6px 3px 9px;border: 1px solid #212121;display: inline-block;border-radius: 10em 10em 10em 10em;">
<span style="opacity: 0;color: #ffffff;">fbico</span></div>

<div id="lnicon" style="background-image: url('images/linkedin.png');background-repeat: no-repeat;position:absolute;top:5%;margin-left:10%;
background-position: center center;padding: 6px 3px 9px;border: 1px solid #212121;display: inline-block;border-radius: 10em 10em 10em 10em;">
<span style="opacity: 0;color: #ffffff;">fbico</span></div>



						</div>
					
					
					
					
				</div>
				<div id="subscribe">
					
					<span style="font-size: 155%;padding-left:3%;padding-top: 0%;">Subscribe To FET ACA Newsletter</span><br /><br />
					
					<div id="subscribe-fld" style="padding-left:3%;">
<span style="font-family: 'Dosis';font-size: 115%; ">Please Provide A Valid Email Address !</span> 
<form style="margin-top: 2%">
<input id="email" name="email" value="Your Email Address" onblur="if (this.value=='') this.value='Your Email Address'" onfocus="if (this.value=='Your Email Address') this.value='';" type="text">
<input id="subscribe-submit" class="btn" value="Subscribe" type="button" onclick="PostData()" />
<div id="loading_subscribe" style="position:absolute;top:45%; display: inline;padding-left:1%;">

<div id="floatingCirclesG" style="display: none">
<div class="f_circleG" id="frotateG_01">
</div>
<div class="f_circleG" id="frotateG_02">
</div>
<div class="f_circleG" id="frotateG_03">
</div>
<div class="f_circleG" id="frotateG_04">
</div>
<div class="f_circleG" id="frotateG_05">
</div>
<div class="f_circleG" id="frotateG_06">
</div>
<div class="f_circleG" id="frotateG_07">
</div>
<div class="f_circleG" id="frotateG_08">
</div>
</div>

</div>
</form>

						
					</div>
				</div>	
<div id="testimonial">
<span id="testimonial-head" style="font-size: 155%;padding-left:3%;">Testimonials</span>
<div id="testimonial-data" style="padding-left: 3%";> 
<span style="font-size: 120%;"> Just Three Words From My Side-Explore, Impore,Apply..A Learning That Has Changed My Life For Now And Forever... </span><br />
<span style="float: right;padding-right: 8%;font-size: 103%;">-Rohan Jain</span></div> 
</div>
				</div>


			</td>
			<td style="color: #212121;">
				<div id="footer-meetus">
	<span style="font-size: 160%;padding-left: 5%;"> Meet Us</span>
	<table>
		<tr>
			<td style="padding-left: 10px;padding-top: 10px;">
				<span style="font-size: 115%">Reach Us :</span> <br />
				<span style="margin-top: 10px;font-size: 110%"> Faculty Of Engineering & Technology<br />
				Agra College<br />
				Moti Katra Road, Agra<br />
				Uttar Pradesh<br /></span>
				<br />
				<span style="font-size: 115%">Contact Us</span><br />
				 <span style="font-size: 110%">0562-2460486</span>					
				<br /><br />
				<span style="font-size: 115%">Email Us</span><br />
				 <span style="font-size: 110%">info@agracollege.org</span>
			</td>
		
		</tr>
	</table>
</div>
			</td>
		
		</tr>
	</table>
	
	
</div>


<div id='footer-end'>

<table style="margin-left: 10%;width:80%;margin-right: 10%;border-top:1px solid silver;padding-top: 5px;
	">
<tr>
	<td><span style="padding-left: 20%;">Privacy Policy</span></td>
	<td><span style="padding-left: 16%;border-left: 1px solid silver;padding-right: 35%;
border-right: 1px solid silver;">Disclameir</span></td>
	<td><span style="padding-right: 27%;border-right: 1px solid silver; ">Trademark Notice</span> </td>
	<td><span style="padding-right:16%;border-right: 1px solid silver;">Powered By:&nbsp;<span style="color: crimson;">
	<div id="developers">FET Fellows</div>	</span></span> </td>
	<td>&copy; 2014. All Rights Reserved.</td>
	
</tr>	
</table>
</div>
</div>

