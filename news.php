<!DOCTYPE html>
<html class="no-js">
<head>
<title> Faculty Of Engineering & Technology, Agra College - Official Website </title>


<link rel='stylesheet' type='text/css' href='css/menu.css' />
<link rel='stylesheet' type='text/css' href='css/main-menu.css' />
<link rel='stylesheet' type="text/css" href="css/fetaca.css">
<link rel='stylesheet' type="text/css" href="css/slider.css">
<link rel='stylesheet' type="text/css" href="css/footernews.css">
<link rel="icon" type="image/ico" href="images/feticon.ico">
<?php // <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'> ?>
<script type="text/javascript" src="js/main-menu.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.slider.min.js" type="text/javascript"></script>
<script src="js/fetaca.js" type="text/javascript"></script>


</head>
<body onfcontextmenu="return false">

<?php 
 include ('fet-head.php');
 include('menu.php'); 
 include ('main-menu.php');  ?> 

<div class="main-container" style="width: 100%;height: 100%;">



<div class="container" style="width: 80%;background: #ffffff;height: 100%;margin-left: 10%;margin-right: 10%;border-right: 1px solid silver;border-left: 1px solid silver;">
<?php

$username="root";$password="";
$database="fetaca";mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$sort="ALTER TABLE `news` ORDER BY `Sno` DESC ";
mysql_query($sort);

$query="SELECT * FROM news";$result=mysql_query($query);
$num=mysql_numrows($result);mysql_close();
echo "<b>

</b>
<br>
<br>";
$i=0;
while ($i < $num) {
$Sno=mysql_result($result,$i,"Sno");
$subject=mysql_result($result,$i,"subject");
//$content=mysql_result($result,$i,"content");
$date=mysql_result($result,$i,"date");
$a = explode ("-", $date); 
$m= $a[1];
$d= $a[2];
$od = explode (" ", $d); 
$dd=$od[0];
include('calender.php');
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$dd<br>&nbsp;&nbsp;&nbsp;&nbsp;$m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$subject<a href='newsok.php?id=$Sno'>...Read More...</a><br><hr>";
echo "<div style='padding:15px;font-size:15px;font-family:Dosis;'><table><tr><td style='border:1px solid #212121' ><div style='padding:2px;background:#e6e6e6;text-align:center;'>$d</div><div style='padding:5px;background:#a51c30;color:#ffffff;'>$m</div></td><td>&nbsp;&nbsp;&nbsp;&nbsp;$subject<a style='color:crimson;text-decoration:none;' href='#'>&nbsp;&nbsp;&nbsp;Read More...</a><br></td></tr></table></div><hr>";

$i++;
}
?>


</div>

</div>
<?php include 'footer-all.php'; ?>
<?php include 'developers.php'; ?>

<!--[if gte IE 8]>
	<link type="text/css" rel="stylesheet" href="css/ie.css" />
<![endif]-->

</body>
</html>
