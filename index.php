<?php
error_reporting(0);
if(isset($_GET["page"]) && ($_GET["page"]!="about" && $_GET["page"]!="what-we-do" && $_GET["page"]!="the-team" && $_GET["page"]!="jobs" &&
$_GET["page"]!="services" && $_GET["page"]!="video" && $_GET["page"]!="web-design" && $_GET["page"]!="visual-identity" &&
$_GET["page"]!="portfolio" && $_GET["page"]!="clients" && $_GET["page"]!="blog" && $_GET["page"]!="contact")){
	header("Location: /flipcat/$_GET[page]");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>FlipCat Studio Web Site</title>
<link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>
 <link type="text/css" rel="stylesheet" href="css/style.css">
 <script src="js/jquery-1.10.2.min.js"></script>
 <script src="js/slider.js"></script>
 <script src="js/team.js"></script>
</head>

<body>
<div id="wrapper">
  <div id="header">
    	<div id="logo">
			<img src="images/logo.png" border="0" alt="FlipCat" class="responsiveImage"/>
		</div>
        <?php include "navigation.php"; ?>
  </div>
  <div id="body">
    	<div id="slider">
        	<div id="sliderLeft">
                <div id="slider1" class="titleOff">Dog Show<br />Coming January 2014<div id="slider1Arrow" class="titleNoArrow"></div></div>
                <div id="slider2" class="titleOff">Depression Exposed<br />Coming January 2014<div id="slider2Arrow" class="titleNoArrow"></div></div>
                <div id="slider3" class="titleOff">Flower Artists<br />Coming January 2014<div id="slider3Arrow" class="titleNoArrow"></div></div>
                <div id="slider4" class="titleOn">STUNT MAN<br />Coming April 2014<div id="slider4Arrow" class="titleArrow"></div></div>
                <div id="slider5" class="titleOff">FlipCat<br />Coming January 2014<div id="slider5Arrow" class="titleNoArrow"></div></div>
            </div>
            <p>&nbsp;</p>
            <div id="sliderRight"></div>
        </div>
		<div id="indexCols">
          <?php include "content.php"; ?>
       </div>
  </div>
  <div id="footer">
  	<div id="copyright">
    	(c) FlipCat Studios. All Rights Reserved.
    </div>
  </div>
</div>
</body>
</html>