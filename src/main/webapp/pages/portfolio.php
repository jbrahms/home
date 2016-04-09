<?php
require_once '../net/sfws/home/Portfolio.php';

// initializations
$portfolio = new Portfolio("../data/portfolio.xml");
$portfolioWeb = $portfolio->getPortfolioByCategory("WEB");
$portfolioGui = $portfolio->getPortfolioByCategory("GUI");
$portfolioApp = $portfolio->getPortfolioByCategory("APP");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Portfolio::SF Web Solution | San Francisco, CA | Premium Class Software solutions, Web design and Applications</title>
	<meta name="description" content="SF Web Solution, First Class, San Francisco, Web design, Software and Application engeneering" />
	<meta name="keywords" content="sf web solution, sfws, web design, software engineering, applications, gui, php, java, tomcat, apache, wsdl, xml, javascript, jquery, mysql, oracle, c, c#, c++"/>
	<meta name="robots" content="index, nofollow">
	<!-- Icon -->
	<link rel="icon" type="image/x-icon" href="../utils/images/favicon.ico" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../utils/bootstrap/css/bootstrap.css" type="text/css">
	<!-- IE10-Viewport Fix -->	
	<link rel="stylesheet" href="../utils/styles/ie10-viewport-fix.css" type="text/css">
	<!-- Company -->	
	<link rel="stylesheet" href="../utils/styles/global.css" type="text/css">
</head>

<body>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div id="wait">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h5 class="modal-title" id="myModalLabel">Please wait...</h5>
						</div>
						<div class="modal-body">
							<img src="../utils/images/wait-128x128.gif" alt="Please Wait...">
						</div>
					</div>
				</div>
				<div id="content">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h5 class="modal-title" id="myModalLabel">Portfolio</h5>
						</div>
						<div class="modal-body">
							<div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
								</ol>
								
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
								</div>
								
								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-portfolio" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-portfolio" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							&nbsp;<br>
							<div id="info">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio<span class="sr-only">(current)</span><span class="caret"></span></a>
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
							The following pages include the Portfolio for the various applications for web and otherwise.<br>
							Feel free to check all of them.<br>
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
			<?php if ($portfolio->hasPortfolioOfCategory("WEB")) { ?>
				<div id="web" class="col-xs-12">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								Web
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								<div class="row">
									<?php for ($i=0; $i<count($portfolioWeb); $i++) { ?>
										<div class="col-xs-6 col-md-3">
											<div class="thumbnail">
												<a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-portfolio="<?php echo $portfolioWeb[$i]['shortName'] ?>">
													<img src="../<?php echo $portfolioWeb[$i]['thumbnail'] ?>" alt="<?php echo $portfolioWeb[$i]['name'] ?>" width="627" height="470">
												</a>
												<h6><?php echo $portfolioWeb[$i]['name'] ?></h6>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if ($portfolio->hasPortfolioOfCategory("GUI")) { ?>
				<div id="application" class="col-xs-12">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								Desktop Applications
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								<div class="row">
									<?php for ($i=0; $i<count($portfolioGui); $i++) { ?>
										<div class="col-xs-6 col-md-3">
											<div class="thumbnail">
												<a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-portfolio="<?php echo $portfolioGui[$i]['shortName'] ?>">
													<img src="../<?php echo $portfolioGui[$i]['thumbnail'] ?>" alt="<?php echo $portfolioGui[$i]['name'] ?>" width="627" height="470">
												</a>
												<h6><?php echo $portfolioGui[$i]['name'] ?></h6>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if ($portfolio->hasPortfolioOfCategory("APP")) { ?>
				<div id="mobile" class="col-xs-12">
					<div class="outer">
						<div class="isRow">
							<div class="header">
								Mobile Applications
							</div>
						</div>
						<div class="isRow">
							<div class="content">
								<div class="row">
									<?php for ($i=0; $i<count($portfolioApp); $i++) { ?>
										<div class="col-xs-6 col-md-3">
											<div class="thumbnail">
												<a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-portfolio="<?php echo $portfolioApp[$i]['shortName'] ?>">
													<img src="../<?php echo $portfolioApp[$i]['thumbnail'] ?>" alt="<?php echo $portfolioApp[$i]['name'] ?>" width="627" height="470">
												</a>
												<h6><?php echo $portfolioApp[$i]['name'] ?></h6>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
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
    <script src="../utils/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- Include AJAX-script -->
    <script src="../utils/scripts/ajax.js" type="text/javascript"></script>
	<!-- Javascript -->
	<script type="text/javascript">
		$(document).ready(function () {
			
			// Function called when modal is opened
			$(document).on('show.bs.modal','#myModal', function (event) {
				// buttong that triggered the modal
				var button = $(event.relatedTarget);
				// Extract info from data-* attributes
				var portfolio = button.data('portfolio');

				// show wait
				$("#content").hide();
				$("#wait").show();

				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				requestType = "PORTFOLIO";
				requestUrl = "portfolio/content.php";
				requestTimeOut = 30000;
				requestParameters = {
						"portfolio": portfolio
						};

				// start ajax-request
				runAjaxRequest();
			});
		});

		function fillModalContent() {
			// fill content
			$("#content .modal-header").replaceWith(response["MODAL-HEADER"]);
			$("#content .carousel-indicators").replaceWith(response["CAROUSEL-INDICATORS"]);
			$("#content .carousel-inner").replaceWith(response["CAROUSEL-INNER"]);
			$("#info").replaceWith(response["INFO"]);

			// set carousel
			$("#carousel-portfolio").carousel("pause").removeData();
			$("#carousel-portfolio").carousel({
				interval:5000,
				pause:false,
				wrap:true,
				keyboard:false
			});
			$("#carousel-portfolio").carousel(0);

			// show carousel
			$("#wait").hide();
			$("#content").show();
		}
	</script>
</body>

</html>