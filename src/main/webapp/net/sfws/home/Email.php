<?php
/**
 * Class containing emails
 * 
 * @author Jay Brahms
 */
class Email {
	
	/**
	 * Members
	 */
	private $mailTemplate = "";
	private $mailType = "";
	private $to = "";
	private $cc = "";
	private $bcc = "";
	private $from = "";
	private $replyTo = "";
	private $subject = "";
	
	/**
	 * Contants
	 */
	const TO = 0;
	const CC = 1;
	const BCC = 2;
	const FROM = 3;
	const REPLYTO = 4;
	const TEXT = "TEXT";
	const HTML = "HTML";
	
	/**
	 * Constructor:
	 * Create a new Email class, reading mail-template from given path for specific type
	 * 
	 * @param string $pathTemplate
	 * @param string $mailType
	 */
	public function __construct($pathTemplate, $mailType) {
		
		// read mail-template
		$this->mailTemplate = $this->readEmailTemplate($pathTemplate);
		$this->mailType = $mailType;
	}

	/**
	 * Function:
	 * Read mail-template from given path
	 * 
	 * @param string $pathTemplate
	 * @return string mail-template
	 */
	private function readEmailTemplate(&$pathTemplate) {

		// initializaitions
		$mailTemplate = fopen($pathTemplate, "r");
		$returnValue = "";

		// Loop over lines of mail template
		while(!feof($mailTemplate)) {
			// add lines of file to return value
			$returnValue = $returnValue . fgets($mailTemplate);
		}
		
		// close mail-template
		fclose($mailTemplate);
		
		return $returnValue;
	}

	/**
	 * Function:
	 * Add given email-address to type of address
	 * 
	 * @param string $type
	 * @param string $emailAddress
	 */
	public function addAddress($type, $emailAddress) {
	
		// check type
		switch ($type) {
			case Email::TO: {
				if (empty($this->to) == true) {
					// set to-address
					$this->to = $emailAddress;
				} else {
					// add to-address
					$this->to .= ", " . $emailAddress;
				}
				break;
			}
			case Email::CC: {
				if (empty($this->cc) == true) {
					// set cc-address
					$this->cc = $emailAddress;
				} else {
					// add cc-address
					$this->cc .= ", " . $emailAddress;
				}
				break;
			}
			case Email::BCC: {
				if (empty($this->bcc) == true) {
					// set bcc-address
					$this->bcc = $emailAddress;
				} else {
					// add bcc-address
					$this->bcc .= ", " . $emailAddress;
				}
				break;
			}
			case Email::FROM: {
				// set from-address
				$this->from = $emailAddress;
				break;
			}
			case Email::REPLYTO: {
				// set replyto-address
				$this->replyTo = $emailAddress;
				break;
			}
		}
	}
	
	/**
	 * Setter:
	 * Set subject
	 * 
	 * @param string $subject
	 */
	public function setSubjet($subject) {
		
		// set subject
		$this->subject = $subject;
	}
	
	/**
	 * Function:
	 * Replace all given placeholders with given text
	 * 
	 * @param string $placeholder
	 * @param string $text
	 */
	public function setPlaceholder($placeholder, $text) {
	
		// replace all instances of placeholder with text
		$this->mailTemplate = str_replace($placeholder, $text, $this->mailTemplate);
	}
	
	/**
	 * Function:
	 * Create mail-header
	 * 
	 * @return string mail-header
	 */
	private function createMailHeader() {
		
		if ($this->mailType == Email::HTML) {
			// set header for html-emails
			$mailHeader = 'MIME-Version: 1.0' . "\r\n";
			$mailHeader .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		}

		// Additional headers
		$mailHeader .= 'From: ' . $this->from . "\r\n";
		if (!empty($this->replyTo)) {
			$mailHeader .= 'Reply-To: ' . $this->replyTo . "\r\n";
		}
		if (!empty($this->cc)) {
			$mailHeader .= 'Cc: ' . $this->cc . "\r\n";
		}
		if (!empty($this->bcc)) {
			$mailHeader .= 'Bcc: ' . $this->bcc . "\r\n";
		}
		$mailHeader .= 'X-Mailer: PHP/' . phpversion();
		
		return $mailHeader;
	}
	
	/**
	 * Function:
	 * Attempt to send email
	 * 
	 * @throws Exception if error occurred while sending email
	 */
	public function sendMail() {
		
		// create mail header
		$mailHeader = $this->createMailHeader();
		
		// attempt to send email
		if (mail($this->to, $this->subject, $this->mailTemplate, $mailHeader) == false) {
			// throw exception when sending was unsuccessful
			throw new Exception("Email wasn't able to be send");
		}
	}
}
?>