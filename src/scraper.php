<?php

include('simple_html_dom.php');

class pageScraper {

	public $pageUrl;

	function __construct($pageId) {
		$this->pageUrl = 'http://www.smccsydney.catholic.edu.au/page/display/id/' . $pageId;
	}

	function getPage() {
		$externalHtml = file_get_html($this->pageUrl);
		foreach($externalHtml->find('div#maincol') as $e)
    		echo $e->innertext;
	}

	function getNotices() {
		$externalHtml = file_get_html('http://www.smccsydney.catholic.edu.au/');
		foreach ($externalHtml->find('div#message') as $e) {
			echo $e->innertext;
		}
	}

	function getRelatedLinks() {
		$externalHtml = file_get_html($this->pageUrl);
		foreach ($externalHtml->find('div#relatedlinks') as $e) {
			echo $e->innertext;
		}
	}

	function getSideImage() {
		$externalHtml = file_get_html($this->pageUrl);
		foreach ($externalHtml->find('div#sidecol img') as $e) {
			echo $e->src;
		}
	}




}

$page = new pageScraper($_GET['pageId']);
$page->getPage();
$page->getSideImage();
$page->getNotices();
$page->getRelatedLinks();

?>