<?php
require_once '../../net/sfws/home/Feedback.php';
require_once '../../net/sfws/home/Email.php';

// initializations
$feedback = new Feedback("../../data/feedback.xml");
$error = false;
$errorMessage = "";
$comment = str_replace("\r\n", "<br>", $_POST['comment']);
$id = 0;
$date = new DateTime();

// check is needed parameters are available and filled
if ((empty($_POST['firstName']))
||  (empty($_POST['lastName']))
||  (empty($_POST['email']))
||  (empty($comment))) {
	$error = true;
	$errorMessage = "Please check the entry fields below...";
}

// work to be done when no errors are found
if (!$error) {
	// create a new single message
	$singleMessage = new Message();
	
	// fill new single message with values from post
	$singleMessage->setApproved(false);
	$singleMessage->setComment($comment);
	$singleMessage->setCompany($_POST['company']);
	$singleMessage->setEmail($_POST['email']);
	$singleMessage->setFirstName($_POST['firstName']);
	$singleMessage->setLastName($_POST['lastName']);
	$singleMessage->setProject($_POST['project']);
	$singleMessage->setWebsite($_POST['website']);
	
	try {
		// add new single message to feedback
		$feedback->addFeedback($singleMessage);
		
		// get if & date (for email)
		$id = $singleMessage->getId();
		$date = $singleMessage->getDate();
	} catch (Exception $e) {
		// set error and error message
		$error = true;
		$errorMessage = "Unable to save feedback at this time, please try again later.<br>(<i>" . $e->getMessage() . "</i>)";
	}
}

// sending email for sucessful saved feedback request
if (!$error) {
	try {
		// create email
		$email = new Email("../../mails/feedback-request.html", Email::HTML);
		
		// set addresses
		$email->addAddress(Email::TO, "jay.brahms@sfwebsolution.com");
		$email->addAddress(Email::FROM, "feedback@sfwebsolution.com");
		
		// set subject
		$email->setSubjet("A New Feedback needs to be reviewed");
		
		// replace placeholders
		$email->setPlaceholder("[@id@]", strval($id));
		$email->setPlaceholder("[@date@]", date("F d, Y", $date->getTimestamp()));
		$email->setPlaceholder("[@subject@]", "A New Feedback needs to be reviewed");
		$email->setPlaceholder("[@firstName@]", $_POST['firstName']);
		$email->setPlaceholder("[@lastName@]", $_POST['lastName']);
		$email->setPlaceholder("[@email@]", $_POST['email']);
		$email->setPlaceholder("[@company@]", $_POST['company']);
		$email->setPlaceholder("[@website@]", $_POST['website']);
		$email->setPlaceholder("[@project@]", $_POST['project']);
		$email->setPlaceholder("[@comment@]", $comment);
		$email->setPlaceholder("[@companyEmail@]", "jay.brahms@sfwebsolution.com");
		$email->setPlaceholder("[@companyPhone@]", "+1 (415) 646-6497");
		
		// attempt to send email
		$email->sendMail();
	} catch (Exception $e) {
		// set error and error message
		$error = true;
		$errorMessage = "Unable to send Email-request via email, please try again later.<br>(<i>" . $e->getMessage() . "</i>)";
	}
}
?>
<html>
<head>
	<title>Ajax-Request: New Feedback</title>
</head>
<body>
	<div id="success"><?php if ($error) { ?>error<?php } else { ?>ok<?php } ?></div>
	
	<div id="request">
		<?php if ($error) { ?>
			<div id="request" class="feedback">
				<form id="feedback" class="form-horizontal">
					<b>Please use the form below to leave us a comment/feedback:</b><br>
					<i>(any comments left, will not be shown immediatly after submission, but after review)</i><br>
					&nbsp;<br>
					<div class="form-group has-error">
						<div class="col-xs-12">
							<span class="help-block">
								<b><?php echo $errorMessage ?></b>
							</span>
						</div>
					</div>
					&nbsp;<br>
					<div class="form-group<?php if (empty($_POST['firstName'])) { echo " has-error"; } ?>">
						<label for="firstName" class="col-md-3 control-label">First name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="firstName" placeholder="First name" value="<?php if (!empty($_POST['firstName'])) { echo $_POST['firstName']; } ?>">
							<?php if (empty($_POST['firstName'])) { ?>
								<span class="help-block">
									<i>First name needs to be filled</i>
								</span>
							<?php } ?>
						</div>
					</div>
					<div class="form-group<?php if (empty($_POST['lastName'])) { echo " has-error"; } ?>">
						<label for="lastName" class="col-md-3 control-label">Last name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="lastName" placeholder="Last name" value="<?php if (!empty($_POST['lastName'])) { echo $_POST['lastName']; } ?>">
							<?php if (empty($_POST['lastName'])) { ?>
								<span class="help-block">
									<i>Last name needs to be filled</i>
								</span>
							<?php } ?>
						</div>
					</div>
					<div class="form-group<?php if (empty($_POST['email'])) { echo " has-error"; } ?>">
						<label for="email" class="col-md-3 control-label">Email</label>
						<div class="col-md-9">
							<input type="email" class="form-control" id="email" placeholder="Email" value="<?php if (!empty($_POST['email'])) { echo $_POST['email']; } ?>">
							<?php if (empty($_POST['email'])) { ?>
								<span class="help-block">
									<i>Email needs to be filled</i>
								</span>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label for="company" class="col-md-3 control-label">Company</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="company" placeholder="Company" value="<?php if (!empty($_POST['company'])) { echo $_POST['company']; } ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="website" class="col-md-3 control-label">Website</label>
						<div class="col-md-9">
						    <div class="input-group">
						    	<div class="input-group-addon">http://</div>
						    	<input type="url" class="form-control" id="website" placeholder="URL" value="<?php if (!empty($_POST['website'])) { echo $_POST['website']; } ?>">
						    </div>
						</div>
					</div>
					<div class="form-group">
						<label for="project" class="col-md-3 control-label">Project</label>
						<div class="col-md-9">
							<select class="form-control" id="project">
								<option></option>
								<option<?php if (strtoupper($_POST['project']) == "WEB APPLICATION") { echo " selected=\"selected\""; } ?>>Web Application</option>
								<option<?php if (strtoupper($_POST['project']) == "DESKTOP APPLICATION") { echo " selected=\"selected\""; } ?>>Desktop Application</option>
								<option<?php if (strtoupper($_POST['project']) == "MOBILE APPLICATION") { echo " selected=\"selected\""; } ?>>Mobile Application</option>
								<option<?php if (strtoupper($_POST['project']) == "IT SERVICES") { echo " selected=\"selected\""; } ?>>IT Services</option>
								<option<?php if (strtoupper($_POST['project']) == "OTHER SERVICES") { echo " selected=\"selected\""; } ?>>Other Services</option>
							</select>
						</div>
					</div>
					<div class="form-group<?php if (empty($_POST['comment'])) { echo " has-error"; } ?>">
						<label class="sr-only" for="comment">Comment</label>
						<div class="col-xs-12">
							<?php if (empty($_POST['comment'])) { ?>
								<span class="help-block">
									<i>Comment needs to be filled</i>
								</span>
							<?php } ?>
							<textarea class="form-control" id="comment" rows="4" placeholder="You're comment here..."><?php if (!empty($comment)) { echo $comment; } ?></textarea>
						</div>
					</div>
				
					<div class="form-group">
						<div class="col-xs-12 text-right">
							<a class="btn btn-default" href="javascript:saveFeedback();" role="button">Submit</a>
						</div>
					</div>
				</form>
			</div>
		<?php } else { ?>
			<div id="request" class="feedback">
				<b>Feedback was successfully send.</b><br>
				<br>
				The page administrator was informed of your request to add a feedback.<br>
				Please check back at a later time.<br>
				<br>
				Thank you very much for your comments. All comments and feedback is very much appreciated.
			</div>
		<?php } ?>
	</div>
</body>
</html>