<?php
session_start();

require_once('inc/defaults.php');
require_once('config/general.php');
require_once('config/layout.php');
require_once('config/pages.php');
require_once('config/mobile.php');

require_once('inc/detectdevice.php');

/* TILE INITS */
require_once('inc/init.php');
require_once('inc/tilefunctions.php');

/* FILES*/
$cssFiles = array( /* Add your css files to this array */
	'css/layout.css',
	'css/nav.css',
	'css/tiles.css',
	'themes/'.$theme.'/theme.css',	
);
$jsFiles = array( /* Add your js files to this array */
	'js/functions.js',
	'js/main.js',	
);

/* PLUGIN SYSTEM */
require_once("inc/plugins.php");
foreach(glob("plugins/" . "*") as $folder){
	if(is_dir($folder) && !in_array($folder, $disabledPluginsDesktop)){
		if(file_exists($folder."/plugin.js")){
			$jsPluginsArray[] = $folder."/plugin.js";		
		}
		if(file_exists($folder."/plugin.css")){
			$cssPluginsArray[] = $folder."/plugin.css";		
		}
		if(file_exists($folder."/desktop.js")){
			$jsPluginsArray[] = $folder."/desktop.js";		
		}
		if(file_exists($folder."/desktop.css")){
			$cssPluginsArray[] = $folder."/desktop.css";		
		}
		if(file_exists($folder."/plugin.php")){
			include($folder."/plugin.php");
		}
	}
}

triggerEvent("beforeDoctype");
?>
<!DOCTYPE html>
<?php
triggerEvent("afterDoctype");


if(file_exists('themes/'.$theme.'/theme.js')){
	$jsFiles[] = 'themes/'.$theme.'/theme.js';
}
if(file_exists('themes/'.$theme.'/theme.php')){
	require_once('themes/'.$theme.'/theme.php');
}

triggerEvent("fileInclude");

require_once("inc/compress.php");
require_once("inc/seo.php");
?>
<?php // if(strpos($_SERVER['HTTP_USER_AGENT'],"Version/4.0")!=false&&strpos($_SERVER['HTTP_USER_AGENT'],"Android")!=false&&strpos($_SERVER['HTTP_USER_AGENT'],"AppleWebKit/")!=false){}?>
<html>
<title></title>
<head>



<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="styleslogin.css" type="text/css" />

<script type="text/javascript">
$(document).ready(function(){
	$("#login_a").click(function(){
        $("#shadow").fadeIn("normal");
         $("#login_form").fadeIn("normal");
         $("#user_name").focus();
    });
	$("#cancel_hide").click(function(){
        $("#login_form").fadeOut("normal");
        $("#shadow").fadeOut();
   });
   $("#login").click(function(){
    
        username=$("#user_name").val();
        password=$("#password").val();
         $.ajax({
            type: "POST",
            url: "login.php",
            data: "name="+username+"&pwd="+password,
            success: function(html){
			
			  if(html=='true')
              {
                $("#login_form").fadeOut("normal");
				$("#shadow").fadeOut();
				$("#profile").html("<a href='logout.php' class='red' id='logout'>Logout</a>");
				
              }
              else
              {
                    $("#add_err").html("Wrong username or password");
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html("Loading...")
            }
        });
         return false;
    });
});
</script>



   <script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="styles.css" type="text/css" />

    <script src="jss/jquery.min.js"></script>
	
    <script src="jss/console.js"></script>


	<?php triggerEvent("headStart");?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Description" content="<?php echo $siteMetaDesc;?>"/>
    <meta name="keywords" content="<?php echo $siteMetaKeywords;?>"/>
    <meta name="viewport" content="width=1024,initial-scale=1.00, minimum-scale=1.00">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo $siteTitle;?></title> 
    
    <?php 
	if($bot && $nojsuser){
		echo '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';
	}
	
    /*FONT*/
    if($googleFontURL != ""){?>
    	<link href='<?php echo $googleFontURL?>' rel='stylesheet' type='text/css'>
		<?php
	}

	/*CSS*/
	echo $css;
	include_once("inc/css.php");
	
	/*GA*/
	if($googleAnalyticsCode != ""){
		?><script type='text/javascript'>var _gaq = _gaq || [];_gaq.push(['_setAccount', '<?php echo $googleAnalyticsCode?>']);_gaq.push(['_trackPageview']);(function(){var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script><?php
	}
	?> 
    <!--[if lt IE 9]>
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/html5.js">
	<![endif]-->
	<!--[if gte IE 9]>
    <script src="http://code.jquery.com/jquery-2.0.0b2.js"></script>
    <script src="js/html5.js">
	<![endif]-->
    <!--[if !IE]>
    <script src="http://code.jquery.com/jquery-2.0.0b2.js"></script>
	<![endif]-->

    <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery191.js"><\/script>')</script> 
    <script type="text/javascript" language="javascript" src="js/plugins.js"></script>
	<?php
	/*JS */
	include("inc/phptojs.php");
	if(!$bot){
		echo $js;
	}

    triggerEvent("headEnd");
	?>
    <noscript><style>#tileContainer{display:block}</style></noscript>


</head>


<body bgcolor="#C1D7AE">
<?php
require_once('menu1.php');

?>
<?php
triggerEvent("bodyBegin");

/*BG image*/
if($bgImage!=""){
	echo "<img src='".$bgImage."' id='bgImage'/>";
}
?>




<div id="wrapper">
	<div id="centerWrapper">
  		<?php
		if(!$bot || ($bot && $reqUrl == "")){
		?>
    	<div id="tileContainer" 
			<?php if($bot && $reqUrl==""){
				 echo "style='display:block;'";
			}?>>
            <?php if($groupDirection == "horizontal"){?>
        		<img id='arrowLeft' class="navArrows" src='themes/<?php echo $theme?>/img/primary/arrowLeft.png' onClick="javascript:$group.goLeft();" alt="left arrow"/>
            	<img id='arrowRight' class="navArrows" src='themes/<?php echo $theme?>/img/primary/arrowRight.png' onClick="javascript:$group.goRight();" alt="right arrow"/>
       		<?php 
			}
			include("inc/tilegenfet.php");
			triggerEvent("tileContainerEnd");
			?>
        </div> 
 

<?php
		}
		?>
        <div id="subNavWrapper"></div>
    	<div id="contentWrapper" <?php if($bot && $reqUrl != ""){ echo "style='display:block;'";}?>>   		    
	   		<?php triggerEvent("contentWrapperBegin");?>
            <div id="content">	        	
				<?php
				if($bot){	
					if($page == "" || $page == "home"){					
					}else{
						if(file_exists("pages/".$reqUrl)){	
							include("pages/".$reqUrl);
						}else{		
							echo "<h2 style='margin-top:0px;'>We're sorry :(</h2>the page you're looking for is not found.";
						}
					}		
				}
				?>
	        </div>
    	    <?php triggerEvent("contentWrapperEnd");?>
		</div>
        <?php triggerEvent("centerWrapperEnd");?>
    </div>

<br>

<div class="restt">FET Channel-Teacher's Gateway</div>
 

<div class="rest">Post What You Find Interesting For Your Students !!</div>

<style scoped>

.restt {
    font: 55px/50px Arial,Helvetica,Verdana,sans-serif;
    letter-spacing: -2px;
    text-rendering: optimizelegibility;
    color: white;
	
margin-left:3cm;

}

.rest {
    font: 25px/35px Arial,Helvetica,Verdana,sans-serif;
    letter-spacing: -1px;
    text-rendering: optimizelegibility;
    color: #8B8989;
	
margin-left:3cm;

}

</style>
<br>
<div class="topic">
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#C1D7AE">
<tr>
<form id="form1" name="form1" method="post" action="add_topic.php" enctype="multipart/form-data">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#C1D7AE">
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50" /></td>
</tr>

<tr>
<td><strong>Attachements</strong></td>
<td>:</td>
<td>
<input name="file" type="file" id="file"> 
</td>
</tr>

<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="text" id="email" size="50" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Post" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

</div>

<style scoped>
.topic {
    color: #8B8989;
	
margin-left:3cm;

}

</style>

<br><br><br><br><br>

		<footer>

<?php require_once('footertile.php');
?>
		</footer>


<?php

require_once('bottom.php');

?>


</body>

</html>












