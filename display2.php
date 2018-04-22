
<!DOCTYPE html>
<head>
</head>
<body>
<div>
<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
$email = $_SESSION["email"];
class User2{
	function User2() {
		$servername = "sql2.njit.edu";
		$username = "jcm44";
		$password = "lq40ntX5";
		$dbname = "jcm44";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$this->connection = $conn;
	}
	
//Display all users in database.... section	
	function displayAllUser2() {
		$email = $_SESSION["email"];
		$sql = "SELECT id, createddate, duedate, message FROM todos WHERE owneremail = '$email' AND isdone != 0";
		$result = $this->connection->query($sql);
		echo '<table>';
		echo '<th style="text=align:center;font-weight:bold; font-size:50%">ID</th>';
		echo '<th style="text=align:center;font-weight:bold; font-size:50%">Created Date</th>';
		echo '<th style="text=align:center;font-weight:bold; font-size:50%">Due Date</th>';
		echo '<th style="text=align:center;font-weight:bold; font-size:50%">To Do</th>';
		echo '</tr>';
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td style='font-size:50%'>".$row["id"]."</td>";
			echo "<td style='font-size:50%'>".$row["createddate"]."</td>";
			echo "<td style='font-size:50%'>".$row["duedate"]."</td>";
			echo "<td style='font-size:50%'>".$row["message"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
		echo "<br>";
	}
}
	$user = new User2();
$user->displayAllUser2();
?>
</div>
</html>