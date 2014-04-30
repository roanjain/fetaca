<?php

$id=rand(1000000,100000000000);

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "fetaca";
$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database,$con) or die("Could not select database");
$i=0;

while($i<60){

$name="$i"."abcde okljm";

$city="Agra";

$email=$i."vikramtyg@gmail.com"+$i;

$number=rand(1000000000,9999999999);

$branch="CSE";

$year=1;

if($i%2==0){

$gender="Male";
$location="photos/re-maledefault.jpg";}
else{
$gender="Female";
$location="photos/re-femaledefault.jpg";
}
$title="Artificial Intelligence part ".$i;
$journal="gggggg";
$id=rand(1000000,100000000000);
$save=mysql_query("INSERT INTO journaltemp ( name,email,city,date,number,branch,year,gender,title,journal,location,id) VALUES ('$name','$email','$city',CURRENT_DATE(),'$number','$branch','$year','$gender','$title','$journal','$location','$id')");
 	 			
$i++;
}
?> 