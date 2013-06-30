<?php 
include('simple_html_dom.php');

class Page {
	
	function getPage($pageId) {
		$externalHtml = file_get_html('http://www.smccsydney.catholic.edu.au/page/display/id/' . $pageId);
		foreach($externalHtml->find('div#maincol') as $e)
    		echo $e->innertext;
	}


}

class Notices {

	function getNotices() {
		$externalHtml = file_get_html('http://www.smccsydney.catholic.edu.au/');
		foreach ($externalHtml->find('div#message') as $e) {
			echo $e->innertext;
		}
	}
}

?>