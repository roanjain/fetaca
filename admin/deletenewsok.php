<?php

session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
header("Location: loginform.php");
}

$a=$_GET['id'];

$con=mysqli_connect('localhost','root','root');

$username="root";$password="root";
$database="univ";mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$result = mysql_query("SELECT * FROM news WHERE Sno=$a");
$content=mysql_result($result,0,"content");


$w='download/files/'.$content;
//echo $w;
if(file_exists($w))
unlink($w);


 mysqli_select_db($con,'univ');
$sqll="DELETE FROM news WHERE Sno=$a";

if (mysqli_query($con,$sqll))
  {
  header( "Location: deletenews.php" );
  }
else
  {
  echo "Error in deletion: " . mysqli_error($con);
  }
?>