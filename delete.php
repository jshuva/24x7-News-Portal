<?php
if($_GET['Reporter_id']){	
	$r_id =	$_GET['Reporter_id'];
}

if($_GET['R_news_id']){	
	$r_n_id =	$_GET['R_news_id'];
}

if($_GET['News_id']){	
	$n_id =	$_GET['News_id'];
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
		
	if($r_id){
		echo "<br><br>Reporter Successfully Deleted";
		$t=select_query("delete from reporter WHERE reporter_id =:id", 
		array('id' => $r_id),$conn) ;
	}
	if($r_n_id){
		echo "<br><br>Reported News Successfully Deleted";
		$t=select_query("delete from reported_news WHERE r_news_id =:id", 
		array('id' => $r_n_id),$conn) ;
	}
	if($n_id){
		echo "<br><br>News From the Main Database Successfully Deleted";
		$t=select_query("delete from news WHERE news_id =:id", 
		array('id' => $n_id),$conn) ;	
	}
		
		
?>