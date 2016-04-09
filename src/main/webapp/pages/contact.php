<?php
require_once '../net/sfws/home/Portfolio.php';
require_once '../net/sfws/home/Feedback.php';

// initializations
$portfolio = new Portfolio("../data/portfolio.xml");
$feedback = new Feedback("../data/feedback.xml")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Contact::SF Web Solution | San Francisco, CA | Premium Class Software solutions, Web design and Applications</title>
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
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
	  		if (d.getElementById(id))
  		  		return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  			fjs.parentNode.insertBefore(js, fjs);
		}

		(document, 'script', 'facebook-jssdk'));
	</script>
	
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
						<li class="active"><a href="#">Contact<span class="sr-only">(current)</span></a></li>
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
			<div class="col-xs-12 col-sm-6">
				<div class="outer">
					<div class="isRow">
						<div class="header">
							<div class="row">
								<div class="col-xs-6 text-left">
									Facebook
								</div>
								<div class="col-xs-6 text-right">
									<div class="fb-follow"
										data-href="https://www.facebook.com/sfwebsolution"
										data-layout="button_count"
										data-show-faces="true">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="isRow">
						<div class="content text-center">
							<div class="fb-page"
								data-href="https://www.facebook.com/sfwebsolution/"
								data-tabs="timeline, events, messages"
								data-small-header="false"
								data-adapt-container-width="true"
								data-hide-cover="false"
								data-show-facepile="false"
								data-width="500"
								data-height="776">
								<div class="fb-xfbml-parse-ignore">
									<blockquote cite="https://www.facebook.com/sfwebsolution/">
										<a href="https://www.facebook.com/sfwebsolution/">SF Web Solution</a>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="outer">
					<div class="isRow">
						<div class="header">
							Address
						</div>
					</div>
					<div class="isRow">
						<div class="content">
							<iframe class="map" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=3532+21st+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=3532+21st+&amp;sll=37.7577,-122.4376&amp;sspn=0.230989,0.281868&amp;ie=UTF8&amp;hq=&amp;hnear=3532+21st+St,+San+Francisco,+California+94114&amp;t=m&amp;z=14&amp;ll=37.756823,-122.426501&amp;output=embed"></iframe><br/>
							<i><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3532+21st+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=3532+21st+&amp;sll=37.7577,-122.4376&amp;sspn=0.230989,0.281868&amp;ie=UTF8&amp;hq=&amp;hnear=3532+21st+St,+San+Francisco,+California+94114&amp;t=m&amp;z=14&amp;ll=37.756823,-122.426501" target="new" class="copyright">View Larger Map</a></i><br>
							&nbsp;<br>
							3532 21st Street<br>
							San Francisco, CA 94114<br>
							USA<br>
							&nbsp;<br>
							Phone: +1 (415) 646-6497<br>
							&nbsp;<br>
							Email: <a href="mailto:jay.brahms@sfwebsolution.com"><span class="link">jay.brahms@sfwebsolution.com</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="outer">
					<div class="isRow">
						<div class="header">
							Social Media
						</div>
					</div>
					<div class="isRow">
						<div class="content">
							Besides Facebook you find us on various other social media outlets.<br>
							Feel free to add us to your network and follow our updates.<br>
							&nbsp;<br>
							<table class="width100">
								<tr valign="middle"> 
									<td align="left" class="paddingRight5">
										<a href="https://www.google.com/+SFWebSolutionSanFrancisco" target="new">
											<img align="top" alt="Google+" src="../utils/images/goggleplus-512x512.png" width="40px" height="40px" border="0">
										</a>
									</td>
									<td align="left" class="width100 paddingLeft5">
										Follow our <a href="https://www.google.com/+SFWebSolutionSanFrancisco" target="new"><span class="link">Page on Google+</span></a>
										<!-- Place this tag where you want the +1 button to render. -->
										
									</td>
								</tr>
								<tr valign="middle"> 
									<td align="left" class="paddingRight5">
										<a href="http://www.linkedin.com/company/sf-web-solution" target="new">
											<img align="top" alt="LinkedIn" src="../utils/images/linkedin-512x512.png" width="40px" height="40px" border="0">
										</a>
									</td>
									<td align="left" class="width100 paddingLeft5">
										Follow our <a href="http://www.linkedin.com/company/sf-web-solution" target="new"><span class="link">Company Page on LinkedIn</span></a>
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
							Feedback
						</div>
					</div>
					<div class="isRow">
						<div class="content">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-sm-push-6">
									<div id="wait" class="wait">
										<div class="feedbackwait">
											<div class="waitIcon">
												<img src="../utils/images/wait-128x128.gif" alt="Please Wait..."><br>
												We're trying to save your comments<br>
												and contact the System administrator.<br>
												Please wait...
											</div>
										</div>
									</div>
									<div id ="request" class="feedback">
										<form id="feedback" class="form-horizontal">
											<b>Please use the form below to leave us a comment/feedback:</b><br>
											<i>(any comments left, will not be shown immediatly after submission, but after review)</i><br>
											&nbsp;<br>
											<div class="form-group">
												<label for="firstName" class="col-md-3 control-label">First name</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="firstName" placeholder="First name">
												</div>
											</div>
											<div class="form-group">
												<label for="lastName" class="col-md-3 control-label">Last name</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="lastName" placeholder="Last name">
												</div>
											</div>
											<div class="form-group">
												<label for="email" class="col-md-3 control-label">Email</label>
												<div class="col-md-9">
													<input type="email" class="form-control" id="email" placeholder="Email">
												</div>
											</div>
											<div class="form-group">
												<label for="company" class="col-md-3 control-label">Company</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="company" placeholder="Company">
												</div>
											</div>
											<div class="form-group">
												<label for="website" class="col-md-3 control-label">Website</label>
												<div class="col-md-9">
												    <div class="input-group">
												    	<div class="input-group-addon">http://</div>
												    	<input type="url" class="form-control" id="website" placeholder="URL">
												    </div>
												</div>
											</div>
											<div class="form-group">
												<label for="project" class="col-md-3 control-label">Project</label>
												<div class="col-md-9">
													<select class="form-control" id="project">
														<option></option>
														<option>Web Application</option>
														<option>Desktop Application</option>
														<option>Mobile Application</option>
														<option>IT Services</option>
														<option>Others Services</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="sr-only" for="comment">Comment</label>
												<div class="col-xs-12">
													<textarea class="form-control" id="comment" rows="4" placeholder="You're comment here..."></textarea>
												</div>
											</div>
										
											<div class="form-group">
												<div class="col-xs-12 text-right">
													<a class="btn btn-default" href="javascript:saveFeedback();" role="button">Submit</a>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-sm-pull-6">
									<?php if ($feedback->hasApprovedFeedback()) { ?>
										<?php $count = 0; ?>
										<?php foreach ($feedback->getApprovedFeedback() as &$singleFeedback) { ?>
											<div class="feedback">
												<b><?php echo $singleFeedback->getFirstName() . " " . $singleFeedback->getLastName() ?></b><br>
												<?php if (strlen($singleFeedback->getCompany()) > 0) { ?>
													<?php echo $singleFeedback->getCompany() ?><br>
												<?php } ?>
												<?php if (strlen($singleFeedback->getWebsite()) > 0) { ?>
													<span class="link"><a href="<?php echo $singleFeedback->getWebsite() ?>" target="_new"><?php echo $singleFeedback->getWebsite() ?></a></span><br>
												<?php } ?>
												<?php if (strlen($singleFeedback->getProject()) > 0) { ?>
													<?php echo $singleFeedback->getProject() ?><br>
												<?php } ?>
												&nbsp;<br>
												Comment (<i><?php echo date("F d, Y", $singleFeedback->getDate()->getTimestamp()) ?></i>):
												<div class="comment">
													<?php echo $singleFeedback->getComment() ?>
												</div>
											</div>
										<?php } ?>
									<?php } else { ?>
										<div class="feedback">
											Be the first to leave a comment/feedback
										</div>
									<?php } ?>
								</div>
							</div>
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
    <!-- Include AJAX-script -->
    <script src="../utils/scripts/ajax.js" type="text/javascript"></script>
	<!-- Javascript -->
	<script type="text/javascript">
		$(document).ready(function () {

			$.valHooks.textarea = {
					get: function( elem ) {
						return elem.value.replace( /\r?\n/g, "\r\n" );
					}
			};
		});

		function saveFeedback() {
			// show wait
			$("#wait").show();

			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			requestType = "FEEDBACK";
			requestUrl = "feedback/content.php";
			requestTimeOut = 30000;
			requestParameters = {
					"firstName": $("#firstName").val(),
					"lastName": $("#lastName").val(),
					"email": $("#email").val(),
					"company": $("#company").val(),
					"website": $("#website").val(),
					"project": $("#project").val(),
					"comment": $("#comment").val()
					};

			// start ajax-request
			runAjaxRequest();
		}

		function fillAnswer() {
			// fill content
			$("#request").replaceWith(response["REQUEST"]);

			// hide waiting
			$("#wait").hide();
		}
	</script>
</body>

</html>