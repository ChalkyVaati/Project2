<?php
session_start();
?>
<!DOCTYPE html>
<head>
</head>
<body>
<div>
<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
$email = $_SESSION["email"];
class User{
	function User() {
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
	function displayAllUser() {
		$sql = "SELECT id, createddate, duedate, message FROM todos WHERE owneremail = '$email' AND isdone != 1;
		$result = $this->connection->query($sql);
		echo "Displays all users";
		echo '<form action="action.php" method="post">';
		echo '<table style="border-style: ridge; border-width:6px">';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Created Date</th>';
		echo '<th style="text=align:center;font-weight:bold">Due Date</th>';
		echo '<th style="text=align:center;font-weight:bold">To Do</th>';
		echo '</tr>';
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["createddate"]."</td>";
			echo "<td>".$row["duedate"]."</td>";
			echo "<td>".$row["message"]."</td>";
			echo "<td><input type="submit" name="AddItem"/></td>";
			echo "<td><input type="submit" name="deleteItem" value="'.$row["id"].'" /></td>";
			echo "<td><input type="submit" name="EditItem" value="'.$row["id"].'" /></td>";
			echo "<td><input type="submit" name="CheckItem" value="'.$row["id"].'" /></td>";
			echo "</tr>";
    	}
    	echo "</table>";
		echo "<br>";
	}
	
	$user = new User();
$user->displayAllUser();
?>
</div>
</html>