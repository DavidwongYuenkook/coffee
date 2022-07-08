<!DOCTYPE html>

<html>
<head>
	<?php
        include 'header.html';
    ?>
	<style>
		p{
			color:#BB6036;
			font-weight:bold;
		}
	
	</style>
	
	
	
</head>
<body>
	<div id="page">
		<div>
			<?php
				$active_menu = "menu";
				include 'headerMenu.php';
			?>
		
			
			<div id="body">
				<div id="figure">
					<img src="images/coffeeee.jpg" alt="Image"width="1000" height="250">
					<span style="color:#73926C; text-align:center;">Menu</span>
				</div>
				<br><br>
				<div>
					<div class = "title">
                
                   <h2 style="text-align:center;"> List of Breakfast food </h2>
				   <h3 style="text-align:center;"> Begin to open at 6.30 a.m to 11.00 a.m.Here are some photo.There are a variety of choice.</h3>
                 </div>
					
					<div>
						<ul>
							<li>
									<img  src="images/cake.jpg"  title="Rs 120" width="220px" height="208px"alt="Image">
								
								<div>
									
									<p>
										Price=RS120
									</p>
									
									<p>
									     croissant
									</p>
								</div>
							</li>
							<li>
								
									<img src="images/Capuiccino.jpg" title="Rs 100" width="220px" height="208px"alt="Image"></a>
									
								
								<div>
									
									<p>
										Price=RS100
									</p>
									<p>
									    Capuccino
									</p>
								</div>
							</li>
							<li>
								<img class="myImg" src="images/hot chocolate.jpg" title="Rs 50"width="220px"height="208px"alt="Image"></a>
								<div>
									
									<p>
										Price=Rs50
									</p>
									<p>
									     Hot Chocolate
									</p>
								</div>
							</li>
							<li>
								<img class="myImg" src="images/Chocolatemilkshake.jpg" title="Rs 60" width="220px"height="242px"alt="Image"></a>
								<div>
									
									<p>
										Price=RS60
									</p>
									<p>
									   Milkshake
									</p>
								</div>
							</li>
							<li>
								<img class="myImg" src="images/spongy cake.jpg" title="Rs 90"width="220px"height="242px"alt="Image"></a>
								<div>
									
									<p>
										Price=rs90
									</p>
									<p>
									    Spongy cake
									</p>
								</div>
							</li>
							<li>
								<img class="myImg" src="images/teawithoutmilk.jpg" title="Rs 115"width="220px"height="242px"alt="Image"></a>
								<div>
									
									<p>
										Price=Rs115
									</p>
									<p>
									    Tea
									</p>
								</div>
							</li>
							<li>
								<img class="myImg" src="images/Coffeee.jpg" title="Rs 70" width="220px"height="208px"alt="Image"></a>
								<div>
									
									<p>
										Price=Rs70
									</p>
									<p>
									    Nespresso
									</p>
								</div>
							</li>
							<li>
								<img class="myImg" src="images/Cakewithfruit.jpg" title="Rs 100"width="220px"height="208px" alt="Image"></a>
								<div>
									
									<p>
										Price=Rs100
									</p>
									<p>
									    Chocolate Cake
									</p>
								</div>
							</li>
							<li>
								<img class="myImg" src="images/tea.jpg" title="Rs 115" width="220px"height="208px"alt="Image"></a>
								<div>
									
									<p>
										Price=RS115
									</p>
									<p>
									    Tea with milk
									</p>
								</div>
							</li>
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
	<div class="footer">
	</ul>
			
				<script src="js/jquery.nicescroll.js"></script>
</body>
</html>