<?php
require_once '../net/sfws/home/Portfolio.php';

// initializations
$portfolio = new Portfolio("../data/portfolio.xml");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>SF Web Solution | San Francisco, CA | Premium Class Software solutions, Web design and Applications</title>
	<meta name="description" content="SF Web Solution, First Class, San Francisco, Web design, Software and Application engeneering" />
	<meta name="keywords" content="sf web solution, sfws, web design, software engineering, applications, gui, php, java, tomcat, apache, wsdl, xml, javascript, jquery, mysql, oracle, c, c#, c++"/>
	<meta name="robots" content="index, nofollow">
	<!-- Icon -->
	<link rel="icon" type="image/x-icon" href="../utils/images/favicon.ico" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../utils/bootstrap/css/bootstrap.min.css" type="text/css">
	<!-- IE10-Viewport Fix -->	
	<link rel="stylesheet" href="../utils/styles/ie10-viewport-fix.css" type="text/css">
	<!-- Company -->	
	<link rel="stylesheet" href="../utils/styles/global.css" type="text/css">
</head>

<body>
	<div class="page-wrapper pageBackground pageBorder">
		<div id="pageTop" class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<img align="top" alt="SF Web Solution - Header" src="../utils/images/sfbackground-1500x369.jpg" border="0" width="100%">
				</div>
			</div>
	
			<nav class="navbar navbar-default" style="margin-top: 20px;">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header" style="margin: 0px;">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-sfsw" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img alt="SF Web Solution - Logo" src="../utils/images/sfwebsolution_logo-1200x120.png" width ="242" height="20">						
						</a>
					</div>
				
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-sfsw">
						<ul class="nav navbar-nav navbar-left">
							<li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="portfolio.php">General</a></li>
									<li role="separator" class="divider"></li>
									<?php if ($portfolio->hasPortfolioOfCategory("WEB")) { ?>
										<li><a href="portfolio.php#web">Web</a></li>
									<?php } ?>
									<?php if ($portfolio->hasPortfolioOfCategory("GUI")) { ?>
										<li><a href="portfolio.php#application">Application</a></li>
									<?php } ?>
									<?php if ($portfolio->hasPortfolioOfCategory("APP")) { ?>
										<li><a href="portfolio.php#mobile">Mobile</a></li>
									<?php } ?>
									<?php if ($portfolio->hasPortfolioOfCategory("GPH")) { ?>
										<li><a href="portfolio.php#graphic">Graphical Design</a></li>
									<?php } ?>
									<?php if ($portfolio->hasPortfolioOfCategory("PHT")) { ?>
										<li><a href="portfolio.php#photo">Photography</a></li>
									<?php } ?>
								</ul>
							</li>
							<li><a href="products.php">Products</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pricing<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="pricing.php#startups">For Startups</a></li>
									<li><a href="pricing.php#smallbusiness">For Small Business</a></li>
									<li><a href="pricing.php#corporations">For Large Corporations</a></li>
								</ul>
							</li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						<hr class="sociaMediaDivider">
	
						<ul class="nav navbar-nav navbar-right navbarRightMargin">
							<li>
								<a href="http://www.facebook.com/sfwebsolution" target="new" class="socialMediaLink">
									<img alt="Facebook" src="../utils/images/facebook-512x512.png" height="40px">
									<span class="socialMediaDescription">&nbsp;Follow us on Facebook</span>
								</a>
							</li>
							<li>
								<a href="https://www.google.com/+SFWebSolutionSanFrancisco" target="new" class="socialMediaLink">
									<img alt="Facebook" src="../utils/images/goggleplus-512x512.png" height="40px">
									<span class="socialMediaDescription">&nbsp;Follow us on Goggle+</span>
								</a>
							</li>
							<li>
								<a class="socialMediaLink" href="http://www.linkedin.com/company/sf-web-solution" target="new">
									<img alt="LinkedIn" src="../utils/images/linkedin-512x512.png" height="40px">
									<span class="socialMediaDescription">&nbsp;Follow us on LinkedIn</span>
								</a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
			
			<div class="row">
				<div class="col-md-12">
					<div class="isTable">
						<div class="isRow">
							<div class="isCell">
								<img align="middle" alt="SF Web Solution - Illustration" src="../utils/images/sfillustration-520x680.png" width="100px">
							</div>
							<div class="isCell">
								Welcome to the home page of SF Web Solution<br>
								Based in San Francisco, CA., this is the Bay Areas Premium Class Software solutions for web design, applications, and several other tools.<br>
								&nbsp;<br>
								On this page you will find a list of all products and services we offer (<a href="products.php"><span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Products</span></a>), 
								a price list as a general overview of all prices for all different services and products (<a href="pricing.php"><span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Pricing</span></a>).<br>
								You also find a short description of our experiences (<a href="about.php"><span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;About</span></a>), 
								as well as contact information (<a href="contact.php"><span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Contact</span></a>).<br>
								&nbsp;<br>
								We pride for ourselves always having a personal connection to all our customers, no exception ever. 
								Every single project won't be started without a complete specification, crafted after personal consultation only, no matter how small the project will be.<br>
								&nbsp;<br>
								The following lists gives you a short overview all products and services we offer.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								Web Design
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								Comprehensive web design for all kind of usage.<br>
								From small websites for personal promotions (such as: profile pages), 
								to medium size promotional pages (such as: larger personal profile pages, small business sites),
								to large business pages (such as: online sales, including database and background processing).<br>
								&nbsp;<br>
								<i>for more info use <a href="products.php#webdesign"><span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Products</span></a> or use main menu</i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								Application Design
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								All around application design for all kind of usage and multiple operating systems (Win, iOS and Android).<br>
								From small applications for personal use, to any size of business applications. 
								As well as tools for stock administration, that can used for any type of business websites.<br>
								&nbsp;<br>
								<span class="link">for more info use <a href="products.php#webdesign"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Products</a> or use main menu</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								Accounting-Tool
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								A tool for personal and business use, created for handling all bookkeeping needs.<br>
								For security reasons, data is held in an encrypted online MySQL database.<br>
								Keep an overview of all existing accounts, in multiple currencies. 
								Use for personal banking and/or business accounting.<br>
								This tool will make it easy to handle your taxes as you are able to view/print all transactions and balances easily.<br>
								&nbsp;<br>
								<span class="link">for more info use <a href="products.php#accountingtool"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Products</a> or use main menu</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								Payment-Service
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								Extremely secure tool (using rules of 'PCI Security Standard Council') to be used as a web- or web service-interface, for any kind of transaction involving payment data (including credit card, invoice, bank debit and PayPal payment).<br>
								Tool offers extreme security as payment information is only held during time of transaction, deleted right after completion and cannot be requested fully visible at any time after submission (using 'PCI Tokenization').<br>
								Payment information is able to be saved (customer specific database), but cannot be requested fully visible at any time after submission (using 'PCI Tokenization').<br>
								Saved payment information is always held using a double encryted database and additional encrpytion data storage.  
								Not all information is held online (CVC number is not allowed to be saved at any time using 'PCI Security Standards'). 
								Even in case of an online theft, saved payment information (card numbers, bank accounts, etc.) cannot be used, as they are incomplete.<br>
								&nbsp;<br>
								<span class="link">for more info use <a href="products.php#accountingtool"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Products</a> or use main menu</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p class="text-right">
						<a href="#pageTop">
							<span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;back up</span>
						</a>
					</p>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2">
						<img align="middle" alt="SF Web Solution - Cube" src="../utils/images/sfwebsolution_cube-400x400.png" border="0" width="42x" height="42px">
					</div>
					<div class="col-xs-10">
						<p class="text-right">
							email: <a href="mailto:jay.brahms@sfwebsolution.com">jay.brahms@sfwebsolution.com</a><br>
							phone: +1 (415) 646-6497
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<p class="text-center">
							<span class="copyright">
								Copyright SF Web Solution, Inc. All Rights reserved. Created by: SF Web Solution, Inc.
							</span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../utils/jquery/jquery.js" type="text/javascript"></script>
    <!-- Include IE10-Viewport Fix plugin -->
    <script src="../utils/scripts/ie10-viewport-fix.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../utils/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>