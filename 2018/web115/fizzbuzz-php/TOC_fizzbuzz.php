<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Website">
	<meta name="keywords" content="web">
	<meta name="author" content="Juan Diaz">
	<title>TOC_My_Portfolio | Welcome - Juan Diaz</title>
	<link rel="stylesheet" type="text/css" href="../styles/project.css">
	
	<!-- using Indie Flower google font html-->
	    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Indie+Flower" />
	<!-- social media icon to library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>

  </style>
</head>
<body>
	<header>
		<div class="container">
			<img src="https://www.mecknc.gov/CommunitySupportServices/VeteransServices/PublishingImages/CPCC%20Logo.jpg" alt="CPCC" style="float:right;width:300px;margin-top: 25px">

		<h1>Victoria Rodriguez&reg;</h1>
		</div>
	</header>
	<main>
   <nav id="navbar">
		<div class="container">
			<ul>
				<li class="current"><a href="http://students.cpcc.edu/~jdiaz028/web115/toc.html" title="Table Of Content">TOC</a></li>
        <li class="dropdown">
          <a href="../indexx.html" class="dropbtn">MyProfile</a>
            <div class="dropdown-content">
              <a href="http://students.cpcc.edu/~jdiaz028/00-personal/resumeWeb.html">Resume</a>
              <a href="../contractweb115.html">Contract</a>
				      <a href="../introduction.html">Introduction</a>
				      <a href="../template.html" onclick='alert("My first template!")'>Old Template</a>
				      <a href="../../(d&r)brand/brandweb115.html" onclick='alert("Under construction!")'>Personal Brand Template</a>
 				      <a href="../../web110/3pagesWeb/" onclick='alert("Learn More About Juan Diaz!")'>Developer</a>
            </div>
        </li>
				<li>
					<a href="../onepagejs/brandVR/" onclick='alert("Under construction!")'>My Brand</a>
				</li>				
				<li>
					<a href="TOC_fizzbuzz.php">fizzbuzz Assigments</a>
		  	</li>
				<li>
					<a href="../others.html">About Us</a>
				</li>
		  	<li>
					<a href="../contact.html">Contact Us</a>
		  	</li>
			</ul>
		</div>
  </nav>
		
       <div class="temp">
          <a href = "?p=fizzbuzz0.php">fizzbuzz 0  (Part 1)</a> &amp; 
          <a href = "?p=fizzbuzz0-2.php">(Part 2)</a> || 
          <a href = "?p=fizzbuzz1.php">fizzbuzz 1</a> || 
          <a href = "?p=fizzbuzz2.php">fizzbuzz 2</a> || 
          <a href = "?p=fizzbuzz3.php">fizzbuzz 3</a> || 
          <a href = "?p=fizzbuzz4.php">fizzbuzz 4</a>
       </div><br>
        <!-- CONTENT -->   
    <div class="content"> 

<!-- dynamic content goes here -->

<?php
	$sPage = $_GET["p"];
	//echo ("You picked the page: " . $sPage); 
	
	if($sPage == "") {  $sPage = "fizzbuzz0.php"; }
	include($sPage);
?>



<!--	End dynamic content from other sources		-->


            
            
    </div>
        <!-- END CONTENT -->    
	</main>
	<footer>
		<p>Copyright &copy; 2018 My Website</p>
	<div id="socialmenu">
      	<ul>          
			<li><a href=".." class="fa fa-expeditedssl" target="_blank" title="MyWebspace"></a></li>
			<li><a href="https://github.com/JuanPabloDiaz" class="fa fa-github" target="_blank" title="github"></a></li>
			<li><a href="https://codepen.io/JuanDiaz/#" class="fa fa-codepen" target="_blank" title="codepen"></a></li>
			<li><a href="https://www.khanacademy.org/profile/jdiaz028/" class="fa fa-leaf" target="_blank" title="khanacademy"></a></li>
			<li><a href="https://www.codecademy.com/microWhiz73571" class="fa fa-code" target="_blank" title="codecademy"></a></li>
			<li><a href="https://www.linkedin.com/in/juan-d%C3%ADaz-rodr%C3%ADguez-923181b9/" class="fa fa-linkedin" target="_blank" title="linkedin"></a></li>
			<li><a href="https://www.instagram.com/juanpablodiaz93/" class="fa fa-instagram" target="_blank" title="instagram"></a></li>
			<li><a href="https://www.facebook.com/juan.p.diaz.716" class="fa fa-facebook" target="_blank" title="facebook"></a></li>	
    	 	</ul>
	</div>

	<div id="validate">  
		<a href="http://validator.w3.org/check?uri=referer">
			<img src="http://www.tropicalteachers.com/web110/images/valid_html5.gif" alt="Valid HTML 5" width="90" style="border:0px;" />
		</a>
   	    	<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img src="http://jigsaw.w3.org/css-validator/images/vcss-blue"  alt="Valid CSS!" width="90" style="border:0px;"/>
		</a>
 	</div>
<p style="font-size: 12px">fa & webkit do not have valid css <br></p>
    <p>Designed by Juan D&iacute;az</p></footer>	
</body>
</html>