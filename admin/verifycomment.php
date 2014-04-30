

<html>
<head>
<title>Verify/Reject Comments</title>
</head>

<body>


<div class="main">
<br><br><br><br>
<div class="name">Verify/Reject Comment</div><div class="rest"></div><br>

<style scoped>

.name {
    font: 45px Arial;
    letter-spacing: -1px;
    text-rendering: optimizelegibility;
    color: white;
	
margin-left:4cm;

}
</style>

<?php

session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
header("Location: loginform.php");
}

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="test"; // Database name
$tbl_name="forum_answer"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


$query="SELECT * FROM forum_answertemp ORDER BY a_datetime";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
while ($i < $num) 
{
	$name=mysql_result($result,$i,"a_name");
	$ans=mysql_result($result,$i,"a_answer");
	$d=mysql_result($result,$i,"a_datetime");	
echo "$name<br>$ans&nbsp;&nbsp;&nbsp;<a href='commentok.php?id=$d'>Verify</a> &nbsp;&nbsp;&nbsp;<a href='commentreject.php?id=$d'>Reject</a><br><br>";
$i++;
}

?>

</div>

</body>
<style>
.main{

margin-left:200px;

}

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
<br><br><br><br>
<br>
<br><br><br><br>
<br>
<br><br><br><br>
<br>


<style scoped>
.b{
width:100%;
position:relative;
bottom:0px;
}
</style>

</html>