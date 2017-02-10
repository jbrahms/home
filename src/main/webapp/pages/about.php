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
	<title>About::SF Web Solution | San Francisco, CA | Premium Class Software solutions, Web design and Applications</title>
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
							<li class="active"><a href="#">About<span class="sr-only">(current)</span></a></li>
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
								On this page you fill find a short bio of SF Web Solution, its owner and employees.<br>
								&nbsp;<br>
								&nbsp;<br>
								&nbsp;<br>
								&nbsp;<br>
								For any additional information, please contact us using any of the available possibilities you find under <a href="contact.php"><span class="link"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;Contact</span></a>.<br>
								Or just email us your request using: <span class="link"><a href="mailto:jay.brahms@sfwebsolution.com">jay.brahms@sfwebsolution.com</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								About
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								Found by Jay Brahms in March 2014.<br>
								&nbsp;<br>
								<table>
									<tr valign="top">
										<td align="left">Owner:&nbsp;</td>
										<td align="left">
											Jay Brahms<br>
											<i>(Joerg Kleinebrahm)</i>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								Experience
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								<table>
									<tr valign="top">
										<td align="left">Experience:&nbsp;</td>
										<td align="left">22 years (since 1994)</td>
									</tr>
									<tr valign="top">
										<td align="left">Tools:&nbsp;</td>
										<td align="left">
											JAVA, JSP, Apache Tomcat<br>
											PHP, Perl<br>
											HTML, XML, WSDL, JAVASCRIPT, AJAX<br>
											C#, C++, VB<br>
											ORACLE Forms &amp; Reports, SQL<br>
											MySQL, ORACLE DB, Access<br>
										</td>
									</tr>
									<tr valign="top">
										<td align="left">OS:&nbsp;</td>
										<td align="left">
											Windows, Linux
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								History
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								<h6>The follow describes in short the history of employment as well as responsibilities during:</h6>
								<ul>
									<li><h5>Job training:</h5>
									Prior to working in IT development, german degree of 'Abitur' (AA degree), trained for 3 years as sales representative.</li>
									<li><h5>Mercedes Benz (Germany):</h5>
									1 year of retraining at 'Mercedes Benz' internal 'Schooling Center for Employees' in IT development.<br>
									Training concluded with full development of a administrative database (Access) for the head of adminstration of Mercedes Benz own interal 'Schooling Center for Employees'.</li>
									<li><h5>Siemens (Germany):</h5>
									1 year of retraining at 'Mercedes Benz' internal 'Schooling Center for Employees' in IT development.<br>
									Training concluded with full development of a administrative database (Access) for the head of adminstration of Mercedes Benz own interal 'Schooling Center for Employees'.</li>
									<li><h5>JKSoft (owner, Germany):</h5>
									3 year reprogramming 'Product Management System' using ORACLE Forms &amp; Reports.<br>
									Contracted by 'Siemens', implementing new revising existing sources, mainly for roasteries 'HAG' and 'KRAFT JACOBS SUCHARD'.<br>
									Extensive developments in SQL for used ORACLE DB.</li>
									<li><h5>Partners Software GmbH (<i>and 'Partners Solutions GmbH'</i>, Germany):</h5>
									<h6>15 years of GUI creation for various operating systems, including:</h6>
									<ul>
										<li>development GUI of Travel Seach Engine "ELBA" (flight-search, booking, cancelation &amp; review), in Visual Basic</li>
										<li>planning, creation of specification &amp; development of internal administrative tools for agency &amp; user data, using MySQL, in C++</li>
										<li>planning, creation of specification &amp; development of internal test servers and testing tools for server communications, in C++</li>
										<li>development of GUI for online search engine 'LOW.FARE', using JSP for TomCat, in JAVA.</li>
										<li>development of GUI for fare administration for newly developed reservation system, in C#</li>
										<li>planning, creation of specification &amp; development of newly revised online search engine 'LOW.FARE' (using AJAX), using JSP for TomCat, in JAVA</li>
										<li>planning, creation of specification &amp; development of administration tool for online search engine 'LOW.FARE' (design changes to be done by customer themselves), using JSP for TomCat, in JAVA</li>
										<li>planning, creation of specification &amp; development (after customer consultation) of 'LOW.FARE' variations (using online search engine 'LOW.FARE') for several different customers, using JSP for TomCat, in JAVA</li>
										<li>error fixing &amp; implementation new feature in LOW.FARE XML Api variation, using JSP for TomCat, in JAVA</li>
										<li>implementation of WSDL (web service) communication for payment transactions (all programming using PCI Security Standards), in JAVA</li>
										<li>implementation of WSDL communication for login transactions (all programming using AMEX Security Standards), in JAVA</li>
									</ul></li>
									<li><h5>SF Web Solution (owner, United States):</h5>
									Since its foundation in March 2014 our main focus has been the creation and implementation of various Web- &amp; Applications designs for various customers.
									<h6>As well as:</h6>
									<ul>
										<li>providing IT services (installation of backup system etc)</li>
										<li>on-going creation of 'Accounting Tool'</li>
										<li>on-going creation of 'Payment Service'</li>
									</ul></li>
								</ul>
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