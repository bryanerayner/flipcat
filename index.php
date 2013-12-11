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
 <script type="text/javascript" src="//use.typekit.net/tqh3zfz.js"></script>
 <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 <link type="text/css" rel="stylesheet" href="fonts/typography.css">

  <link rel="stylesheet" href="css/col.css" media="all">
  <link rel="stylesheet" href="css/2cols.css" media="all">
  <link rel="stylesheet" href="css/3cols.css" media="all">
  <link rel="stylesheet" href="css/4cols.css" media="all">
  <link rel="stylesheet" href="css/5cols.css" media="all">
  <link rel="stylesheet" href="css/6cols.css" media="all">
  <link rel="stylesheet" href="css/7cols.css" media="all">
  <link rel="stylesheet" href="css/8cols.css" media="all">
  <link rel="stylesheet" href="css/9cols.css" media="all">
  <link rel="stylesheet" href="css/10cols.css" media="all">
  <link rel="stylesheet" href="css/11cols.css" media="all">
  <link rel="stylesheet" href="css/12cols.css" media="all">
  <link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="/css/1024.css">
  <link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="/css/768.css">
  <link rel="stylesheet" media="only screen and (max-width: 480px)" href="/css/480.css">

  <script src="js/modernizr-2.5.3-min.js"></script>

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
      <a href="./">
  			<img src="images/logo.png" border="0" alt="FlipCat" class="responsiveImage"/>
      </a>
		</div>
        <?php include "navigation.php"; ?>
  </div>
  <div id="body">
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
