<?php 
			$username="root";$password="";$database="fetaca";mysql_connect("localhost",$username,$password);
			//$sort="ALTER TABLE `featured-events` ORDER BY `time` DESC ";mysql_query($sort);
			$query="SELECT * FROM featured-events";
			$result=mysql_query($query);
			//$num=mysql_numrows($result);
			mysql_close();
			$i=0;
			while ($i < 1) {
			$title=mysql_result($result,$i,"title");
			//$date=mysql_result($result,$i,"date");
			//$time=mysql_result($result,$i,"time");
			//$place=mysql_result($result,$i,"place");
			/*
$a = explode ("-", $date); 
$m= $a[1];
$d= $a[2];
$od = explode (" ", $d); 
$dd=$od[0];
include('calender.php');
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$dd<br>&nbsp;&nbsp;&nbsp;&nbsp;$m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$subject<a href='newsok.php?id=$Sno'>...Read More...</a><br><hr>";
*/
			
			
			 
			echo"<td style='width:200px;height: 150px;padding-left: 5px;color: #212121;vertical-align: top;line-height: 25px;'>
				<div id='title' style='font-weight: 600;font-size: 16px;'>$title</div>
				<div id='event-date' style='font-weight: 600;font-size: 14px;'>27th April 2014 </div>
				<div id='time' style='font-weight: 600;font-size: 14px;'>6.00pm - 10.00pm </div>
				<div id='place' style='font-weight: 600;font-size: 14px;'><img src='images/gmap.jpg' height='20px;' align='top'> Agra College Ground</div>
				<div id='desc'></div>
			</td>";
			$i++;
			}
			?>
			
	