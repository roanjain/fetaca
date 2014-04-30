<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="test"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// get data that sent from form

$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];


$datetime=date("d/m/y h:i:s"); //create date time

if (!isset($_FILES['file']['tmp_name'])) {
	echo "No File Selected";


	}

else{
	$file=$_FILES['file']['tmp_name'];
         $file= addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$file_name= addslashes($_FILES['file']['name']);
			
			move_uploaded_file($_FILES["file"]["tmp_name"],"e-facultyfiles/" . $_FILES["file"]["name"]);
			
			$location="e-facultyfiles/" . $_FILES["file"]["name"];
			}
$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime, location)VALUES('$topic', '$detail', '$name', '$email', '$datetime', '$location')";
$result=mysql_query($sql);

if($result){
header('Location: e-faculty.php');

}
else {
echo "ERROR";
}
mysql_close();

?>