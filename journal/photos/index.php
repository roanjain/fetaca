
<?php
$dir = getcwd();

$a = scandir($dir);

$r=count($a);
$i=0;
include("resize-class.php");
while($i<$r)
{
	
  $d=$a[$i];
  $arr=explode(".",$d);
   $v=$arr[1];
    $arrr=explode("-",$d);
    $z=$arrr[0];


	

if($v=='jpg'||$v=='gif'||$v=='png'||$v=='JPG'||$v=='GIF'||$v=='PNG'){
           if($z!='re')
         {
	

	   $resizeObj = new resize($d);



	   $resizeObj -> resizeImage(200, 200, 'crop');


	   $re='re-'.$d;
	
	
	    $resizeObj -> saveImage($re, 90);


		
		if($d!='resize-class.php'&&$d!='index.php')
		
$newloc="C:/wamp/www/V4_lite(fet)/config/".$re;
$oldloc="C:/wamp/www/V4_lite(fet)/photos/".$re;

copy($oldloc,$newloc);
unlink($d);unlink($re);
	  }

}

$i++;
}
?>
