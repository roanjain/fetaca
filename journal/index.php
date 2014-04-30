<!DOCTYPE html>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$i=$_GET['older'];
if($i==NULL||$i<0) $i=0;
?>
<html lang="en">
    <head>
        <title>Student's Journal</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/stimenu.css" />
          <link rel='stylesheet' type='text/css' href='../css/menu.css' />
<link rel='stylesheet' type='text/css' href='../css/main-menu.css' />
<link rel='stylesheet' type="text/css" href="../css/fetaca.css">
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/fetaca.js" type="text/javascript"></script>
	 </head>
    <body>
		


 <?php 
 include ('../fet-head.php');
 include('../menu.php'); 
 include ('../main-menu.php');  
 //include ('slider.php'); ?> 

<div class="container">
<span style="font-family:Agency FB;font-size:22px;margin-left:200px;">Submit your journal <a href="journalupload.php">Here</a></span>
<ul id='sti-menu' class='sti-menu'>




	<?php 
                include('dbconfig.php');


	  	$result=mysqli_query($con,"SELECT * FROM journaltemp");
		$num=mysqli_num_rows($result);
               $r=20+$i;if($r>$num) $r=$num;		
                while ($i < $r) 
		{
		
              
               mysqli_data_seek($result,$i);
               $row=mysqli_fetch_row($result);
                 
	       $name=$row[0];
	       $email=$row[1];
	       $city=$row[2];
	       $title=$row[8];
	       $date=$row[3];
	       $location=$row[10];
	       $id=$row[11];
        
 if($i%1==0) $color="#ff1975";
 if($i%2==0) $color="#FF9999";
 if($i%3==0) $color="#37c5e9";
 if($i%4==0) $color="#ff395e";
 if($i%5==0) $color="#57e676";
 if($i%6==0) $color="#d869b2";
 if($i%7==0) $color="#ffdd3f";
 if($i%8==0) $color="#ff99cc";
 if($i%9==0) $color="#b280e6";

$time=strtotime($date);
$year=date('y',$time);        
$month=date('M',$time);
$day=date('j',$time);
$title=substr($title,0,40); 

	echo "	<li data-hovercolor=$color style='border-bottom:4px solid $color;'>
					<a href='#'> 
						<h2 data-type='mText' class='sti-item'><img style='border-radius:50%;margin-top:10px;border:4px solid #e5e5e5;width:100px; height:100px;' src=$location >
                                        <br>$title</h2><span style='float:right;padding:5px;color:#c5c5c5;font-family:Segoe UI;font-size:11px;'>$day' $month $year</span>
						<h3 data-type='sText' class='sti-item'>$name</h3>
						<span data-type='icon' class='sti-icon sti-icon-care sti-item'></span>
					</a>
				</li> ";
               

  $i++;

              }
?>




               </ul>
			
		</div>

<div style="clear:both;font-family:Agency FB;font-size:27px;text-align:center;">
<br><br><table align="center"><tr>

<?php 
$x=$i-40;
if($i>20)
echo "<td><a href='index.php?older=$x'><div id='pre'>Newer</div></a></td>";
if($i<$num)
echo "<td><a href='index.php?older=$i'><div id='next'>Older</div></a></td>";
?>


</tr></table>
<style>
div#pre{width:150px;color:white;background:#a51c30;border:10px solid #f3f3f1;padding:5px;border-radius:15px;}
div#pre:hover{box-shadow:inset 1px 1px 3px 50px rgba(0,0,0,0.4);
transition: box-shadow .5s ease-in-out;}
div#next{width:150px;color:white;background:#003300;border:10px solid #f3f3f1;padding:5px;border-radius:15px;}
div#next:hover{
box-shadow:inset 1px 1px 3px 50px rgba(0,0,0,0.4);
transition: box-shadow .5s ease-in-out;

}
</style>
</div><br><br><br><br><br>


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.iconmenu.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#sti-menu').iconmenu({
					animMouseenter	: {
						'mText' : {speed : 400, easing : 'easeOutExpo', delay : 140, dir : -1},
						'sText' : {speed : 400, easing : 'easeOutExpo', delay : 320, dir : -1},
						'icon'  : {speed : 400, easing : 'easeOutExpo', delay : 0, dir : -1}
					},
					animMouseleave	: {
						'mText' : {speed : 400, easing : 'easeInExpo', delay : 140, dir : -1},
						'sText' : {speed : 400, easing : 'easeInExpo', delay : 0, dir : -1},
						'icon'  : {speed : 400, easing : 'easeInExpo', delay : 280, dir : -1}
					}
				});
			});
		</script>
    </body>
</html>