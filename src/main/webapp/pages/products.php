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
	<title>Products::SF Web Solution | San Francisco, CA | Premium Class Software solutions, Web design and Applications</title>
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
	<div id="pageTop" class="container pageBackground pageBorder">
		<div class="row">
			<div class="col-md-12">
				<img align="top" alt="SF Web Solution - Header" src="../utils/images/sfbackground-1500x369.jpg" border="0" width="100%">
			</div>
		</div>

		<nav class="navbar navbar-default" style="margin-top: 20px;">
			<div class="container">
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
						<li><a href="home.php">Home</a></li>
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
									<li><a href="portfolio.php#mobile">Graphical Design</a></li>
								<?php } ?>
								<?php if ($portfolio->hasPortfolioOfCategory("PHT")) { ?>
									<li><a href="portfolio.php#mobile">Photography</a></li>
								<?php } ?>
							</ul>
						</li>
						<li class="active"><a href="#">Products<span class="sr-only">(current)</span></a></li>
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
							We do offer a range of products and services.<br>
							All offered products and services can be found here on this page.<br>
							Pricing for offered products and services can be found under <a href="pricing.php"><span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Pricing</span></a> or follow the links within the following categories.<br>
							If you have any further or additional questions please do feel free to contact us, we would like to hear your questions and/or suggestions.<br>
							&nbsp;<br>
							For additional pricing- or order-requests, please contact us using any of the available possibilities you find under <a href="contact.php"><span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Contact</span></a>.<br>
							Or just email us your request using: <span class="link"><a href="mailto:jay.brahms@sfwebsolution.com">jay.brahms@sfwebsolution.com</a></span>
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
							A website is a promotional tool used in all kinds of purposes, personal and business. 
							You need to promote yourself, a small business, a non-profit, any other organization or use the page to sell and/or buy online, websites are the universal tool for worldwide instant visibility and accessibility.<br>
							Stay in contact with friends, family, contributers, customers, promote your business, find new friends and customers or run your business online.<br>  
							&nbsp;<br>
							We offer a comprehensive and personal approach for your web presence.<br>
							From small websites for personal promotions (such as: profile pages), 
							to medium size promotional pages (for example: larger personal profile pages, small business sites),
							to large business pages (such as: online sales, including database and background processing).<br>
							Any tools needed for administration (stocks etc.) will be created up on request.<br>
							&nbsp;<br>
							We are using JSP (JAVA, Tomcat), PHP and Perl (Apache). 
							We do offer pages for several operating systems (Windows, Linux, etc).
							Currently we do not offer any pages in ASP.<br>
							&nbsp;<br>
							We will also help you with setting up your domain (if you don't already have one). 
							We do not promote any specific provider.<br>
							&nbsp;<br>
							All sites are always created using a complete specification created after personal consultations. 
							During it's creation process, sites are always accessible on a demo system, for you to have an overview of the process.<br>
							&nbsp;<br>
							<span class="link">for general pricing review <a href="pricing.php#webdesign"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Pricing</a> (for web design)</span>
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
							Applications (front- &amp; backend) are used at any time. 
							They can be used locally or for distribution online. 
							Applications can be used for any kind of purpose, any kind of process.<br>
							Applications are a universal tools, to either automate/combine or create your own processes.<br>
							Depending on the language used to create the application, it can be used on either one or several operating system.<br>
							&nbsp;<br>
							We offer a comprehensive and personal approach for your application needs, for private or business use. 
							Appliations are usually used for administration of websites and administration of databases we have created for you, as well as stock administration.<br>
							&nbsp;<br>
							We are using JAVA, Visual Basic, C# and C++. 
							Applications created in VB, C# or C++ are only usable on 'Windows' operating system and are sometimes even limited to its version. 
							Applications created in JAVA are usable on several operating system (Win, iOS, Linux etc). 
							Therefore we are usually opting for JAVA.<br>
							We also offer application design for Android, which can be offered directly from source (website) or through 'Google Play Store'.<br>
							&nbsp;<br>
							All applications are always created using a complete specification created after personal consultations.<br>
							&nbsp;<br>
							&nbsp;<br>
							&nbsp;<br>
							<span class="link">for general pricing review <a href="pricing.php#applicationdesign"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Pricing</a> (for application design)</span>
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
							Accounting and Bookkeeping are essential in every business and private home.<br>
							Wether you need an easy overview of all your transactions and balances for your personal home banking, including accounts spanning multile countries in different currencies or 
							an efficient bookkeeping tool to have an easy to handle overview over all accounts needed for your business, including your equity, 
							this is the tool for your use.<br>
							&nbsp;
							<h6>The 'SFWS Accounting Tool' will give you the following options (and more):</h6>
							<ul>
								<li>group- &amp; user administration</li>
								<li>every currency needed</li>
								<li>account administration (create as many accounts as needed, no restrictions)</li>
								<li>bank administration</li>
								<li>drafts for repeated transactions for easy access</li>
								<li>creation of payments for scheduled transactions one-time, daily, monthly, quarterly or yearly</li>
								<li>automatic reminders via email for scheduled transactions (if requested)</li>
								<li>check your equity at any time</li>
								<li>prints for every account via PDF</li>
							</ul>
							<i>at a later time you will find a link to a PDF with all available options</i><br>
							&nbsp;<br>
							This is be a company created product.<br>
							<b>Planned release-date for this tool: Middle 2017</b><br>
							&nbsp;<br>
							Please check back periodically to check for updates and other changes.<br>
							In the near future this space will contain additional information about the tool, 
							as well as links for additional manuals.<br>
							&nbsp;<br>
							<span class="link">for general pricing review <a href="pricing.php#accountingtool"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Pricing</a> (for usage of the accounting tool)</span>
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
							When you are selling or buying products online, you want to ensure the secure handling of your and your customers payment information.<br>
							Payment security has become one of the biggest problems during the last years. 
							Especially in the United States theft of payment information has been happening more and more often.  
							Most companies treat payment information with not enough of no security at all.<br>
							&nbsp;<br>
							Payment security standards in the US are available but rarely used. 
							Most companies treat credit card information as an ID of their customers, therefore saving all given information and making theft possible. 
							In Europe security standards are licensed and used more often. 
							Security of payment information ensures theft as almost impossible and/or ensures stolen payment information can not be used at all.<br> 
							&nbsp;<br>
							The 'SFWS Payment Service' is a tool using one of the most used european security standard called:<br>
							<div class="centered"><img align="top" alt="SF Web Solution - Logo" src="../utils/images/pcicompliance-329x192.png" border="0" width="205px"></div>
							&nbsp;<br>
							Using this above security standard, the tool can be used as a web- or web service interface, for any kind of transaction involving payment data (including credit card, invoice, bank debit and PayPal payment).<br>
							Payment Information is only held during time of transaction, deleted right after completion and cannot be requested fully visible at any time after submission (using 'PCI Tokenization').<br>
							Payment information is able to be saved (customer specific database), but cannot be requested fully visible at any time after submission (using 'PCI Tokenization').<br>
							Saved payment information is always held using a double encryted database and additional encrpytion data storage.   
							Not all information is held online (CVC number is not allowed to be saved at any time using 'PCI Security Standards'). 
							Even in case of an online theft, saved payment information (card numbers, bank accounts, etc.) cannot be used, as they are incomplete.<br>
							&nbsp;<br>
							This is be a company created product.<br>
							<b>Planned release-date for this tool: Middle 2017</b><br>
							&nbsp;<br>
							Please check back periodically to check for updates and other changes.<br>
							In the near future this space will contain additional information about the tool, 
							as well as links to 'PCI' and additional manuals.<br>
							&nbsp;<br>
							<span class="link">for general pricing review <a href="pricing.php#paymentservice"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Pricing</a> (for usage of the payment service)</span>
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
		<div class="container pageBorder">
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

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../utils/jquery/jquery.js" type="text/javascript"></script>
    <!-- Include IE10-Viewport Fix plugin -->
    <script src="../utils/scripts/ie10-viewport-fix.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../utils/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>