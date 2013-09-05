<!DOCTYPE html>
<html lang="en">
<head>
	<title>SMCC</title>
<?php
	
	require('assets/html/head.html');
	include_once('assets/php/scraper.php');
	$page = new pageScraper($_GET['pageId']);
?>
</head>
<body>
<?php
	
	require('assets/html/navbar.html');
	
?>
	<div id="body">
		<div class="container" id="bodycontainer">
			
			<div class="row">
				<div class="col-md-8">
					<?php $page->getPage(); ?>
				</div>
				<div class="col-md-4">
					
					<img class="hidden-xs hidden-sm" id="sideImage" src="http://www.smccsydney.catholic.edu.au<?php $page->getSideImage();?>"/>
					
					<?php $page->getRelatedLinks();	?>
				</div>
			</div>
		</div>
	<?php
		require('assets/html/footer.php');
	?>
	</div>
	</body>
</html>
