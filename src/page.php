<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php
		require('api.php');
		$scraper = new Scraper();
		$scraper->getPage($_GET['pageId']);
		$scraper->getNotices();
		$scraper->getSideBarImage($_GET['pageId']);
		$scraper->getRelatedLinks($_GET['pageId']);
	?>
</body>
</html>