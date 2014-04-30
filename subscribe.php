<?php sleep(1);

include 'config.php';


$email = trim($_POST["email"]);
  
  
  if($save=mysql_query("INSERT INTO newsletter (email) VALUES ('$email')")){
echo "subscribed";

  }
  else
  	{
  		echo "no";
  	}
?>