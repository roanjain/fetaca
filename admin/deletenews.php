<?php
session_start();

if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
header("Location: loginform.php");
}

?>

<html>
<head>
<title>Delete News</title>
</head>


<body>

<h1 ><center>FET News</center></h1>
<br>
<div class="news" style="margin-left: 10%; margin-right: 10%">
<br>

<?php

$username="root";$password="root";
$database="fetaca";mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$sort="ALTER TABLE `news` ORDER BY `Sno` DESC ";
mysql_query($sort);

$query="SELECT * FROM news";$result=mysql_query($query);
$num=mysql_numrows($result);mysql_close();
echo "<b>

</b>

<br>";
$i=0;
while ($i < $num) {
$Sno=mysql_result($result,$i,"Sno");
$subject=mysql_result($result,$i,"subject");
$date=mysql_result($result,$i,"date");
$a = explode ("-", $date); 
$m= $a[1];
$d= $a[2];
include('calender.php');
echo "<div style='padding:15px;font-size:15px;'><table><tr><td><div style='padding:2px;background:#e6e6e6;'>$d</div><div style='padding:5px;background:#50a6c2;'>$m</div></td><td>&nbsp;&nbsp;&nbsp;&nbsp;$subject<a href='deletenewsok.php?id=$Sno'>...Delete News...</a><br></td></tr></table></div><hr>";

$i++;
}
?>



<br>
<br>
<br>
<br>


</body>

</div>
<style scoped>


.news{

background:white;
color:#666666;
box-shadow: 3px 3px 5px #888888;
}

a{
color:maroon;
text-decoration:none;
}
</style>

<style scoped>

.o:hover{
opacity: 0.5;
}
</style>
<style>
h1{
	font-size:40px;
	font-weight:300;
	margin:20px 0 5px 0;
	color:#333333;
}
h2{
	font-size:32px;
	font-weight:300;
	margin:20px 0 5px 0;
	color:#EEE;
}
h3{
	font-size:24px;
	font-weight:normal;
	margin:0px 0 5px 0;
	color:#EEE;
}
h4{
	font-size:21px;
	font-weight:300;
	margin:15px 0 5px 0;
	color:#DDD;
	text-transform:uppercase;
}
h5{
	font-size:20px;
	font-weight:normal;
	margin:13px 0 5px 0;
	color:#DDD;
}
h6{
	font-size:16px;
	font-weight:normal;
	margin:10px 0 5px 0;
	color:#EEEFF;
	text-transform:none;
}
html{
font-family:  'Open Sans', Segoe UI Light, Tahoma,Helvetica,sans-serif;
background:#e6e6e6;
}

</style>

<br><br><br><br>
<br>

</html>




