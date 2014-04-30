<script>
	
		$(document).ready(function(){
		
		
	$("#developers").hover(function(){
		
		$('#developerbox').fadeIn();
		
		});	
				
		$("#developerbox").mouseleave(function(){
			$(this).fadeOut();
		});
	});


</script>

<div id="developerbox" style="z-index:2000; display:none; background: #ffffff;color: grey;">
<table style="width: 100%;height: 100%;">
	<tr style="width: 100%;height: 100%;">
		<td style="vertical-align: top;padding-left: 1%;width:48%;padding-right:3%;border-right: 1px solid silver">
		<span style="font-family: 'Dosis';font-size: 13px;">Rohan Jain</span><br />
		<div id="d-data" style="width:100%;height: 39%;padding-top:1%; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
font-size: 10px;
font-weight: lighter;">I am a webdeveloper & programmer by interest and a dancer & artist by passion.</div>
		<div id="d-pic" style="font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;font-size: 11px;
		font-weight: lighter;width: 100%;height: 45%;margin-top: -4%;">
		<div id="d-social" style="display: inline;margin-left: 1%;position: absolute;top:65%;">
			<span style="color:rgb(96, 183, 225);font-size: 9px;text-decoration: underline;cursor: pointer;"> Find Me On facebook<br /> </span>
			<span style="color: #3bb598;font-size: 9px;text-decoration: underline;cursor: pointer;">Find Me On Twitter</span>
		</div>
		<div id="d-img" style="display: inline;float: right"><img src="images/rj.jpg" width="50px"></div>  </div>
		</td>
		
		<td style="vertical-align: top;padding-left: 2%;width:49%;padding-right:1%;">
		<span style="font-family: 'Dosis';font-size: 13px;">Vikram Tyagi</span><br />
		<div id="d-data" style="width:100%;height: 39%;padding-top:1%; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
font-size: 10px;
font-weight: lighter;">I am a webdeveloper & programmer by interest and a dancer & artist by passion.</div>
		<div id="d-pic" style="font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;font-size: 11px;
		font-weight: lighter;width: 100%;height: 45%;margin-top: -2%;">
		<div id="d-social" style="display: inline;margin-left: 1%;position: absolute;top:65%;">
			<span style="color:rgb(96, 183, 225);font-size: 9px;text-decoration: underline;cursor: pointer"> Find Me On facebook<br /> </span>
			<span style="color: #3bb598;font-size: 9px;text-decoration: underline;cursor: pointer;">Find Me On Twitter</span>
		</div>
		<div id="d-img" style="display: inline;float: right;"><img src="images/vik.JPG" width="50px" height="53px"></div>  </div>
		</td>
		
		
	</tr>
	
</table>

<div id="developer-arrow"></div>
</div>
