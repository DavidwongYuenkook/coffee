<div id="header">
				<a href="index.php">
					<figure>
						<img src="images/logo5.png" >
						
					</figure>
				</a>
				
				<ul>
					
					<?php
						if ($active_menu=="home"){
					?>
						<li class="current">
							<a href="index.php">Home</a>
						</li>
					<?php	
						}
						else{
					?>
						<li>
							<a href="index.php">Home</a>
						</li>
					<?php
						}
					?>
					
					<?php
						if ($active_menu=="menu"){
					?>
						<li class="current">
							<a href="menu.php">Menu</a>
						</li>
					<?php	
						}
						else{
					?>
						<li>
							<a href="menu.php">Menu</a>
						</li>
					<?php
						}
					?>
					
					
					<?php
						if ($active_menu=="locations"){
					?>
						<li class="current">
							<a href="locations.php">Locations</a>
						</li>
					<?php	
						}
						else{
					?>
						<li>
							<a href="locations.php">Locations</a>
						</li>
					<?php
						}
					?>
					
					<?php
						if ($active_menu=="event"){
					?>
						<li class="current">
							<a href="event.php">Event</a>
						</li>
					<?php	
						}
						else{
					?>
						<li>
							<a href="event.php">Event</a>
						</li>
					<?php
						}
					?>
					
					<?php
						if ($active_menu=="contact"){
					?>
						<li class="current">
							<a href="contact.php">Contact</a>
						</li>
					<?php	
						}
						else{
					?>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					<?php
						}
					?>
					
					
				</ul>
				
</div>