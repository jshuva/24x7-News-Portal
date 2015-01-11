<?php
if($_POST['username'] && $_POST['password']){
	$uname = $_POST['username'];
	$pass = $_POST['password'];
 }
?>

<?php require "functions.php" ?> 
<?php $conn = connect(); 

if($uname && $pass){

$r = select_query("SELECT * FROM admin WHERE admin_username =:name and admin_password =:pass ",
							array('name' => $uname , 'pass' => $pass), $conn) ;
}

if($r) {
	echo "Logged in Successfully"."<br><br>" ;						
?> 
<?php
$reporter = $conn->query("SELECT * FROM reporter ORDER BY reporter_id ASC");

$reported_news = $conn->query("SELECT * FROM reported_news ORDER BY r_news_id DESC");

$news = $conn->query("SELECT * FROM news ORDER BY news_id DESC");

echo "Add New Reporter : "."<br><br>" ;

?>



<form action="add.php" method="post">
 <table border = "1" cellspacing = "0" cellpadding = "10" >

	<tr>
		<th>
			<?php echo "Usename"; ?>
		</th>
		<th>
			<?php echo "Password"; ?>
		</th>
	</tr>
	<tr>
		<td>
			<input type='text' name='r_user' /> 
		</td>
		
		<td>	
			<input type='text' name='r_pass' /> 			
		</td>
	</tr>	
 </table>
 <br>
 <input type='submit' value = 'Add new Reporter' />
</form>






<br>
<?php echo "Reporters List : "."<br><br>" ; ?>

<table border = "1" cellspacing = "0" cellpadding = "10" >

	<tr>
		<th>
			<?php echo "ID"; ?>
		</th>
		
		<th>
			<?php echo "Usename"; ?>
		</th>
		<th>
			<?php echo "Operation"; ?>
		</th>
	</tr>

	
	<?php	
foreach($reporter as $rep)
	{	
?>
	<tr>
		<td>
			<?php echo $rep[0]; ?>
		</td>
		
		<td>	
			<?php echo $rep[1]; ?>			
		</td>
		<td>	
			<a href="delete.php?Reporter_id=<?php echo $rep[0]; ?>" 
			onclick="return confirm('Are you sure to delete ? ')"	style = "text-decoration: blink "> Delete  </a>			
		</td>
	</tr>
<?php 
	}
?>
	
</table>


<br><br>
<?php echo "Reporterted News List : "."<br><br>" ; ?>

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
		
		<th>
			<?php echo "Op1"; ?>
		</th>
		
		<th>
			<?php echo "Op2"; ?>
		</th>
		
	</tr>
<?php	
foreach($reported_news as $r_n)
	{	
?>
<form action="add.php" method="post">
	<tr>
		<td>
			<input type='text' name='r_id' value="<?php echo $r_n[0];?>" /> 
		</td>
		
		<td>
			<input type='text' name='r_heading' value="<?php echo $r_n[1];?>" /> 
		</td>
		
		<td>	
			<textarea rows="10" cols="30" name="r_description" > <?php echo $r_n[2];?> </textarea>
			
		</td>
		
		<td>
			<input type='text' name='r_image' value="<?php echo $r_n[3];?>" /> 
		</td>
		
		<td>			 
			<input type='text' name='r_type' value="<?php echo $r_n[4];?>" />
		</td>
		
		<td>	
			<input type='submit' value = 'Add' />			
		</td>
		
		<td>	
			<a href="delete.php?R_news_id=<?php echo $r_n[0]; ?>" 
			onclick="return confirm('Are you sure to delete ? ')"	style = "text-decoration: blink "> Delete  </a>			
		</td>
		
	</tr>
</form>
<?php 
	} 
?>
</table>





<br><br>
<?php echo "News List from the main Database : "."<br><br>" ; ?>


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
		
		<th>
			<?php echo "Option"; ?>
		</th>
	</tr>
<?php	
foreach($news as $n)
	{	
?>
	<tr>
		<td>
			<?php echo $n[0]; ?>
		</td>
		
		<td>	
			<?php echo $n[1]; ?>
			
		</td>
		
		<td>
			<?php echo $n[2]; ?> 
		</td>
		
		<td>			 
			<?php echo $n[3]; ?>
		</td>
		
		<td>			 
			<?php echo $n[4]; ?>
		</td>
		
		<td>	
			<a href="delete.php?News_id=<?php echo $n[0]; ?>" 
			onclick="return confirm('Are you sure to delete ? ')"	style = "text-decoration: blink "> Delete  </a>			
		</td>
	</tr>
<?php 
	} 
?>
</table>






<?php 
}


if(!$r){
	echo "Wrong Username and Password";	
	?>
	<script> window.location = "http://localhost/24-7/24x7.php"; </script>	
<?php	
}
?>
