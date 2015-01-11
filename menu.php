<?php require "header.php" ?>
		<?php 
		
		$c = select_query("SELECT * FROM news WHERE news_type =:ty",
							array('ty' => $_GET['type']) , $conn) ;
							
		
		
			foreach($c as $cd){
			 	?>
		<div class = "menu_wrap">
			<div class = "menu_pic">
				<img height="200px" width ="200px"  src="img/<?php echo $cd[3]; ?>.jpg" />
			</div>
			
			<div  class="head">
			<a href="newsdes.php?news_id=<?php echo $cd[0]; ?>" style="color : #800000 ; text-decoration: blink">
			<?php echo"<h4>".$cd[1]."</h4>"."</br>"; 
				$pie = substr($cd[2], 0, 648);
						echo $pie."....." ;	
			?>
			</div>
			
			
		
		</div>
		
		
		<?php 
		  }
		?>
		
<?php require "footer.php" ?>