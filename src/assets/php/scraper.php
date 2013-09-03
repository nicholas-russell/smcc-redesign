<?php

include('simple_html_dom.php'); // The scraper

class pageScraper {

	public $pageUrl; // This Url will be used throughout the class as the page being scraped. 

	function __construct($pageId) {
		$this->pageUrl = 'http://www.smccsydney.catholic.edu.au/page/display/id/' . $pageId; // Sets the pageUrl as the pageId from construct and the url from smcc
	}

	function getPageTitle() { // Gets the title, used for the title tag
		$externalHtml = file_get_html($this->pageUrl);
		foreach($externalHtml->find('div.dynamiccontent h1 span') as $e) // the main columns h1 tag has a span inside
    		echo $e->plaintext; // Gets the plaintext
	}

	function getPage() { // Gets the main col of the page
		$externalHtml = file_get_html($this->pageUrl); // Gets the Html
		foreach($externalHtml->find('div#maincol') as $e) // div#maincol is the inner column
    		echo $e->innertext; // Gets the text with the h and p tags intact
	}

	function getNotices() { // Gets the front page notices
		$externalHtml = file_get_html('http://www.smccsydney.catholic.edu.au/'); // Front page
		foreach ($externalHtml->find('div#message') as $e) { // Gets the message 
			echo $e->innertext;
		}
	}

	function getRelatedLinks() {
		$externalHtml = file_get_html($this->pageUrl);
		foreach ($externalHtml->find('div#relatedlinks') as $e) {
			echo $e->innertext;
		}
	}

	function getSideImage() { // Gets the src of the img relative to server
		$externalHtml = file_get_html($this->pageUrl);
		foreach ($externalHtml->find('div#sidecol img') as $e) {
			echo $e->src;
		}
	}




}

$page = new pageScraper($_GET['pageId']); // Gets the page id from ?pageId= in the url
$page->getPage();
$page->getSideImage();
$page->getRelatedLinks();
$page->getPageTitle();
$page->getNotices();
?>