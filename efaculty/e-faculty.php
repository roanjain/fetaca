<html>
<title></title>
<head>



<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#login_a").click(function(){
        $("#shadow").fadeIn("normal");
         $("#login_form").fadeIn("normal");
         $("#user_name").focus();
    });
	$("#cancel_hide").click(function(){
        $("#login_form").fadeOut("normal");
        $("#shadow").fadeOut();
   });
   $("#login").click(function(){
    
        username=$("#user_name").val();
        password=$("#password").val();
         $.ajax({
            type: "POST",
            url: "login.php",
            data: "name="+username+"&pwd="+password,
            success: function(html){
			
			  if(html=='true')
              {
                $("#login_form").fadeOut("normal");
				$("#shadow").fadeOut();
				

			window.location="http://localhost/V4_lite(fet)/create_topic.php";
			
				
              }
              else
              {
                    $("#add_err").html("Wrong username or password");
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html("<img src='loading.gif'>")
            }
        });
         return false;
    });
});
</script>



</head>


<body bgcolor="#ffffff">
<br><br><br>
<div class="restt">Fet e-Faculty</div>
<div class="rest">See What's Interesting For You !!
</div>
<br>
	<div id="profile">

    	<?php if(isset($_SESSION['user_name'])){
			?>
			<a href='logout.php' id='logout' class="red" >Logout</a>
		<?php }else {?>
		<a id="login_a" href="javascript:void(0);" class="green">Teacher's Login</a>
        <?php } ?>
	</div>


    <div id="login_form">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="cross.jpg" width="15" height="15" id="cancel_hide"></a>
<br>
<br>			
        <div class="err" id="add_err"></div>
    	<form action="login.php">
			<label>Name(Id):</label>
			<input type="text" id="user_name" name="user_name" />
			<label>Password:</label>
			<input type="password" id="password" name="password" />
			<label></label><br/>
			<input type="submit" id="login" class="enter" value="Enter" />
				

</form>
    </div>
	<div id="shadow" class="popup"></div>

<style scoped>


@charset "utf-8";
/* CSS Document */
.popup
{
   position: fixed;
   width: 100%;
   opacity: .7;
   top:0px;
   min-height:400px;
   height:100%;
   z-index: 100;
   background:black;
   font-size: 25px;
   text-align: center;
   display:none;
   
}
#login_form
{
	position:absolute;
	width:250px;
	top:100px;
	left:37%;
	background-color:#F2F2F2;
	padding:25px;
	display:none;
	border-radius:1px;
	z-index:101;
}
.green {
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	
	color:white;
	border-radius:1px;
	background-color:grey;
	
	font-family:arial;
	font-size:13px;
	padding:4px 14px;
	text-decoration:none;
	margin-left:3cm;
}.green:hover {
	background-color:#F2F2F2;
color:grey;
	
}.green:active {
	position:relative;
	top:1px;
}



.red {
	background-color:#F2F2F2;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:1px;
	color:grey;
	font-family:arial;
	font-size:13px;
	padding:4px 14px;
	text-decoration:none;
	margin-left:3cm;
}.red:hover {
	background-color:#F2F2F2;
}.red:active {
	position:relative;
	top:1px;
}

.enter {
	background-color:#F2F2F2;
	color:grey;
	border-radius:1px;
	font-family:Helvetica;
	font-size:13px;
	text-decoration:none;
	margin-left:2.5cm;
}.enter:hover {
	background-color:#e6e6e6;
}




.restt {
    font: 55px/56px Arial,Helvetica,Verdana,sans-serif;
    letter-spacing: -2px;
    text-rendering: optimizelegibility;
    color: #8B8989;
	
margin-left:3cm;

}

.rest {
    font: 30px/35px Arial,Helvetica,Verdana,sans-serif;
    letter-spacing: -1px;
    text-rendering: optimizelegibility;
    color: #8B8989;
	
margin-left:3cm;

}

</style>
<br>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysql_query($sql);
?>

<?php

 
// Start looping table row
while($rows=mysql_fetch_array($result)){

?>

<div align="left" class="name">
<img src="stu.jpg" width="27">&nbsp;&nbsp;&nbsp;<a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a>

&nbsp;-&nbsp;<?php echo $rows['name']; ?> <div class="d" style="float:right;">


<?php $loc=$rows['location']; ?>

<?php if (empty($loc)) {
    ?><div class="attachementt">No Attachment</div><?php
}

else {

$filename=explode("/",$loc);
$file=$filename[1];
  ?>


<?php

 echo "<a href='download1.php?file=$loc'>Download</a>";

?>

<?php } ?>



</div>





<style scoped>

.attachementt{
	font-family:Helvetica;
	font-size:11px;
color:#212121;

	
}

.d{
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	width:60px;
	color:white;
	border-radius:1px;
	margin-right:10%;
	font-family:arial;
	font-size:13px;
	padding:4px 14px;
	text-decoration:none;
	margin-left:3cm;
	background-color:#F2F2F2;
color:grey;
	
}.d:hover {
background-color:grey;
	color:white;
		
}
.d a{
text-decoration:none;
}
    
.name {

a:link {color:black;}

	font-family: Helvetica;
	font-size:23px;
    letter-spacing: 0px;
    text-rendering: optimizelegibility;
    color: #797975;
   text-transform:capitalize;
	
margin-left:3cm;

}


</style>

<br>
<font color='grey'>
<span style='font-size:14px;'>Views : &nbsp;<?php echo $rows['view']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style='font-size:14px;'>Replies : &nbsp; <?php echo $rows['reply']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style='font-size:14px;'>Date Posted : &nbsp;<?php echo $rows['datetime']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<hr>

</font>

</div>


<?php
// Exit looping and close connection
}
mysql_close();
?>
<br><br><br><br>



</body>

</html>


