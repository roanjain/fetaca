<html>
<title>FET News Upload Form</title>
<head>
</head>

<body>

<body >


<div id="ver">

<?php



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
   

if( empty($title) ) 
    { 
        $error = true;
        $message = "News Not Entered...";
    }



    if( $error == true && isset($message) )
    {
        echo $message."<br><br>";
    }
    else
    {
       echo "News Uploaded Successfully";
        

$random=rand(1000000,100000000000);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "fetaca";
$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database,$con) or die("Could not select database");

$save=mysql_query("INSERT INTO news (Sno,subject,date) VALUES ('$random','$title',CURRENT_DATE())");
header('location:admin.php');
 	 
//echo "$name<br>$email<br>$city<br>$number<br>$branch<br>$gender<br>$title<br>$journal<br>$location";							

}

  
?>

</div>


<div id="a">

<center><h1><font color="#333333">News Upload Form</font></h1></center>



  <form name="upload" action="" method="post" enctype="multipart/form-data" >

<div align=center><h2><font color="maroon">Enter News Details:</h2> </div>   
<br>
<h2><font color="#333333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<center>

<input name="title" type="text" id="name" size="80" value="<?=(isset($title) ? $title : "")?>" placeholder="Enter News Here"/>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

<br><br>
    <input name="Submit" type="submit" id="submit"  value="Save and Continue"/><br><br>
 
 </form>
  </div>



<br><br><br>
</center>

</center>



</body>
</html>

<style>
body
{
background-color:#e6e6e6;
}


form1
{
border-style:solid;
border-width:5px;
}
p.two
{
border-style:double;
border-width:medium;
} 

div#a
{

box-shadow: 10px 10px 50px 10px #808080;
width:900px;
margin-left:auto;
margin-right:auto;
}

div#ver
{
box-shadow: 5px 5px 10px 5px maroon;
width:300px;
height:25px;
margin-left:auto;
margin-right:auto;
margin-top:20px;
color:#333333;
text-align:center;
font-size:17px;
}


html{
font-family: 'Segoe UI Light';
}

h1{
	
	font-size:40px;
	font-weight:300;
	margin:20px 0 5px 0;
	color:#FFF;
}
h2{
	font-size:32px;
	font-weight:300;
	margin:20px 0 5px 0;
	color:#333333;
}
h3{
	font-size:24px;
	font-weight:normal;
	margin:0px 0 5px 0;
	color:#EEE;
}
h4{
	font-size:21px;
	font-weight:300;
	margin:15px 0 5px 0;
	color:#DDD;
	text-transform:uppercase;
}
h5{
	font-size:20px;
	font-weight:normal;
	margin:13px 0 5px 0;
	color:#DDD;
}
h6{
	font-size:16px;
	font-weight:normal;
	margin:10px 0 5px 0;
	color:#EEEFF;
	text-transform:none;
}





textarea{
	
	border: 2px solid #DDDDDD;
	padding: 5px;
	
	font-family: Segoe UI, sans-serif;
	background-position: bottom right;
	background-repeat: no-repeat;
box-shadow: 0px 0px 10px 5px #DDDDDD;
}







input[type="text"]{
    
	height:30px;
    padding: 5px;   
    border: 1px solid #DDDDDD;
    
    /*Applying CSS3 gradient*/
    background: -moz-linear-gradient(center top , #FFFFFF,  #EEEEEE 1px, #FFFFFF 20px);    
    background: -webkit-gradient(linear, left top, left 20, from(#FFFFFF), color-stop(5%, #EEEEEE) to(#FFFFFF));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FBFBFB', endColorstr='#FFFFFF');
    
    /*Applying CSS 3radius*/   
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    font-family: Segoe UI, sans-serif;
	font-size:15px;  
  /*Applying CSS3 box shadow*/
    -moz-box-shadow: 0 0 2px #DDDDDD;
    -webkit-box-shadow: 0 0 2px #DDDDDD;
    box-shadow: 0 0 2px #DDDDDD;

}
input[type="text"]:hover
{
    border:1px solid maroon;
}
input[type="text"]:focus
{
    box-shadow:0 0 2px #000000;
}


input[type="submit"]{
    padding: 6px 10px;
    background: maroon;
    color: white;
    font-family: Segoe UI, sans-serif;
	font-size:15px;
}

input[type="submit"]:hover
{
    //border:1px solid black;
box-shadow:0 0 10px #000000;
}


input[type="radio"]
{
    
border:1px solid black;
box-shadow:0 0 4px maroon;

}


input[type="radio"]:hover
{
    //border:1px solid black;
box-shadow:0 0 10px #000000;
}

</style>
