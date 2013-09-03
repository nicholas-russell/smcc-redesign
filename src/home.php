<!DOCTYPE html>
<html lang="en">
<head>
	<title>SMCC</title>
<?php
	
	require('assets/html/head.html');
	
?>
</head>
<body>
<?php
	
	require('assets/html/navbar.html');
	
?>
	<div id="body">
		<div class="container" id="bodycontainer">
			
			<div class="row">
				<div class="col-md-12">
					<div class="flexslider" id="slider">
					<ul class="slides">
						<li><img src="#" data-src="assets/images/slide1.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide2.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide3.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide2.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide3.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide4.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide5.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide6.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide7.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide8.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide9.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide10.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide11.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide12.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide13.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide14.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide15.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide16.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide17.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide18.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide19.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide20.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide21.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide22.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide23.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide24.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide25.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide26.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide27.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide28.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide29.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide30.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide31.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide32.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide33.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide34.jpg" /></li>
						<li><img src="#" data-src="assets/images/slide35.jpg" /></li>
					</ul>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p id="leadparagraph" class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam lectus ac imperdiet posuere. Sed sed adipiscing ante. Aenean fringilla elit sed convallis imperdiet. Donec molestie imperdiet ante, ac scelerisque nisi feugiat in. Etiam id lacus ut lectus varius fermentum.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3 class="align-center">School Motto</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non lorem vitae diam venenatis porttitor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque vitae odio suscipit, aliquam lectus eget, euismod quam. Nam interdum ipsum id tincidunt viverra. Sed et pellentesque mauris. In at porta lorem. Aenean tortor nunc, blandit sed ipsum sit amet, vehicula dignissim ipsum. Ut sollicitudin justo in nisi vulputate pulvinar. Donec molestie pellentesque enim, ut vehicula risus malesuada vitae. Vestibulum fermentum lacinia dui, at tincidunt elit accumsan id.</p>
				</div>
				<div class="col-md-6">
					<h3 class="align-center">Contact Us</h3>
					<form role="form">
					<div class="form-group">
					    <label for="InputName">Name</label>
					    <input type="password" class="form-control" id="InputName" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Email address</label>
					    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
					  </div>
					  
					  <button type="submit" class="btn btn-primary float-right">Continue</button>
					</form>
				</div>
			</div>
			<br class="visible-sm visible-xs"/>
			<div class="row">
				<div class="col-md-4">
					<div class="infoBox" id="firstBox">
						<h4>Primary</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam lectus ac imperdiet posuere. Sed sed adipiscing ante. Aenean fringilla elit sed convallis imperdiet.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="infoBox" id="secondBox">
						<h4>Middle</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam lectus ac imperdiet posuere. Sed sed adipiscing ante. Aenean fringilla elit sed convallis imperdiet. </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="infoBox" id="thirdBox">
						<h4>Secondary</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam lectus ac imperdiet posuere. Sed sed adipiscing ante. Aenean fringilla elit sed convallis imperdiet. .</p>
					</div>
				</div>
			</div>
		</div>
		<div class="box"></div>
	</div>
	<?php
		require('assets/html/footer.php');
	?>
	</body>
</html>