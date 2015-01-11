
 <?php require "functions.php" ?>
 
 
 <?php
$conn =connect();	
	
$result = $conn->query("SELECT * FROM reported_news ORDER BY r_news_id DESC");

?>
<table border = "1" cellspacing = "1" cellpadding = "20" >
	<tr>		
		<th>
			<?php echo "ID"; ?>
		</th>
		
		<th>
			<?php echo "Heading"; ?>
		</th>
		
		<th>
			<?php echo "Description"; ?>
		</th>
		
		<th>
			<?php echo "Image"; ?>
		</th>
		
		<th>
			<?php echo "Type"; ?>
		</th>
		
	</tr>
<?php	
foreach($result as $a)
	{	
?>
	<tr>
		<td>
			<?php echo $a[0]; ?>
		</td>
		
		<td>	
			<?php echo $a[1]; ?>
			
		</td>
		
		<td>
			<?php echo $a[2]; ?> 
		</td>
		
		<td>			 
			<?php echo $a[3]; ?>
		</td>
		
		<td>			 
			<?php echo $a[4]; ?>
		</td>
	</tr>
<?php 
	} 
?>
</table>
	