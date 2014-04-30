<!DOCTYPE html>
<html class="no-js">
<head>
<title> Faculty Of Engineering & Technology, Agra College - Official Website </title>

<link rel="stylesheet" type="text/css" href="css/fet-broadcast.css" />
<link rel='stylesheet' type='text/css' href='css/menu.css' />
<link rel='stylesheet' type='text/css' href='css/main-menu.css' />
<link rel='stylesheet' type="text/css" href="css/fetaca.css">
<link rel='stylesheet' type="text/css" href="css/about.css">
<link rel='stylesheet' type="text/css" href="css/slider.css">
<link rel='stylesheet' type="text/css" href="css/footernews.css">
<link rel="icon" type="image/ico" href="images/feticon.ico">
<?php // <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'> ?>
<script type="text/javascript" src="js/main-menu.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.slider.min.js" type="text/javascript"></script>
<script src="js/fetaca.js" type="text/javascript"></script>
<script src="js/about.js" type="text/javascript"></script>

</head>
<body onfcontextmenu="return false">


<?php 
 include ('fet-head.php');
 include('menu.php'); 
 include ('main-menu.php');  ?> 

<div class="main-container" style="width: 100%;height: 100%;">
<center>
<div class="container" style="width: 1000px;background: #ffffff;height:650px;border-right: 1px solid silver;border-left: 1px solid silver;">
<table style="width: 100%;height: 100%;">
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
<img src="ef2.jpg" width="27">&nbsp;&nbsp;&nbsp;<a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a>

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

<br>
<font color='grey'>
<span style='font-size:14px;'>Views : &nbsp;<?php echo $rows['view']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style='font-size:14px;'>Replies : &nbsp; <?php echo $rows['reply']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style='font-size:14px;'>Date Posted : &nbsp;<?php echo $rows['datetime']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<hr>

</font>

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

<?php
// Exit looping and close connection
}
mysql_close();
?>
</table>
</div>
</center>
</div>

<?php include 'footer-all.php'; ?>
<?php include 'developers.php'; ?>

<!--[if gte IE 8]>
	<link type="text/css" rel="stylesheet" href="css/ie.css" />
<![endif]-->

</body>
</html>
