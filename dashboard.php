<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/dashboard.css">
		<title></title>
	</head>

	<body>
		<!-- Slideshow container -->
		<div class="slideshow-container text-center">
		  <h1 style="text-align:center">Welcome to KaPOPer!<h1>
		  <!-- Full-width images with number and caption text-->
		  <div class="mySlides fade">
			<img src="img/loona1_3.jpg" class="img-fluid" style="height:500px">
		  </div>

		  <div class="mySlides fade">
			<img src="img/loonaoec.jpg" class="img-fluid" style="height:500px">
		  </div>

		  <div class="mySlides fade">
			<img src="img/loonayyxy.jpg" class="img-fluid" style="height:500px">
		  </div>
		  <div class="mySlides fade">
			<img src="img/loonaicecream.png" class="img-fluid" style="height:500px">
		  </div>
		</div> 
		
		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none"; 
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1} 
			slides[slideIndex-1].style.display = "block"; 
			setTimeout(showSlides, 2000); // Change image every 2 seconds
		}
		</script>
		
	</body>
</html>

