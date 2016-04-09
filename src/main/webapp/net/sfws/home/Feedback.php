<?php
require_once 'Xml2Assoc.php';

/**
 * Class containing one message of feedback
 * 
 * @author Jay Brahms
 */
class Message {
	
	/**
	 * Members
	 */
	private $id;
	private $approved;
	private $date;
	private $firstName;
	private $lastName;
	private $email;
	private $company;
	private $website;
	private $project;
	private $comment;
	
	/**
	 * Standard Constructor
	 */
	public function __construct() {

		// members initialization
		$this->approved = false;
		$this->comment = "";
		$this->company = "";
		$this->date = new DateTime();
		$this->email = "";
		$this->firstName = "";
		$this->id = 0;
		$this->lastName = "";
		$this->project = "";
		$this->website = "";
	}
	
	/**
	 * Getter:
	 * Retrieve approved marker
	 * 
	 * @return boolean approved marker
	 */
	public function isApproved() {
		return $this->approved;
	}

	/**
	 * Getter:
	 * Retrieve approved marker as string
	 * 
	 * @return string approved marker
	 */
	private function getApprovedAsString() {
		$returnValue = "false";
	
		if ($this->approved == true) {
			$returnValue = "true";
		}
	
		return $returnValue;
	}
	
	/**
	 * Getter:
	 * Retrieve comment
	 * 
	 * @return string comment
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Getter:
	 * Retrieve company
	 * 
	 * @return string company
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * Getter:
	 * Retrieve date
	 * 
	 * @return DateTime date (as time index)
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Getter:
	 * Retrieve email
	 * 
	 * @return string email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Getter:
	 * Retrieve firstname
	 * 
	 * @return string firstname
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Getter:
	 * Retrieve id
	 * 
	 * @return int id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Getter:
	 * Retrieve lastname
	 * 
	 * @return string lastname
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Getter:
	 * Retrieve project
	 * 
	 * @return string project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Getter:
	 * Retrieve website (url)
	 * 
	 * @return string website
	 */
	public function getWebsite() {
		return $this->website;
	}
	
	/**
	 * Setter:
	 * Sets approved marker
	 * 
	 * @param boolean $approved
	 */
	public function setApproved($approved) {
		$this->approved = $approved;
	}
	
	/**
	 * Setter:
	 * Sets comment
	 * 
	 * @param string $comment
	 */
	public function setComment($comment) {
		$this->comment = $comment;
	}
	
	/**
	 * Setter:
	 * Sets company
	 * 
	 * @param string $company
	 */
	public function setCompany($company) {
		$this->company = $company;
	}
	
	/**
	 * Setter:
	 * Sets date
	 * 
	 * @param DateTime $date
	 */
	public function setDate($date) {
		$this->date = $date;
	}
	
	/**
	 * Setter:
	 * Sets email
	 * 
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	 * Setter:
	 * Sets firstname
	 * 
	 * @param string $firstName
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}
	
	/**
	 * Setter:
	 * Sets id
	 * 
	 * @param int $id
	 */
	public function setId($id) {
		$this->id = $id;
	}
	
	/**
	 * Setter:
	 * Sets lastname
	 * 
	 * @param string $lastName
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}
	
	/**
	 * Setter:
	 * Sets project
	 * 
	 * @param string $project
	 */
	public function setProject($project) {
		$this->project = $project;
	}
	
	/**
	 * Setter:
	 * Sets website
	 * 
	 * @param string $website
	 */
	public function setWebsite($website) {
		$this->website = $website;
	}
	
	/**
	 * Function:
	 * Returns message as xml representation
	 * 
	 * @return string message as xml representation
	 */
	public function toXml() {
		// create xml from message
		$returnString = "<message id=\"" . strval($this->id) . "\" approved=\"" . $this->getApprovedAsString() . "\" date=\"" . date("Y-m-d", $this->date->getTimestamp()) . "\">" .
						"<firstname>" . $this->firstName . "</firstname>" .
						"<lastname>" . $this->lastName . "</lastname>" .
						"<email>" . $this->email . "</email>" .
						"<company>" . $this->company . "</company>" .
						"<website>" . $this->website . "</website>" .
						"<project>" . $this->project . "</project>" .
						"<comment>" .
						"<![CDATA[" . $this->comment . "]]>" .
						"</comment>" .
						"</message>";
		
		return ($returnString);
	}
}

/**
 * Class containing all feedback information
 * 
 * @author Jay Brahms
 */
class Feedback {

	/**
	 * Members
	 */
	private $feedback = null;
	private $xmlFilePath = "";
	
	/**
	 * Standard Construtor:
	 * Used to create Feedbacks-object from given path-name
	 *
	 * @param string $xmlFilePath
	 */
	public function __construct($xmlFilePath) {
		
		// member initialization
		$this->xmlFilePath = $xmlFilePath;
		$this->feedback = array();
	
		// create a new XML2Assoc class
		$assoc = new Xml2Assoc();
		// read xml into array
		$xmlArray = $assoc->parseFile($xmlFilePath, true);
		
		// check if array has more than one message
		if (key_exists(0, $xmlArray['feedback']['message'])) {
			// loo over all existing messages
			foreach ($xmlArray["feedback"]["message"] as &$xmlMessage) {
				// create new message
				$message = new Message();
				
				// copying values from xml into message
				if (strtoupper($xmlMessage["approved"]) == "TRUE") {
					$message->setApproved(true);
				} else {
					$message->setApproved(false);
				}
				$message->setComment($xmlMessage["comment"]);
				if (!is_null($xmlMessage["company"])) {
					$message->setCompany($xmlMessage["company"]);
				}
				$message->setDate(DateTime::createFromFormat('Y-m-d', $xmlMessage["date"]));
				$message->setEmail($xmlMessage["email"]);
				$message->setFirstName($xmlMessage["firstname"]);
				$message->setId(intval($xmlMessage["id"]));
				$message->setLastName($xmlMessage["lastname"]);
				if (!is_null($xmlMessage["project"])) {
					$message->setProject($xmlMessage["project"]);
				}
				if (!is_null($xmlMessage["website"])) {
					$message->setWebsite($xmlMessage["website"]);
				}					
				
				// adding message to feedback array
				$this->feedback[$message->getId()] = $message;
			}
		} else {
			// create new message
			$message = new Message();
			
			// copying values from xml into message
			if (strtoupper($xmlArray["feedback"]["message"]["approved"]) == "TRUE") {
					$message->setApproved(true);
				} else {
					$message->setApproved(false);
				}
			$message->setComment($xmlArray["feedback"]["message"]["comment"]);
			if (!is_null($xmlArray["feedback"]["message"]["company"])) {
				$message->setCompany($xmlArray["feedback"]["message"]["company"]);
			}
			$message->setDate(DateTime::createFromFormat('Y-m-d', $xmlArray["feedback"]["message"]["date"]));
			$message->setEmail($xmlArray["feedback"]["message"]["email"]);
			$message->setFirstName($xmlArray["feedback"]["message"]["firstname"]);
			$message->setId(intval($xmlArray["feedback"]["message"]["id"]));
			$message->setLastName($xmlArray["feedback"]["message"]["lastname"]);
			if (!is_null($xmlArray["feedback"]["message"]["project"])) {
				$message->setProject($xmlArray["feedback"]["message"]["project"]);
			}
			if (!is_null($xmlArray["feedback"]["message"]["website"])) {
				$message->setWebsite($xmlArray["feedback"]["message"]["website"]);
			}
			
			// adding message to feedback array
			$this->feedback[$message->getId()] = $message;
		}
	}

	/**
	 * Getter:
	 * Retrieve marker of existence of approved feedback
	 * 
	 * @return boolean Marker of Existence
	 */
	public function hasApprovedFeedback() {
	
		// initializations
		$feedbackFound = false;
	
		// search aproved feedback
		foreach ($this->feedback as &$feedback) {
			if ($feedback->isApproved()) {
				$feedbackFound = true;
				break;
			}
		}
	
		// return
		return ($feedbackFound);
	}

	/**
	 * Getter:
	 * Retrieve list approved feedback
	 *
	 * @return array List of aproved feedback
	 */
	public function getApprovedFeedback() {
	
		// initializations
		$approvedFeedback = array();
	
		// search aproved feedback
		foreach ($this->feedback as &$singleFeedback) {
			if ($singleFeedback->isApproved()) {
				$approvedFeedback[$singleFeedback->getId()] = $singleFeedback;
			}
		}

		// return found portfolio
		return ($approvedFeedback);
	}

	/**
	 * Getter:
	 * Retrieve marker of existence of feedbacks
	 *
	 * @return boolean Marker of Existence
	 */
	public function hasFeedbacks() {
	
		// initializations
		$feedbacksFound = false;
		
		if (!is_null($this->feedback)) {
			$feedbacksFound = true;
		}

		// return
		return ($feedbacksFound);
	}
	
	/**
	 * Getter:
	 * Retrieve list of all feedbacks
	 * 
	 * @return array list of all feedbacks
	 */
	public function getFeedbacks() {

		// return found portfolio
		return ($this->feedback);
	}
	
	/**
	 * Function:
	 * Add given message to feedback array and save locally
	 * 
	 * @param Message $message
	 * @throws Exception when error occured during saving locally
	 */
	public function addFeedback(&$message) {
		
		// set id for new message
		$message->setId($this->getNewMessageId());
		
		// add message to feedback array
		$this->feedback[$message->getId()] = $message;
	
		try {
			// save feedbacks locally
			$this->saveFeedbacks();
		} catch (Exception $e) {
			// throw new exception
			throw new Exception($e->getMessage());
		}
	}

	/**
	 * Function:
	 * Approve feedback by given ID and save locally
	 * 
	 * @param string $id
	 * @throws Exception when error occured during saving locally
	 */
	public function approveFeedback(&$id) {
		
		// set approve marker
		$this->feedback[$id]->setApproved();

		try {
			// save feedbacks locally
			$this->saveFeedbacks();
		} catch (Exception $e) {
			// throw new exception
			throw new Exception($e->getMessage());
		}
	}

	/**
	 * Function:
	 * Change specific feedback and save locally
	 * 
	 * @param Message $message
	 * @throws Exception when error occured during saving locally
	 */
	public function changeFeedback($message) {
		
		// set changes in message
		$this->feedback[$message->getId()]->setComment($message->getComment());
		$this->feedback[$message->getId()]->setCompany($message->getCompany());
		$this->feedback[$message->getId()]->setEmail($message->getEmail());
		$this->feedback[$message->getId()]->setFirstName($message->getFirstName());
		$this->feedback[$message->getId()]->setLastName($message->getLastName());
		$this->feedback[$message->getId()]->setProject($message->getProject());
		$this->feedback[$message->getId()]->setWebsite($message->getWebsite());
		
		try {
			// save feedbacks locally
			$this->saveFeedbacks();
		} catch (Exception $e) {
			// throw new exception
			throw new Exception($e->getMessage());
		}
		}
	
	/**
	 * Function:
	 * Delete feedback by ID and save locally
	 * 
	 * @param string $id
	 * @throws Exception when error occured during saving locally
	 */
	public function deleteFeedback($id) {
		
		// remove message with given key from feedback array
		unset($this->feedback[$id]);
		
		try {
			// save feedbacks locally
			$this->saveFeedbacks();
		} catch (Exception $e) {
			// throw new exception
			throw new Exception($e->getMessage());
		}
	}
	
	/**
	 * Function:
	 * Save feedback xml-file locally
	 * 
	 * @throws Exception when error occured saving locally
	 */
	private function saveFeedbacks() {

		// create new dom-document
		$doc = new DOMDocument();
		
		// load dom-document with xml-representation from feedbacks
		if ($doc->loadXML($this->toXml()) == false) {
			// throw new exception
			throw new Exception("Error while loading dom-document from xml-representation");
		}

		// save dom-document locally at given path
		if ($doc->save($this->xmlFilePath) == false) {
			// throw new exception
			throw new Exception("Error saving Feedback Xxml-file locally");
		}
	}
	
	/**
	 * Function:
	 * Calculates and returns id for new message
	 * 
	 * @return int new message id
	 */
	private function getNewMessageId() {
		
		// initializations
		$returnValue = 1;
		
		// check if array availalbe
		if (!is_null($this->feedback)) {
			// retreive last element of array
			$message = end($this->feedback);

			// calculate new id from last element
			$returnValue = $message->getId() + 1;
		}
		
		return ($returnValue);
	}
	
	/**
	 * Function:
	 * Returns feedbacks as xml representation
	 * 
	 * @return string feedbacks as xml representation
	 */
	public function toXml() {
		
		// create xml beginning
		$returnString = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" .
						"<feedback>";
		
		// loop over all messages
		foreach ($this->feedback as &$message) {
			// add message as xml to return string
			$returnString = $returnString . $message->toXml();
		}
		
		// add xml ending
		$returnString = $returnString .
						"</feedback>";
		
		return ($returnString);
	}
}