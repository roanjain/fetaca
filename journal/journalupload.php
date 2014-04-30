<!DOCTYPE html>
<title>FET Journal Upload Form</title>
<body >
<div id="ver">
<?php
error_reporting(E_ALL ^ E_NOTICE);
if (isset($_POST["Submit"]))
{
    //Run through all objects set in the POST array
    foreach( $_POST as $key => $value )
    {
        //Set a variable named the same as the input elements name, and with the value
        ${$key} = $value;
    }
}

    $error = false;
   

if( empty($journal) ) 
    { 
        $error = true;
        $message = "Journal not Written...";
    }


if( empty($title) ) 
    { 
        $error = true;
        $message = "Title Not Entered...";
    }


if( empty($gender) ) 
    { 
        $error = true;
        $message = "Gender Not Selected...";
    }
if( empty($branch) ) 
    { 
        $error = true;
        $message = "Branch Not Selected...";
    }


if( empty($year) ) 
    { 
        $error = true;
        $message = "Year Not Selected...";
    }

if( empty($city) ) 
    { 
        $error = true;
        $message = "City Not Entered...";
    }


if( empty($email) ) 
    { 
        $error = true;
        $message = "Email Not Entered...";
    }

    
if( empty($name) ) 
    { 
        $error = true;
        $message = "Name Not Entered...";
    }


if( empty($name)&&empty($email)&&empty($city)&&empty($phone)&&empty($gender)&&empty($branch)&&empty($year)&&empty($title)&&empty($journal) ) 
{
$error = true;
        $message = "No Details Entered...";
    }

if($_FILES['image']['type']!="image/jpg"||$_FILES['image']['type']!="image/jpeg"||$_FILES['image']['type']!="image/gif"||$_FILES['image']['type']!="image/png"||$_FILES['image']['type']!="image/pjpeg")
{     
$error=true;
$message="Invalid Image Format..."; 
}
echo $_FILES['image']['type']; 
   if( $error == true && isset($message) )
    {
        echo "<marquee scrollamount='4' width='40'><<<</marquee>&nbsp;&nbsp;".$message."&nbsp;&nbsp;<marquee scrollamount='4' direction='right' width='40'>>>></marquee><br><br>";
    }
    else
    {
       //echo "All Details Submitted Successfully";
        

	$file=$_FILES['image']['tmp_name'];  
        if($file!=NULL)
	{
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photostemp/" . $_FILES["image"]["name"]);
			
			$location="photos/re-" . $_FILES["image"]["name"];
	}
            else { 
               if($gender=="Male")
	$location="photos/re-maledefault.jpg";

        if($gender=="Female")
	$location="photos/re-femaledefault.jpg";
    }

$random=rand(1000000,100000000000);

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "univ";
$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database,$con) or die("Could not select database");

$save=mysql_query("INSERT INTO journaltemp ( name,email,city,date,number,branch,year,gender,title,journal,location,id) VALUES ('$name','$email','$city',CURRENT_DATE(),'$number','$branch','$year','$gender','$title','$journal','$location','$random')");
 	 echo "<script>alert('Your Journal Received! If Verified It will take 24-48 hours to Upload'); location.href='photostemp/index.php';</script>";											
}
?>
</div>

<div id="form">
<h1>Journal Upload Form</h1>
<form name="upload" action="" method="post" enctype="multipart/form-data" >
<h2 style="color:#b5b5b5">Enter Your Details:</h2><br>

<table align="center" style="border:1px dashed #444444;"><tr><td width="400px">

	<h2>
	Name:&nbsp; <input name="name" type="text" id="name" size="24" value="<?=(isset($name) ? $name : "")?>" &nbsp; placeholder="Your name goes here .." />  
	<br>
	E-mail: &nbsp;<input name="email" type="email" id="email" size="24" value="<?=(isset($email) ? $email : "")?>"  placeholder="Enter your email .."/>
	<br><br>
	From:&nbsp;&nbsp;&nbsp; 
    	<input name="city" type="text" id="city" size="24" value="<?=(isset($city) ? $city : "")?>"placeholder="Where are you from? .."/>  
	<br>
	Phone:&nbsp;
    	<input name="number" type="text" id="number" size="24" value="<?=(isset($number) ? $number : "")?>"placeholder="Where to contact you? .."/>
	</h2>
</td>

<td width="400px" style="border-left:1px dashed #444444;padding-bottom:20px;">

	<h2>Branch:</h2><span style="font-size:20px;">
	<input type="radio" name="branch" value="CSE">CSE&nbsp;&nbsp;&nbsp;
	<input type="radio" name="branch" value="ECE">ECE&nbsp;&nbsp;&nbsp;
	<input type="radio" name="branch" value="CE">CE&nbsp;&nbsp;&nbsp;
	<input type="radio" name="branch" value="ME">ME 
</span>
	<h2>Year:</h2>
	<span style="font-size:20px;">
	<input type="radio" name="year" value="1">I<sup>st</sup>&nbsp;&nbsp;&nbsp;
	<input type="radio" name="year" value="2">II<sup>nd</sup>&nbsp;&nbsp;&nbsp;
	<input type="radio" name="year" value="3">III<sup>rd</sup>&nbsp;&nbsp;&nbsp;
	<input type="radio" name="year" value="4">IV<sup>th</sup> 
 </span>

	<h2>Gender:</h2>
	<span style="font-size:20px;">
	<input type="radio" name="gender" value="Male">Male&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" value="Female">Female&nbsp;&nbsp;&nbsp;
	</span>


</td>
</tr></table>
<table align="center" style="border-left:1px dashed #444444;border-right:1px dashed #444444;border-bottom:1px dashed #444444;"><tr><td width="805px">

<h3 style="font-weight:100;margin-bottom:0px;margin-left:50px;">Select your Image:

 <input type="file" name="image" class="ed"></h3>
<span style="font-size:13px;color:#959595;">*Leave Empty if not Available.</span>

<h1 style="color:#b5b5b5">Journal Details:</h1><br>

<span style="font-size:25px;">Title:</span>
<input name="title" type="text" id="name" size="80" value="<?=(isset($title) ? $title : "")?>" placeholder="A Caption for your Journal"/>     

<br><span style="font-size:30px;">Write your Journal here:</span><br> 
    <textarea name="journal" cols="80" rows="12" value="<?=(isset($journal) ? $journal : "")?>" ></textarea>
<br><br>
</td></tr></table>
<br><br>
    <input name="Submit" type="submit" id="submit"  value="Save and Continue"/><br><br>
 
</form>
</div><br><br><br>
</body>
</html>

<style>
html{ font-family: 'Agency FB'; color:#fff;}
body{ background-color:#fafafa; }

div#form{
text-align:center;
background:#212121;
box-shadow:0px 0px 10px 0px #bbbbbb;
width:1000px;
margin-left:auto;
margin-right:auto;
border:1px dashed white;
margin-top:10px;
}

table{
text-align:center;
}

div#ver{
box-shadow: 0px 0px 10px 0px #212121;
width:300px;
height:30px;
margin-left:auto;
margin-right:auto;
margin-top:20px;
color:#212121;
text-align:center;
font-size:19px;
border:2px solid #212121;
}


h1{	
font-size:40px;
font-weight:100;
margin:20px 0 5px 0;
color:#FFF;
}
h2{
font-size:32px;
font-weight:100;
margin:20px 0 5px 0;
color:#fff;
}

textarea{
border: 1px solid #DDDDDD;
padding: 5px;
font-family: Segoe UI, sans-serif;
background:#e5e5e5;
background-repeat: no-repeat;
box-shadow:inset 0px 0px 100px 0px #fff;
}
input[type="text"],input[type="email"]{
height:30px;
margin:10px;
padding: 5px;   
border: 1px solid #DDDDDD;
background: #e5e5e5;
border-radius: 2px;
font-family: Arial, sans-serif;
font-size:15px;  
box-shadow: 0 0 0px #DDDDDD;
}
input[type="text"]:hover, input[type="email"]:hover {
border:1px solid #ffffff;
}
input[type="text"]:focus, input[type="email"]:focus{
box-shadow:0 0 2px 1 #ffffff;background:#757575;color:white;
}
input[type="submit"]{
    padding: 6px 10px;
    background: #212121;
    color: white;
    font-family:Agency FB, sans-serif;
	font-size:21px;
border:1px solid white;
}
input[type="submit"]:hover
{
border:1px solid white;
background:#fff;
color:black;
cursor:pointer;
transition: all .4s ease-in-out;
}
input[type="radio"]{
border:1px solid black;
box-shadow:0 0 2px #fff;
}
input[type="radio"]:hover{
border:10px solid white;
box-shadow:0 0 4px #fff;
}
input[type="radio"]:focus{
border:10px solid white;
box-shadow:0 0 10px #fff;
}

</style>
