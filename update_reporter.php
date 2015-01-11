<?php 
$id = $_GET['r_id'] ; 
?>

<?php require "functions.php" ?>
<?php 
$conn = connect();		
$b = select_query("SELECT * FROM reporter WHERE reporter_id =:id",
				  array('id' => $id) , $conn) ;

?>



<?php
if($_POST['r_user'] && $_POST['r_pass'] && $_POST['r_id']){
	$uname = $_POST['r_user'];
	$pass = $_POST['r_pass'];
	$id = $_POST['r_id'];
?>


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
	
	echo "<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='submit' value = 'Back To The Reporter Page' /> " ;
	
	?>
</form>








<?php
echo "<br>Reporter Info Updated Successfully<br><br>";
	
$c = select_query("UPDATE reporter SET reporter_username=:name, reporter_password=:p WHERE reporter_id =:i ",
				  array('name' => $uname , 'p' => $pass, 'i' => $id) , $conn) ;
				  
				  
 }
?>




 
 <br><br><br>Update Reporter Info : <br><br>
 
 <form action="update_reporter.php" method="post">
 <table border = "1" cellspacing = "0" cellpadding = "10" >
	<tr>
		<th>
			<?php echo "ID<br>(unchangeable)"; ?>
		</th>
		<th>
			<?php echo "Usename"; ?>
		</th>
		<th>
			<?php echo "Password"; ?>
		</th>
	</tr>

<?php foreach($b as $rep){ ?>
	<tr>
		<td>
			<input type='text' name='r_id' value="<?php echo $rep[0];?>" /> 
		</td>
		
		<td>
			<input type='text' name='r_user' value="<?php echo $rep[1];?>" /> 
		</td>
		
		<td>
			<input type='text' name='r_pass' value="<?php echo $rep[2];?>" /> 			
		</td>
	</tr>
<?php
 }
 ?>	
 </table>
 
 
 <br>
 <input type='submit' value = 'Update' />
</form>
