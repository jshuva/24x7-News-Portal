<?php
echo "News Successfully Reported";
 
?>
<form action="show_reported_news.php" method="post">
<input type='submit' value = 'show the reported news' />
</form>
<?php 
		$heading	=	$_POST['heading'];
		$desctiption =	$_POST['description'];
		$image	=	$_POST['image'];
		$type	=	$_POST['type'];
		//echo $heading. "<br>". $desctiption . "<br>" . $image ."<br>". $type;		
		
	
	?>
	
<?php require "functions.php" ?>
<?php
	$conn = connect(); 
	$t=select_query("insert into reported_news (r_news_id,r_heading,r_description,r_image,r_news_type) 
		   values(reported_news_sequence.nextval,:hd,:des,:img,:tp)", 
		   array('hd' => $heading, 'des' => $desctiption , 'img' => $image, 'tp' => $type),$conn) ;
	
	 

 ?>

 
	
	
