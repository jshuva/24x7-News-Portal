 <?php require "header.php" ?>
		<?php 
		
		$b = select_query("SELECT * FROM news WHERE news_id =:id",
							array('id' => $_GET['news_id']) , $conn) ;
							
		
		foreach($b as $ab){
			
			 	?>
					
		
		<div class = "main_wrap"> 
			
			
			<div  class="head">
			<?php echo"<h2>".$ab[1]."</h2>"."</br>"; 
					
			?>
			</div>
			
			<div class = "pict">
				<img height="300px" width ="400px"  src="img/<?php echo $ab[3]; ?>.jpg" />
			</div>
					
			
					<?php echo $ab[2];
				}
			?>


			
			
			
			
		</div>
		
								<!-- right body start -->
								
								

								
								
		<div class = "right_wraper"> 
		<?php $sp = $conn->query("SELECT * FROM news where rownum<=4 ORDER BY news_id DESC"); ?>	
			<div class = "spot_light_bar"><b> Spot Light</b> </div>
			
		<?php foreach($sp as $s) {?>
			<div class = "spot_light"> 			
				<div class = "spot_light_pic"> 

					<img height="100px" width ="100px"  src="img/<?php echo $s[3]; ?>.jpg" />	

				</div>
				<a href="newsdes.php?news_id=<?php echo $s[0]; ?>" style="color : nevy ; text-decoration: blink">
					<?php  
						
						echo"<h4>".$s[1]."</h4>"."</br>";					 
					?>
				</a>
			</div>
		
		<?php 
			}			
		?>	
		
			<div class = "right_advertise1"> Advertise </div>
			<div class = "right_advertise2"> Advertise </div>
														
								
		</div>						
								
								
								
								<!-- right body end -->


<?php require "footer.php" ?>

