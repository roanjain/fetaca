<?php

session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
header("Location: loginform.php");
}
?>
<!DOCTYPE html>
<html>
<title>Delete Post</title>
<head>



    
</head>


<body bgcolor="#e6e6e6">



<br>
<br>
<div class="restt">Fet e-Faculty</div>
<div class="rest">See What's Interesting For You !!
</div>
<br>

<style scoped>


@charset "utf-8";
/* CSS Document */
.green {
	background-color:#F2F2F2;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	color:grey;
	border-radius:1px;
	
	font-family:arial;
	font-size:13px;
	padding:4px 14px;
	text-decoration:none;
	margin-left:3cm;
}.green:hover {
	background-color:#e6e6e6;
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
    color: white;
	
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
$password="root"; // Mysql password
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
<a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a>

&nbsp;-&nbsp;<?php echo  $rows['name'] ."&nbsp;&nbsp;<a href='deleteefpostok.php?id=$rows[id]'>Delete Post</a>" ;?>


<style scoped>


    
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
<font color='black'>
<span style='font-size:14px;'>Views : &nbsp;<?php echo $rows['view']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style='font-size:14px;'>Replies : &nbsp; <?php echo $rows['reply']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style='font-size:14px;'>Date Posted : &nbsp;<?php echo $rows['datetime']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<br><br>
</font>
</div>



<?php
// Exit looping and close connection
}
mysql_close();
?>
<br><br><br><br>


</div> 


</body>

</html>


<style>
body{
font-family:Dosis;
}
a{
text-decoration:none;
color:maroon;
</style>