<?php
session_start();

if(isset($_POST['deleteItem'])) {
		
	$servername = "sql2.njit.edu";
	$username = "jcm44";
	$password = "lq40ntX5";
	$dbname = "jcm44";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		//echo "Connected Successfully! <br>";
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$email = $_SESSION["email"];
		$delete = $_POST['deleteItem'];

		$query = "DELETE FROM todos WHERE id = '$delete'";
		$statement = $conn->prepare($query);
		$statement->execute();
    } 
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}

if(isset($_POST['EditItem'])) {
	$edit = $_POST['EditItem'];
	$_SESSION["edit"] = "$edit";
	header( 'Location: edit.php' );
}

if(isset($_POST['CheckItem'])) {
	$servername = "sql2.njit.edu";
	$username = "jcm44";
	$password = "lq40ntX5";
	$dbname = "jcm44";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		//echo "Connected Successfully! <br>";
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$email = $_SESSION["email"];
		$isdone = 1;
		$check = $_POST['CheckItem'];
		$query = "UPDATE todos (isdone) VALUES ('$isdone') WHERE owneremail = '$email' AND id = '$check'";
		$statement = $db->prepare($query);
		$statement->execute();
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}

?>