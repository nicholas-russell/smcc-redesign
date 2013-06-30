<?php 
include('simple_html_dom.php');

class Scraper {
	function getPage($pageId) {
		$externalHtml = file_get_html('http://www.smccsydney.catholic.edu.au/page/display/id/' . $pageId);
		foreach($externalHtml->find('div#maincol') as $e)
    		echo $e->innertext;
	}
	function getNotices() {
		$externalHtml = file_get_html('http://www.smccsydney.catholic.edu.au/');
		foreach ($externalHtml->find('div#message') as $e) {
			echo $e->innertext;
		}
	}
	function getSideBarImage($pageId) {
		$externalHtml = file_get_html('http://www.smccsydney.catholic.edu.au/page/display/id/' . $pageId);
		foreach ($externalHtml->find('div#sidecol img') as $e) {
			echo $e->src;
		}
	}

}

?>