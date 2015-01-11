<?php
if($_POST['r_user'] && $_POST['r_pass']){ 				
	$user	=	$_POST['r_user'];
	$pass =	$_POST['r_pass'];
	}
if($_POST['r_heading'] && $_POST['r_description'] && $_POST['r_image'] && $_POST['r_type']){ 				
	$r_h = $_POST['r_heading'] ;
	$r_d = $_POST['r_description'] ;
	$r_i = $_POST['r_image'] ;
	$r_t = $_POST['r_type'] ;
	}	
	

?>

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
	echo "<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='submit' value = 'Go back to Admin Page' /> " ;	
	?>	
</form>






<?php require "functions.php" ?>
<?php
	$conn = connect(); 
		
	if($user && $pass){
		echo "<br><br>New Reporter Successfully Added";
		$t=select_query("insert into reporter(reporter_id,reporter_username,reporter_password) 
		values(reporter_sequence.nextval,:u,:p)", 
		array('u' => $user, 'p' => $pass ),$conn) ; 	
	}
	
	if($r_h && $r_d && $r_i && $r_t){
		echo "<br><br>New News Successfully Added To The Main News Database";
		$t=select_query("insert into news (news_id,heading,description,image,news_type) 
		values(news_sequence.nextval,:hd,:des,:img,:tp)", 
		array('hd' => $r_h, 'des' => $r_d , 'img' => $r_i, 'tp' => $r_t),$conn) ;	
	}
	
	
	

?>