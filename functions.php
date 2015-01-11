<?php 

function connect()
{
	try {
		$conn = new PDO('oci:dbname=localhost/XE', '24x7', 'mugdha09');

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conn;
	} catch(Exception $e) {
		return false;
	}
}



function select_query($query, $bindings, $conn)
{
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);

	$results = $stmt->fetchAll();

	return $results ? $results : false;
}




function query($query, $bindings, $conn)
{
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);

}


	
function get($tableName, $conn)
{
	try {
		$result = $conn->query("SELECT * FROM $tableName");

		return ( $result->rowCount() > 0 )
			? $result
			: false;
	} catch(Exception $e) {
		return false;
	}

}



?>