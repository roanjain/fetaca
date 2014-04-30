<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FETACA Search</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel='stylesheet' type='text/css' href='../css/menu.css' />
<link rel='stylesheet' type='text/css' href='../css/main-menu.css' />
<link rel='stylesheet' type="text/css" href="../css/fetaca.css">
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/main-menu.js"></script>
<script src="../js/fetaca.js" type="text/javascript"></script>

</head>

<body>
<?php include ('../fet-head.php');
 include('../menu.php'); 
 include ('../main-menu.php');  
 ?> 
<div id="page">

    <h1>Google Powered Site Search</h1>
    
    <form id="searchForm" method="post">
		<fieldset>
        
           	<input id="s" type="text" />
            
            <input type="submit" value="Submit" id="submitButton" />            
            <div id="searchInContainer">
                <input type="radio" name="check" value="site" id="searchSite" checked />
                <label for="searchSite" id="siteNameLabel">Search</label>
                
                <input type="radio" name="check" value="web" id="searchWeb" />
                <label for="searchWeb">Search The Web</label>
			</div>
                        
            <ul class="icons">
                <li class="web" title="Web Search" data-searchType="web">Web</li>
                <li class="images" title="Image Search" data-searchType="images">Images</li>
                <li class="news" title="News Search" data-searchType="news">News</li>
                <li class="videos" title="Video Search" data-searchType="video">Videos</li>
            </ul>
            
        </fieldset>
    </form>

    <div id="resultsDiv"></div>
    
</div>

<!-- It would be great if you leave the link back to the tutorial. Thanks! -->
<p class="credit"><a href="#">Powered by FET &amp; Google</a></p>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="script.js"></script>



</body>
</html>