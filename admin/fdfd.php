
 <?php
    session_start();
    if(isset($_SESSION['usr']) && isset($_SESSION['pswd'])){
    header("Location: admin.php");
    }
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
		<title>FET Secure Access</title>		
		</head>
	<body id="login">
			<div id="wrapper">
					<div id="content">
						
							
                                                <h2>       <img src="fetlogo.jpg" height="100px" width="100px">
						
						
							Administrator Login</h2>
						
					
						<form method="post" action="loginadmin.php">
					
                        	                                                                                       <p>
								<label for="user_name">Username:</label>
								<input name="usr" id="usr" type="text">
							</p>
							<p>
								<label for="user_password">Password:</label>
								<input name="pswd" id="pswd" type="password">
							</p>
							<button type="submit" class="submit" name="Submit">
								<img src="key.png">&nbsp;&nbsp;&nbsp;Login</button>
								
                            				
						
						
					</form></div>
				</div>   

<center>By FET Secure Login . An AICTE Certified Institution</center></body></html>

<style>
body{
font-family:Dosis;
background:#e6e6e6;
}
h2{
font-size:36px;
}
.submit{
width:100px;
background:#212121;
border:2px solid #212121;
color:white;
padding:3px;
}
.submit:hover{
background:white;
color:#212121;
cursor:pointer;
}

div#wrapper{
width:500px;
margin:0 auto;
border:2px solid #757575;
padding:20px;
text-align:center;
background:#fff;
}
</style>