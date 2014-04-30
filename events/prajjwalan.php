<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/custom-prajj.css" />
				<link rel='stylesheet' type='text/css' href='../css/menu.css' />
<link rel='stylesheet' type='text/css' href='../css/main-menu.css' />
<link rel='stylesheet' type="text/css" href="../css/fetaca.css">
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/fetaca.js" type="text/javascript"></script>

		<noscript>
			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
		</noscript>
    </head>
    <body>
   <?php 
 include ('../fet-head.php');
 include('../menu.php'); 
 include ('../main-menu.php');  
 //include ('slider.php'); ?> 

       <div class="sliderslit">
        <div class="container demo-2">
		
			
            
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
							<h2>De saltationibus stellis.</h2>
							<blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
							<h2>Magica vocem.</h2>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
							<h2>Cuius LIBELLUS.</h2>
							<blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-4"></div>
							<h2>Aggerem viatores.</h2>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-5"></div>
							<h2>hic estde comicis.</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

			
        </div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
		</div>
	






<div class="content">
<br><br>
<span style="font-size:60px;color:white;float:left;">Prajjwalan</span><br><br> is the annual science and technology festival of Faculty of Engineering and Technology, Agra College. It also refers to the independent body of students who organize this event along with many other social initiatives and outreach programs round the year. Started in 1999 with the aim of providing a platform for the student community to develop and showcase their technical prowess.

The activities culminate in a grand three day festival event in the month of March within the campus of Faculty of Engineering and Technology.

There are numbers of events held under this festival such as 
<br><br><table style="color:#cccccc;border:1px dashed #454545;padding:20px;background:#313131;" width="1000px"><tr><td width="333px">
+Robo-War
<br>+Bridge the Gap
<br>+Robo-Race
<br>+Short-Circuit
<br>+The Code Test
</td>
<td width="333px">
+Aqua Rotatory
<br>+On the Spot
<br>+Counter Strike
<br>+Robo Soccer
<br>+Treasure Hunt
</td>
<td width="333px">
+Technical Quiz
<br>+Group Discussions
<br>+Fire Fighter
<br><br>
and many more...

</td>

</tr></table>
<br><br><br>

Now sit on your seat and enjoy the Prajjwalan <b>LIVE</b>
<br><br><br><br><br>
</div>
<style>
body{font-family:Dosis;
letter-spacing:1px;
background:#212121;
font-weight:100;
}
.content{
width:1020px;
color:#999999;
font-size:25px;
margin:0 auto;
padding:10px;
text-align:justify;
clear:both;
}

}
</style>
</body>
</html>