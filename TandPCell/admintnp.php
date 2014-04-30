<!DOCTYPE html>
<head>
<script type="text/javascript" src="js/jquery-1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<?php

if(isset($_POST['LogIn']))
{
  foreach( $_POST as $key => $value )
    {
        //Set a variable named the same as the input elements name, and with the value
        ${$key} = $value;
    }
   include('dbconfig.php');
	
	$results = mysqli_query($con,"SELECT * FROM logintnp WHERE passcode='$username'");
	$username_exist = mysqli_num_rows($results);
if($username_exist==1)
{
session_start();
$_SESSION['usr']="succeed";

writeMsg();
}

else
header("Location: http://localhost/TandPCell/admintnp.php");
}


function writeMsg()
{
if(isset($_SESSION['usr']))
{

echo "<script> $(document).ready(function(){
 $('.form').hide(500);
});</script>";

echo "<script> $(document).ready(function(){
 $('.noticeup').show(1000);
});</script>";

}
}




?>







<script>
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		
		if(username.length >= 6){
                    $('#LogIn').removeAttr('disabled');
			
			
		}
	});	

});


</script>
<center> 
<script>  function func() { $('#form').hide(500); } </script> 
<div class="form">
<form onsubmit="func()" id="lform" action="" method="POST">

<label for="username">Name :&nbsp;
  <input name="username" type="password" id="username" maxlength="25" size="15" placeholder="First Name" onKeyup="validate()">
  </label>

<br><br>
	<input id="LogIn" name="LogIn" type="Submit"  value="Log In" disabled="disabled"/> 


</form>
</div>
</center>




<div class="noticeup" style="display:none;"><center>
<Upload Notification
<br> Enter Here:
<label for="username">E-mail :
<input name="username" type="email" id="username" maxlength="30" size="29" placeholder="Your E-mail" >
<span id="user-result"></span>
</label>
</center>
</div>
</body>

<style>
body{
font-family:Dosis;

}
</style>
