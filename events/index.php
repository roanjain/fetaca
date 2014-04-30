<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	$("#email").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		
		if(username.length >= 1){
			$("#loading_subscribe").html('<img src="images/loading.gif" />');
			$.post('login_files/check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	

});

</script>
<body>
<div id="footer"><br>
<table width="1000px"  align="center" >
<tr>
<td width="150px" valign="top">	
<table><tr><td style="border-bottom:1px solid #e6e6e6;">
&nbsp;&nbsp;&nbsp;&nbsp;Home<br>
&nbsp;&nbsp;&nbsp;&nbsp;Downloads<br>
&nbsp;&nbsp;&nbsp;&nbsp;Search<br>
&nbsp;&nbsp;&nbsp;&nbsp;FAQs<br>
&nbsp;&nbsp;&nbsp;&nbsp;Quick Links<br>
</td></tr>
<tr><td>
<img src="images/fetlogo.jpg" width="100px" height="100px">
</td></tr></table>


</td>
<td valign="top" width="250px" style="border-left:1px solid #e6e6e6;min-width:250px;">
<span style="font-size:21px;">Newsroom</span>
<br>
dddffffff


</td>
<td width="380px" valign="top" style="border-left:1px solid #e6e6e6;">
<table><tr><td style="border-bottom:1px solid #e6e6e6;">
<span style="font-size:21px;">Like us? &nbsp;Why Not Follow Us !!</span><br><br>
<div class="social">
<img src="images/facebook.png">
</div>
<div class="social">
<img src="images/twitter_bird.png">
</div>
<div class="social">
<img src="images/linkedin.png">
</div><br><br><br>
</td></tr><td><br>

Subscribe To FET ACA Newsletter<br><br>

<span style="font-family: 'Dosis';font-size:13px; ">Please Provide A Valid Email Address !</span> 

<form style="margin-top: 2%">
<input id="email" name="email" type="email" placeholder="Your e-mail here..">
<input id="subscribe-submit" class="btn" value="Subscribe" type="button" onclick="PostData()" />
<div id="loading_subscribe" style="position:absolute;top:50%; display: inline;padding-left:1%;">
</form>


</td></tr></table>





</td>
<td width="220px" valign="top" style="border-left:1px solid #e6e6e6;">

<span style="font-size:21px;">Meet Us</span><br>

<span style="font-size:14px">Reach Us :<br>
Faculty Of Engineering & Technology<br>
Agra College<br>
Moti Katra Road, Agra<br>
Uttar Pradesh<br>
<br>
Contact Us<br>
0562-2460486	<br>
<br>
Email Us<br>
info@agracollege.org<br>
</span>
</td>
</tr>
</table>
<table width="1000px"  align="center" style="border-top:1px solid #e6e6e6;font-size:14px;" >
<tr><td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Privacy Policy
</td><td>|</td><td>
Disclaimer
</td><td>|</td><td>
Trademark Notice
</td><td>|</td><td>
Powered By: FETACA
</td><td>|</td><td>
&copy; 2014. All Rights Reserved.
</td></tr></table>


</div>
</body>


<style>
body{
margin:0;
background:#e6e6e6;
}

#subscribe-submit {
    padding: 3px 40px 3px 40px;
    margin-left:15px;
    cursor: pointer;
    width: 60px;
    background:#FFF;
    color: #212121;
    font-family: 'Dosis';
    border: 1px solid #C0C0C0;
}
#subscribe-submit:hover {
background:#212121;
color:#FFF;
}
#email {
    border: 1px solid #C0C0C0;
    width: 200px;
    padding: 5px;
    color: #808080;
    height: 2%;
    font-family: 'Dosis';
}

.social{
float:left;
border:1px solid grey;
border-radius:50%;
padding:4px;
margin:5px;
}
.social:hover{
background:#e6e6e6;
cursor:pointer;
}

div#footer{
width:100%;
background:white;
bottom:0;
position:absolute;
height:350px;
font-family:Dosis;
}
td{
color:#454545;
padding:8px;
}
</style>