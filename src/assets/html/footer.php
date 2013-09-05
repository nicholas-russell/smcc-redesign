<br/>
<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 hidden-sm hidden-xs">
					<h4>About Us</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis libero nunc, adipiscing tempor semper eget, molestie id nunc. Etiam varius fermentum diam, et lacinia sem bibendum consectetur. Praesent ut rhoncus mi. Morbi sollicitudin metus eu justo sodales convallis imperdiet sit amet augue. Fusce nec commodo massa, in semper mi. Vestibulum aliquet sapien lobortis tortor dapibus lobortis. In porta dignissim mi, vitae scelerisque dolor dictum ac. Mauris vel congue tellus, vitae bibendum leo.

					</p>
				</div>
				<div class="col-md-4" id="contactus">
					<h4>Contact Us</h4>

					<address>
						<strong>St Marys Cathedral College</strong><br>
					  2 St Mary's Rd<br>
					  Sydney NSW 2000<br>
					  <abbr title="Phone">P:</abbr> (02) 9235 0500
					</address>
				</div>
				<div class="col-md-4">
					<h4>School News</h4>
					<?php
						include_once('assets/php/scraper.php');
						$page = new pageScraper('4'); // Gets the page id from ?pageId= in the url
						$page->getNotices();
					?>
					
				</div>
			</div>
		</div>
	</div>
	<div class="push"></div>
		<!--Javascript at the bottom to reduce loading time-->
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/jquery.flexslider.js"></script>
	<script>
		 
		 var $url = 'page.php?pageId=';
		    $('li a').each(function(){
		  $(this).attr('href', $url + $(this).attr('data-pageId'));
		});
		
	</script>