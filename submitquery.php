<?php sleep(1);

include 'config.php';


$youremail = trim($_POST["youremail"]);
$yourname = trim($_POST["yourname"]);
//$select = trim($_POST["select"]);
  
  
  if($save=mysql_query("INSERT INTO submit-query (name,email) VALUES ('$yourname','$youremail')")){
echo "Submitted";

  }
  else
  	{
  		echo "no";
  	}
?>