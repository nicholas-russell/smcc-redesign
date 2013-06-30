<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php
		require('api.php');
		$page = new Page();
		$page->getPage($_GET['pageId']);
	?>
</body>
</html>