<!DOCTYPE html>
<head>
<title> Placements </title>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>
<div>
<br>
<span style="font-size:55px;color:white;padding:10px;">Placements</span><span style="font-size:35px;color:white;padding:10px;float:right;">2014</span>
<br><br>
</div>
<?php 
  
              include('dbconfig.php');

		$i=0;
	  	$result=mysqli_query($con,"SELECT * FROM placements ORDER BY id DESC");
		$num=mysqli_num_rows($result);
                while ($i < $num) 
		{
		
              
               mysqli_data_seek($result,$i);
               $row=mysqli_fetch_row($result);   
	       $name=$row[1];
	       $branch=$row[3];
	       $batch=$row[2];
	       $company=$row[4];
	       $package=$row[5];
	       
        
 if($i%1==0) $color="#ffffff";
 if($i%2==0) $color="#FF9999";
 if($i%3==0) $color="#37c5e9";
 if($i%4==0) $color="#ff1975";
 if($i%5==0) $color="#003366";
 if($i%6==0) $color="#d869b2";
 if($i%7==0) $color="#ffdd3f";
 if($i%8==0) $color="#ff99cc";
 if($i%9==0) $color="#b280e6";

 echo "
 	<div class='container' style='border-left:2px solid $color;'>
		<table  width='300px' border=0><tr>
		<td width='100px' style='border-right:1px dashed #757575;text-align:center;'>
		<img style='border-radius:50%;border:2px solid #e6e6e6;color:$color;font-size:40px;' src='a.jpg' width='100px' alt='&nbsp;&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;'>
		</td><td width='160px'>
		<span class='sub'>Name:</span> $name
		<br><span class='sub'>Batch:</span> $batch
		<br><span class='sub'>Branch:</span> $branch
		<br><span class='sub'>Company:</span> $company
		<br><span class='sub'>Package:</span> $package
		</td></table>
	</div>";
$i++;              
}
?>

</body>

<style>
body{
margin:0 auto;
width:1000px;
background:#212121;
font-family:Dosis;
}
.outer{
padding:10px;
}
.container{
float:left;
width:300px;
padding:5px;
margin:10px;
color:white;

font-size:17px;
background:black;

}

.sub{
color:#e2e2e2;
font-size:15px;
padding-left:5px;
}

</style>