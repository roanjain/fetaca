<?php

session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
header("Location: loginform.php");
}

$a=$_GET['id'];
echo $a;
$con=mysqli_connect('localhost','root','root');


mysqli_select_db($con,'test');
$sql="INSERT INTO forum_answer SELECT * FROM forum_answertemp WHERE a_datetime='$a'";

mysqli_query($con,$sql);

$sqlh="DELETE FROM forum_answertemp WHERE a_datetime='$a'";
if (mysqli_query($con,$sqlh))
  {
  header( "Location: verifycomment.php" );
  }

?>