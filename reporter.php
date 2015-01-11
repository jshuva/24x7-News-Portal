<?php
if($_POST){
$uname = $_POST['username'];
$pass = $_POST['password'];
}
?>

<?php require "functions.php" ?> 
<?php $conn = connect(); 

$r = select_query("SELECT * FROM reporter WHERE reporter_username =:name and reporter_password =:pass ",
							array('name' => $uname, 'pass' => $pass), $conn) ;



							
if($r){
	echo "Logged in Successfully"."<br><br>"
?>  
 <form action="reporter_news.php" method="post">
	<table border = "1" cellspacing = "1" cellpadding = "20" >

	<tr>
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
	
	
	<tr>
		<td>
			<input type='text' name='heading' /> 
		</td>
		
		<td>	
			<textarea rows="25" cols="90" name="description"> </textarea>
			
		</td>
		
		<td>
			<input type='text' name='image' /> 
		</td>
		
		<td>			 
			<input type='text' name='type' />
		</td>
			
	</tr>

	</table>
  <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='submit' value = 'Add news to the reported_news table' />
 </form>
<?php } ?>

<br>Reporter Info : <br><br>


	<table border = "1" cellspacing = "1" cellpadding = "20" >

	<tr>
		<th>
			<?php echo "ID"; ?>
		</th>
		
		<th>
			<?php echo "Username"; ?>
		</th>
		
		<th>
			<?php echo "Password"; ?>
		</th>
		
		<th>
			<?php echo "Operation"; ?>
		</th>
		
	</tr>

<?php foreach($r as $reporter){	?>	
	<tr>
	
		<td>
			<?php echo $reporter[0] ;?>
		</td>
		
		<td>
			<?php echo $reporter[1] ; ?> 
		</td>		
		
		<td>
			<?php echo $reporter[2] ; ?>
		</td>
		
		<td>
			<a href="update_reporter.php?r_id=<?php echo $reporter[0]; ?>" style = "text-decoration: blink " > Update  </a>
		</td>
			
	</tr>
<?php }	?>
	</table>




<?php  
if(!$r){ ?>
 wrong username and password
 <script>

	window.location = "http://localhost/24-7/24x7.php";

</script>

<?php } ?>







