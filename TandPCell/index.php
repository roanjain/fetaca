<!DOCTYPE html>
<head>
<title> Training and Placement Cell Faculty Of Engineering & Technology, Agra College - Official Website </title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel='stylesheet' type='text/css' href='../css/menu.css' />
<link rel='stylesheet' type='text/css' href='../css/main-menu.css' />
<link rel='stylesheet' type="text/css" href="../css/fetaca.css">
<script src="../js/fetaca.js" type="text/javascript"></script>

<noscript>
			<style>
				.st-accordion ul li{
					height:auto;
				}
				.st-accordion ul li > a span{
					visibility:hidden;
				}
			</style>
		</noscript>


</head>
	   <?php 
 include ('../fet-head.php');
 include('../menu.php'); 
 include ('../main-menu.php');  
 //include ('slider.php'); ?> 

<body>
<div class="wrappertp">
<table><tr><td width="200px">
<img src="images/fetlogo.jpg" width="90px" height="90px"></td>
<td><span style="font-size:55px;color:#212121;">Training and Placement Cell</span>
 <br><center><span style="font-size:25px;color:#212121;">Faculty of Engineering and Technology, Agra College</span></center>
</td></tr></table>
<hr>


<table>
<tr valign="top"><td>

<table>
<tr><td><div class="head" id="img1">Home</div></td></tr>
<tr><td><div class="head" id="img2">Department</div></td></tr>
<tr><td><div class="head" id="img3">Placements</div></td></tr>
<tr><td><div class="head" id="img4">Training</div></td></tr>
<tr><td><div class="head" id="img5">Notifications</div></td></tr>
<tr><td><div class="head" id="img6">Contact US</div></td></tr>
<?php /* <tr><td><div id="form" style="cursor:pointer;
width:130px;
height:25px;
background:#212121;
margin:10px 0 0 10px;
padding:8px;
color:white;
font-family:Segoe UI Light;
font-size:18px;">TPO LogIn</div></td></tr> */?>
</table>

</td>
<td valign="top">
<div class="interior" id="div1"><img src="images/url copy.jpg" width="750"><br><br><p>The placement and training cell functions under the supervision of a full time placement officer and operates all around the year to arrange campus interviews by the companies.It plays a very crucial role in counseling and guiding the students for their successful placement.<br> Placement and training cell of our Institute functions with the main objective of shaping the students to be readily deployable by industry. Apart from the regular curriculum, we aim to fill the gaps between the industry's expectations and the individual's caliber by devising Value added programs, Placement Workshops, Soft skills Training, personality Development programs etc.<br>This cell also strives hard to serve students community by maintaining industry-institute relationship so as to identify the industry needs and expectations and to train the students accordingly. One-to-one career exploration and Career development counseling is available to all the students from this cell that acts dynamically and flexible to improve the knowledge and skills of the students in order to make them suitable for the placement. Many reputed organizations have visited our Institute providing opportunity for our students. </div>
<div class="interior" id="div2">


<center>
<b><i>Training & Placement Officer</i></b>
<br>
<span style="font-size:30px;">Mr. Aishwarya Saxena</span>
</center><br><br>
<table style="text-align:center;"><tr><td width="400px" valign="top">
<b><i> Coordinator</b></i>	
<br><br>
<span style="font-size:30px;">Mr. Uddhav Dwiwedi</span>
</td><td width="400px" style="border-left:1px dashed #bbbbbb">
	
<b><i>Members</b></i>
<br><br><span style="font-size:26px;">
Rahul Jain
<br>
Deepak Pathak
<br>
Virendra Singh
<br>
Amit Kumar
<br>
Meenakshi Singh</span>
</td></tr></table>


</div>
<div class="interior" id="div3"><?php include('placement.php'); ?></div>
<div class="interior" id="div4">


   - FETACA requires students to complete mandatory 4 Weeks / 6 Weeks of industrial training after 3rd year. Students can be assigned companies for the same either through the Training and Placement Cell or the respective department faculty coordinators.
<br><br>
   - Interested companies, for the same, contact professor-in-charge or placement officer, Training and Placement Cell.
<br><br>
   - Once all the required details is received, the same is uploaded on the T&P website for the eligible students to view and apply.
<br><br>
   - After the application deadline for the students, the procedure is carried out as per the suitability of both company and Training and Placement Cell.
<br><br>
   - Companies may shortlist candidates on basis of their resumes or may conduct a written test, dates for which are allotted by the Placement Cell.
<br><br>
   - Selected candidates are notified through the online system on the same day.
 <br><br>
   - Self arranged training by students are allowed only after the completion of first batch run. However, the same has to be approved by the respective department faculty coordinator.
</div>

<div class="interior" id="div5"><span style="font-size:30px;">T&P News:</span>


</div>
<div class="interior" id="div6"><center> <span style="font-size:30px;">	
Training & Placement Officer
<br><br>
Mr. Aishwarya Saxena
<br>
Mobile no: +91 7895551743
<br>
E-mail ID: tpo@fetagracollege.in</span></div>
</center>

</td></tr>
</table>
<br><br>

</div>
</body>


<script>

$("#img1").on('click', function() {
   $(".interior").hide(500);  
   $("#div1").show(500);  
   $('.head').removeClass('border');
   $('#img1').addClass('border');
});

$("#img2").on('click', function() {
   $(".interior").hide(500);
   $("#div2").show(500);
   $('.head').removeClass('border');
   $('#img2').addClass('border');
});

$("#img3").on('click', function() {
   $(".interior").hide(500);   
   $("#div3").show(500);
   $('.head').removeClass('border');
   $('#img3').addClass('border');
});

$("#img4").on('click', function() {
   $(".interior").hide(500);
   $("#div4").show(500);
   $('.head').removeClass('border');
   $('#img4').addClass('border');
});

$("#img5").on('click', function() {
   $(".interior").hide(500);
   $("#div5").show(500);
   $('.head').removeClass('border');
   $('#img5').addClass('border');
});

$("#img6").on('click', function() {
   $(".interior").hide(500);
   $("#div6").show(500);
   $('.head').removeClass('border');
   $('#img6').addClass('border');
});


$("#close").click(function(){
    $("#login").hide(500);
});


$(document).ready(function(){
});
</script>

<style>
html {
   overflow-y: scroll;
   height: 101%
}
body{ 
margin:0;
width:100%;
margin-left:auto;
margin-right:auto;
font-family:'Dosis';
font-weight:100;
background:#fff;
}
.wrappertp{
	width:1000px;
	margin:0 auto;
}

.border{
border-right:5px solid #4f0e17;
}


div.interior{
	
    float:left;
    display:block;
    width:750px;
    margin:10px;
    background:#f3f3f1;
    color:#414141;
    font-size:22px;
    padding:30px;border-left:3px solid #dddddd;
    letter-spacing:1px;
}

div.head{
cursor:pointer;
width:130px;
height:40px;
background:#A51C30;
margin:10px 0 0 10px;
padding:8px;
color:white;
font-family:'Dosis';
font-size:22px;
}

.header{
cursor:pointer;
width:130px;
height:40px;
background:#fff;
margin:10px 0 0 10px;
padding:8px;
color:#A51c30;
font-family:Segoe UI Light;
font-size:22px;
}



br {clear:both;}
</style>

</html>