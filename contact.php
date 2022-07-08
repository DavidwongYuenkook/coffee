<!DOCTYPE html>

<html>
<head>
	
	<?php
        include 'header.html';
      ?>
	  <script>
			function sendMessage(){
				
				var name=document.getElementById("name").value;
				var subject=document.getElementById("subject").value;
				var email=document.getElementById("email").value;
				var message=document.getElementById("message").value;
				
				var divContent="<p>Hello "+name+"!<br><br>We have received the following message from you:<br>Subject:<br>"+subject+"<br><br>Message:<br>"+message+"<br><br>Thank you for contacting us! We will reply you on: "+email+"</p>";
				var form=document.getElementById("form");
				var sent=document.getElementById("afterMessage");
				form.style.display="none";
				sent.innerHTML=divContent;
				sent.style.display="block";
			
				
				
			}
	  </script>

</head>
<body>
	<div id="page">
		<div>
			<?php
				$active_menu = "contact";
				include 'headerMenu.php';
			?>
			<div id="body">
				<div id="figure">
					<img src="images/coffeeee.jpg" alt="Image"width="1000" height="250">
					
				</div>
				<div>
					
					<div class="container" id="form" style="display:block;">
						<h3 style="text-align:center;">Contact Us</h3>
				
						
							<div class="row">
								<label>Name</label>
								<input type="text" id="name" placeholder="Name.." />
							</div>
							<div class="row">
								<label>Subject</label>
								<input type="text" id="subject" placeholder="Subject.." />
							</div>
							<div class="row">
								<label>Email Address</label>
								<input type="email" id="email" placeholder="adrian@gmail.com" />
							</div>
							<div class="row">
								<label>Message</label>
								<textarea id="message" row="3"></textarea>
							</div>
							
							<button onclick="sendMessage()">Send Message</button>
							
						
					</div>
					
					<div id="afterMessage" style="display:none; color:#F15C3C;  font-family: 'Times New Roman'; font-weight:'bold'; font-size:'250px';">
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
<script src="js/jquery.nicescroll.js"></script>
	  
	  </body>
</html>