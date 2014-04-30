<?php

session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
header("Location: loginform.php");
}

$a=$_GET['id'];

$con=mysqli_connect('localhost','root','root');

$username="root";$password="root";
$database="test";mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$result = mysql_query("SELECT * FROM forum_question WHERE id=$a");
$content=mysql_result($result,0,"location");



if(file_exists($content))
unlink($content);


 mysqli_select_db($con,'test');
$sqll="DELETE FROM forum_question WHERE id=$a";

if (mysqli_query($con,$sqll))
  {
  header( "Location: deleteefpost.php" );
  }
else
  {
  echo "Error in deletion: " . mysqli_error($con);
  }
?>