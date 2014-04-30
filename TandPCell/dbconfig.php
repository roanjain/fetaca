<?php
$db_username = 'root';
$db_password = '';
$db_name = 'fetaca';
$db_host = 'localhost';
################
$con=mysqli_connect($db_host,$db_username,$db_password,$db_name)or die('could not connect to database');

/*
$i=0;
while($i<50)
{
mysqli_query($con,"INSERT INTO placements (id,name,branch,batch,company)VALUES ($i,'Vikram Tyagi','CSE','2011-2014','Technaitra')");
$i++;
}
*/





?>