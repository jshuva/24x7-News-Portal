<?php require "header.php" ?>
							
							
							<!-- left body start -->
		
		
		
		
		
			
		<div class = "left_wraper">
			
			
			
<!--	 	
			
			<div class = "picture">
				<div id="cp_widget_6122be3e-60c2-489e-9c87-86b5b983c53c">...</div><script type="text/javascript">
					var cpo = []; cpo["_object"] ="cp_widget_6122be3e-60c2-489e-9c87-86b5b983c53c"; cpo["_fid"] = "A4JAZZLksvn6";
					var _cpmp = _cpmp || []; _cpmp.push(cpo);
					(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
					cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
					var c = document.getElementsByTagName("script")[0];
					c.parentNode.insertBefore(cp, c); })(); </script><noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Hosting</a> solution.</noscript>				
			</div> 
			
			
			
-->

 
			<div class = "picture">
				
				<p><img src="img/news-1.jpg" width="670" height="500" name="slide" /></p>
				<script type="text/javascript">
						var step=1;
						function slideit()
						{
							document.images.slide.src = eval("image"+step+".src");
							if(step<10)
								step++;
							else
								step=1;
							setTimeout("slideit()",2500);
						}
						slideit();
				</script>
				
			</div>
	


	



	<div class = "bar_news_wraper"> 
				<div class = "bar"> </div>
				Advertise
			</div>
			
			<div class = "bar_news_wraper"> 
				<div class = "bar"> </div>
				Advertise
			</div>
			
			<div class = "bar_news_wraper"> 
				<div class = "bar"> </div>
				Advertise
			</div>
			
			<div class = "bar_news_wraper"> 
				<div class = "bar"> </div>
				Advertise
			</div>	
			
			
			
			
			<div class = "left_advertise1"> Advertise </div>
			<div class = "left_advertise2"> Advertise </div>
			
			
			
	<?php $pi=$conn->query("SELECT * FROM news where rownum <= 5"); ?>
			
			
			<?php foreach($pi as $p) {?>
			<div class = "pic_news_wraper"> 
				
				<div class = "pic">

					<img height="110px" width ="110px"  src="img/<?php echo $p[3]; ?>.jpg" />
					
				</div>
				<a href="newsdes.php?news_id=<?php echo $p[0]; ?>" style="color : #800000 ; text-decoration: blink">
					<?php echo"<h4>".$p[1]."</h4>";
						$piece = substr($p[2], 0, 200);
						echo $piece."....." ;
					 
					?>
				</a>
				
				
			</div>
			<?php 
				}
			?>
			

			

			
		
		</div>
		

		
		
		
								<!-- left body end -->




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


			
			<div class = "right_news_bar"><b> Most Read </b> </div>	
			
		<?php $mp = $conn->query("SELECT * FROM news WHERE news_id BETWEEN 2 AND 10"); ?>
			<?php foreach($mp as $m) {?>
				
				<div class = "right_news"> 
				
					<a href="newsdes.php?news_id=<?php echo $m[0]; ?>" style="color : #660066; text-decoration: blink">
						<?php  
							
							echo $m[1];					 
						?>
					</a>
				
				</div>
			
			<?php 
				}
			?>
			
			
			
			
			<div class = "right_news_bar"><b> Daily Another News </b> </div>	
			
			
			<?php $dn = $conn->query("SELECT * FROM news where rownum<=9 ORDER BY news_id DESC"); ?>
			<?php foreach($dn as $d) {?>
				
				<div class = "right_news"> 
				
					<a href="newsdes.php?news_id=<?php echo $d[0]; ?>" style="color : #660066; text-decoration: blink">
						<?php  
							
							echo $d[1];					 
						?>
					</a>
				
				</div>
			
			<?php 
				}
			?>
														
								
		</div>						
								
								
								
								<!-- right body end -->
								
								
								<!-- bottom body start -->
								
								
								
		
		<div class = "bottom_pic">
		
			<img height="100%" width="100%" src="24x7.jpg" />
		
		</div>
		
		<div class = "facebook"> 
		
			<div class = "facebook_bar">
			<a href="http://fb.com/" style="color : WHITE; text-decoration: none " > <b> Facebook <b> </div> </a>
			<img src="facebook.jpg" width ="315" height ="360"]/>
		
		</div>
		
		
		
		
		
		
								
								<!-- bottom body end -->
								

								
<?php require "footer.php" ?>