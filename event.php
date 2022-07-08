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
				$active_menu = "event";
				include 'headerMenu.php';
			?>
			<div id="body">
				<div id="figure">
					<img src="images/coffeeee.jpg" alt="Image"width="1000" height="250">
					<span style="color:#73926C; text-align:center;">Event</span>
				</div>
				<br><br>
				<div>
					
					<div class="container"><input type="date" width="5" ></div>
					<div id="blog">
						
						<ul>
							<li>
								<div>
									<div>
										<span class="month">June 2022</span><span class="date">02</span>
									</div>
									<h1><a href="#">This month 10% discount on coffee</a></h1>
								</div>
								<p>
									We believe that great coffee isn’t just a luxury; it’s a daily essential.
								</p>
								
							</li>
							<li>
								<div>
									<div>
										<span class="month">Nov 2022</span><span class="date">30</span>
									</div>
									<h1><a href="#">Buy one coffee, get a croissant free</a></h1>
								</div>
								<p>
									Bring more friends
								</p>
								
							</li>
							<li>
								<div>
									<div>
										<span class="month">Nov 2011</span><span class="date">20</span>
									</div>
									<h1><a href="#">20% free for couples</a></h1>
								</div>
								<p>
									Come for a date
								</p>
								
							
						</ul>
						
						<ul>
							<li><img src="images/Capuiccino.jpg"width="150" height="160"/></li>
						</ul>
						
						<ul>
							<li><img src="images/Coffeee.jpg"width="150" height="160"/></li>
						</ul>
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
	</div>
</body>
</html>