<?php
require_once 'Xml2Assoc.php';

/**
 * Class containing all portfolio information
 * 
 * @author Jay Brahms
 */
class Portfolio {
	
	/**
	 * Members
	 */
	private $portfolio = null;

	/**
	 * Standard Construtor:
	 * Used to create Portfolios-object from given path-name
	 * 
	 * @param string $xmlFilePath
	 */
	public function __construct($xmlFilePath) {
		
		// create a new XML2Assoc class
		$assoc = new Xml2Assoc();
		
		// retrieve portfolios from XML2Assoc class
		$this->portfolio = $assoc->parseFile($xmlFilePath, true);
	}
	
	/**
	 * Getter:
	 * Retrieve specific portfolio for given short-name
	 * 
	 * @param string $shortName
	 * @return array requested portfolio
	 */
	public function getSinglePortfolio($shortName) {
		
		// initializations
		$singlePortfolio = null;
		
		// search for portfolio using given short-name
		foreach ($this->portfolio["portfolios"]["portfolio"] as &$portfolio) {
			if ($portfolio["shortName"] == $shortName) {
				$singlePortfolio = $portfolio;
			}
		}
		
		// return found portfolio
		return ($singlePortfolio);
	}
	
	/**
	 * Getter:
	 * Retrieve list portfolios for given category
	 * 
	 * @param string $category
	 * @return array list of requested portfolios
	 */
	public function getPortfolioByCategory($category) {

		// initializations
		$portfolioByCategory = [];
		
		// search for portfolio using given category
		foreach ($this->portfolio["portfolios"]["portfolio"] as &$portfolio) {
			if ($portfolio["category"] == $category) {
				$portfolioByCategory[] = $portfolio;
			}
		}
		
		// return found portfolio
		return ($portfolioByCategory);
	}
	
	
	/**
	 * Getter:
	 * Retrieve marker of existence of any portfolios for given category
	 * 
	 * @param string $category
	 * @return boolean marker of existence
	 */
	public function hasPortfolioOfCategory($category) {
		
		// initializations
		$categoryFound = false;
		
		// search for portfolio using given category
		foreach ($this->portfolio["portfolios"]["portfolio"] as &$portfolio) {
			if ($portfolio["category"] == $category) {
				$categoryFound = true;
				break;
			}
		}
		
		// return
		return ($categoryFound);
	}
}
?>