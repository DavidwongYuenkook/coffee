<!DOCTYPE html>
<html>
<head>
	<?php
        include 'header.html';
      ?>
	
	
	<script>
		function showSlides() {
			let i;
			let slides = document.getElementsByClassName("mySlides");
			let dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
			 }
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		
		
		
		function showIngredients(){
			
			var button=document.getElementById("ingredientsButton");
			var div=document.getElementById("ingredients");
			button.style.display="none";
			div.style.display="block";
		}
		function hideIngredients(){
			
			var button=document.getElementById("ingredientsButton");
			var div=document.getElementById("ingredients");
			button.style.display="block";
			div.style.display="none";
		}
	</script>
</head>
<body>
	<div id="page">
		<div>
			<?php
				$active_menu = "home";
				include 'headerMenu.php';
			?>
			 
                    >
			<div id="body">
				<div id="figure">
					<img src="images/coffeeee.jpg" alt="Image"width="1000" height="250">
					<span style="color:#73926C;text-align:center;"}>Home</span>
				</div>
				<div id="featured">
				<h1 style="text-align:center;">Best coffee shop in Mauritius</h1>
				<br><br>
					
					
						
					<div class="slideshow-container" >

							<div class="mySlides fade">
							  <div class="numbertext">1 / 3</div>
							  <img src="images/Cakewithfruit.jpg" style="width:80%">
							  <div class="text" style="color:white;font-weight:bold;">Cake with fruit</div>
							</div>

							<div class="mySlides fade">
							  <div class="numbertext">2 / 3</div>
							  <img src="images/cake.jpg" style="width:80%">
							  <div class="text" style="color:white;font-weight:bold">Cake</div>
							</div>

							<div class="mySlides fade">
							  <div class="numbertext">3 / 3</div>
							  <img src="images/Coffeee.jpg" style="width:80%">
							  <div class="text" style="color:white;font-weight:bold">Expresso Coffee</div>
							</div>

							</div>
							<br><br>

							<div style="text-align:center">
							<br>
							  <span class="dot"></span> 
							  <span class="dot"></span> 
							  <span class="dot"></span> 
							</div>

							<script>
								let slideIndex = 0;
								showSlides();
							</script>
					
					
					
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<button onclick="showIngredients()" id="ingredientsButton" style="float:left; display:block;">More Information about our coffee!</button>
				<div class="section" id="ingredients" style="display:none;">
					
						<h2>
							We use powdered coffee and reason to love our coffee.
							Everything revolves around consistency and newness of our product and offer the best product and if you want to know more about it.MyCoffee shop is a small company which opened its door on 10th August 2007. Send a message on contact.
						</h2>
						<br><br>
						<button onclick="hideIngredients()" id="hideButton" style="float:right; display:block; background-color:blue;">Close this dialog!</button>
						<br><br>
				</div>
			</div>
			
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div id="footer">
				<?php
					include 'footer.php';
				?>
				 <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
					
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.nicescroll.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>-->
</body>
</html>