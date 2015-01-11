<?php require "functions.php" ?> 
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/newsstyle.css">

<?php $conn = connect(); ?>

<html>
<head>

<script type="text/javascript">
	var image1 = new Image()
	image1.src = "img/news-1.jpg"
	var image2 = new Image()
	image2.src = "img/news-2.jpg"
	var image3 = new Image()
	image3.src = "img/news-3.jpg"
	var image4 = new Image()
	image4.src = "img/news-4.jpg"
	var image5 = new Image()
	image5.src = "img/news-5.jpg"
	var image6 = new Image()
	image6.src = "img/news-6.jpg"
	var image7 = new Image()
	image7.src = "img/news-7.jpg"
	var image8 = new Image()
	image8.src = "img/news-8.jpg"
	var image9 = new Image()
	image9.src = "img/news-9.jpg"
	var image10 = new Image()
	image10.src = "img/news-10.jpg"
	var image11 = new Image()
	image11.src = "img/news-11.jpg"
	
</script>

<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<title> 24x7 News Portal </title>
</head>
<center>
<body>

	<div class = "main_wraper" >
				
				
				
				
					<!-- header start -->
					

					
																
		<div  class = "left_header">
			<div class = "bold_font"> <b> 24x7 </b> </div>
		
			<div class = "italic_font"> News portal</div>
		</div>

		
		
		
		
		<div class = "right_header">
			<b>ADMIN</b>
			<form method='post' action='admin.php'>
			<?php
				$rows = 2;
				$cols =2;
		
				echo "<table border ='2' cellspacing = '0' cellpadding = '20' bgcolor = 'black' > " ;
	
				for ($tr = 1 ; $tr <= $rows ; $tr++) {
				echo "<tr>";
		
					for ($td = 1 ; $td <= $cols ; $td++) {
						if ($td == 1 && $tr == 1){
							echo "<td> <font size = '4' color = 'white'> User Name </font></td>";
							echo "<td>"; echo "<input type='text' name='username' /> " ; echo  "</td>";
							}
				
						if ($td == 1 && $tr == 2){
							echo "<td> <font size = '4' color = 'white'> password </font></td>";
							echo "<td>"; echo "<input type='password' name='password'/> " ; echo  "</td>";
							}
				
											
				
					}
				
				echo "</tr>";
	
				}
	
	echo "</table>";
	
	echo "<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='submit' value = 'Log In' /> " ;
	
	?>
</form>
			
			
					
		</div>
				
				
				
				
				
				
		<div class = "right_header">
			<b>REPORTER</b>
			<form method='post' action='reporter.php'>
			<?php
				$rows = 2;
				$cols =2;
		
				echo "<table border ='2' cellspacing = '0' cellpadding = '20' bgcolor = 'yellow' > " ;
	
				for ($tr = 1 ; $tr <= $rows ; $tr++) {
				echo "<tr>";
		
					for ($td = 1 ; $td <= $cols ; $td++) {
						if ($td == 1 && $tr == 1){
							echo "<td> <font size = '4' color = 'black'> User Name </font></td>";
							echo "<td>"; echo "<input type='text' name='username'/> " ; echo  "</td>";
							}
				
						if ($td == 1 && $tr == 2){
							echo "<td> <font size = '4' color = 'black'> password </font></td>";
							echo "<td>"; echo "<input type='password' name='password' /> " ; echo  "</td>";
							}
				
											
				
					}
				
				echo "</tr>";
	
				}
	
	echo "</table>";
	
	echo "<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='submit' value = 'Log In' /> " ;
	
	?>
</form>
			
			
					
		</div>
				
				
				
				
				
		<div class = "menu_bar">
		
						
				<div class = "hor_list"><a href="24x7.php" style="color : white ; text-decoration: blink"> Home </a></div>
				<div class = "hor_list"><a href="menu.php?type=Bangladesh" style="color : white ; text-decoration: blink"> Bangladesh </a></div>
				<div class = "hor_list"><a href="menu.php?type=Politics" style="color : white ; text-decoration: blink"> Politics </a></div>
				<div class = "hor_list"><a href="menu.php?type=Economy" style="color : white ; text-decoration: blink"> Economy </a></div>
				<div class = "hor_list"> <a href="menu.php?type=World" style="color : white ; text-decoration: blink"> World </a></div>
				<div class = "hor_list"><a href="menu.php?type=Technology" style="color : white ; text-decoration: blink"> Technology </a></div>
				<div class = "hor_list"><a href="menu.php?type=Science" style="color : white ; text-decoration: blink"> Science </a> </div>
				<div class = "hor_list"><a href="menu.php?type=Environment" style="color : white ; text-decoration: blink"> Environment </a></div>
				<div class = "hor_list"><a href="menu.php?type=Health" style="color : white ; text-decoration: blink"> Health </a></div>
				<div class = "hor_list"><a href="menu.php?type=Lifestyle" style="color : white ; text-decoration: blink"> Lifestyle </a></div>
				
								
		</div>
		
		<div class = "breaking_news"><b>Breaking News</b></div>
		
		<div class = "latest_news">
			<?php $n = $conn->query("SELECT * FROM news where rownum <= 5 ORDER BY news_id DESC"); ?>
			
			<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"">				
				<?php foreach($n as $a){ ?>
						
						<a href="newsdes.php?news_id=<?php echo $a[0]; ?>" style="color : #006400 ; text-decoration: blink">
				
							<?php echo "&nbsp;&nbsp;#&nbsp;&nbsp; ".$a[1]; ?>
						
						</a>						
						
						<?php
							}
						?>
				</marquee>
									
		</div>
							
							
							
							
							<!-- header end -->