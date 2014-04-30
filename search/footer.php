			
			<ul>
				<li>
					<p class="home">Home</p>
					<a class="logo" >FET Agra College <i>&copy; 2013</i></a>
				</li>
				<li>
					<p class="services">Quick Links</p>

					<ul>
						<li><a href="http://localhost/V4_lite(fet)/courses.php">Courses</a></li>
						<li><a href="http://localhost/V4_lite(fet)/events.php">Events</a></li>
						<li><a href="http://localhost/V4_lite(fet)/news.php">News</a></li>
						<li><a href="http://localhost/V4_lite(fet)/topstory.php">Top Story</a></li>
					</ul>
				</li>

				<li>
					<p class="reachus">Reach us</p>

					<ul>
						<li><a href="#">Google Plus</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li>555-123456789</li>
					</ul>
				</li>
				<li>
					<p class="clients">Help Yourself</p>

					<ul>
						<li><a href="http://localhost/V4_lite(fet)/search/search.php">Search </a></li>
						<li><a href="http://localhost/V4_lite(fet)/faqs.php">FAQs </a></li>
						<li><a href="http://localhost/V4_lite(fet)/contact/contact.php">Contact Us</a></li>
					</ul>
				</li>
			</ul>

<style scoped>

a, a:visited {
	outline:none;
	color:#389dc1;
}

a:hover{
	text-decoration:none;
}

footer{
	height: 245px;
	color:#ccc;
	font-size:12px;
	width:100%;

	background-color:#31353a;

	background-image:-webkit-linear-gradient(top, #31353a, #2f3337);
	background-image:-moz-linear-gradient(top, #31353a, #2f3337);
	background-image:linear-gradient(top, #31353a, #2f3337);
}

/* Set a width to the outermost UL and center it */

footer > ul{
	width:100%;

	bottom:0;
	padding-top:20px;
	padding-bottom: 60px;
	z-index:-1;
	
}


/* The four columns of links */

footer > ul > li{
	width:25%;
	float:left;
}

footer ul{
	list-style: none;
}

/* The links */

footer > ul > li ul li{
	margin-left:43px;
	text-transform: uppercase;
	font-weight:bold;
	line-height:1.8;
}

footer > ul > li ul li a{
	text-decoration: none !important;
	color:#7d8691 !important;
}

footer > ul > li ul li a:hover{
	color:#ddd !important;
}

/* The company logo */

footer a.logo{
	color: #e4e4e4 !important;
	text-decoration: none !important;
	font-size: 14px;
	font-weight: bold;
	position: relative;
	text-transform: uppercase;
	margin-left: 16px;
	display: inline-block;
	margin-top: 7px;
}

footer a.logo i{
	font-style: normal;
	position: absolute;
	width: 60px;
	display: block;
	left: 48px;
	top: 18px;
	font-size: 12px;
	color: #999;
}

footer a.logo:before{
	content: '';
	display: inline-block;
	background: url('../img/sprite.png') no-repeat -19px -70px;
	width: 48px;
	height: 37px;
	vertical-align: text-top;
}

/* Common styles for the four color bars */

footer a:link {color:#FF0000;}

footer p{
	width: 80%;
	margin-right: 10%;
	padding: 9px 0;
	line-height: 18px;
	background-color: #058cc7;
	font-weight: bold;
	font-size: 14px;
	color:#fff;
	text-transform: uppercase;
	text-shadow: 0 1px rgba(0,0,0,0.1);
	box-shadow: 0 0 3px rgba(0,0,0,0.3);
	margin-bottom: 20px;
	opacity:0.9;
	cursor:default;

	-webkit-transition: opacity 0.4s;
	-moz-transition: opacity 0.4s;
	transition: opacity 0.4s;
}

footer > ul > li:hover p{
	opacity:1;
}

footer p:before{
	content: '';
	display: inline-block;
	background: url('../img/sprite.png') no-repeat;
	width: 16px;
	height: 18px;
	margin: 0 12px 0 15px;
	vertical-align: text-bottom;
}


/*-------------------------
	The different colors
--------------------------*/


footer p.home{
	background-color: #0096d6;

	background-image:-webkit-linear-gradient(top, #0096d6, #008ac6);
	background-image:-moz-linear-gradient(top, #0096d6, #008ac6);
	background-image:linear-gradient(top, #0096d6, #008ac6);
}

footer p.home:before{
	background-position: 0 -110px;
}

footer p.services{
	background-color: #00b274;

	background-image:-webkit-linear-gradient(top, #00b274, #00a46b);
	background-image:-moz-linear-gradient(top, #00b274, #00a46b);
	background-image:linear-gradient(top, #00b274, #00a46b);
}

footer p.services:before{
	background-position: 0 -129px;
}

footer p.reachus{
	background-color: #d75ba2;

	background-image:-webkit-linear-gradient(top, #d75ba2, #c75496);
	background-image:-moz-linear-gradient(top, #d75ba2, #c75496);
	background-image:linear-gradient(top, #d75ba2, #c75496);
}

footer p.reachus:before{
	background-position: 0 -89px;
}

footer p.clients{
	background-color: #e9ac40;

	background-image:-webkit-linear-gradient(top, #e9ac40, #d89f3b);
	background-image:-moz-linear-gradient(top, #e9ac40, #d89f3b);
	background-image:linear-gradient(top, #e9ac40, #d89f3b);
}

footer p.clients:before{
	background-position: 0 -69px;
}

</style>

