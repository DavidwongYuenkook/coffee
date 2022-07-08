<!DOCTYPE html>

<html>
<head>
	<?php
        include 'header.html';
      ?>
</head>
<body>
	<div id="page">
		<div>
			<?php
				$active_menu = "locations";
				include 'headerMenu.php';
			?>
			<div id="body">
				<div id="figure">
				<img src="images/coffeeee.jpg" alt="Image"width="1000" height="250">
				<span style="color:#73926C; text-align:center;">Our Location</span>
				</div>
				<br><br>
				<div>
					
					<div>
						
							<h1 style="text-align:center;">Welcome to our coffee shop</h1>
							<h3 style="text-align:center;">You can find our location as shown on the map below</h3>
							
						
					<iframe src="http://maps.google.com/?q=mauritius/Moka&output=embed" class="map" width="1200" height="500" style="border:0" allowfullscreen="">
             </iframe>
					
						
					</div>
				</div>
			</div>
			<div id="footer">
				<?php
					include 'footer.php';
				?>
			</div>
		</div>
	</div>
</body>
</html>