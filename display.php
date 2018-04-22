<?php
session_start();
?>
<!DOCTYPE html>
<head>
<style>
  .btn {
    display: inline-block;
    padding: 4px 8px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    border: 1px solid transparent;
    border-radius: 4px;
	text-decoration:none;
}
.btn-primary {
    color: #830303;
    background-color: #ffffff;
    border-color: #2e6da4;
  font-family: 'Press Start 2P';
  border: 1px dashed #830303;
}
  .btn-primary:hover {
    color: #ffffff;
    background-color: #830303;
    transition: 1s;
    border: 1px dashed #ffffff;
  }
  th {
    color: #ffffff;
    font-family: Work Sans;
  }
  td { 
  color: white;
  font-family: Work Sans;
  }
</style>
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

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
		$email = $_SESSION["email"];
		$sql = "SELECT id, createddate, duedate, message FROM todos WHERE owneremail = '$email' AND isdone != 1";
		$result = $this->connection->query($sql);
		echo '<form action="action.php" method="post" style="font-size:50%">';
		echo '<table>';
		echo '<th style="text=align:center;font-weight:bold; font-size:80%">ID</th>';
		echo '<th style="text=align:center;font-weight:bold; font-size:80%">Created Date</th>';
		echo '<th style="text=align:center;font-weight:bold; font-size:80%">Due Date</th>';
		echo '<th style="text=align:center;font-weight:bold; font-size:80%">To Do</th>';
		echo '</tr>';
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td style='font-size:80%'>".$row["id"]."</td>";
			echo "<td style='font-size:80%'>".$row["createddate"]."</td>";
			echo "<td style='font-size:80%'>".$row["duedate"]."</td>";
			echo "<td style='font-size:80%'>".$row["message"]."</td>";
			echo '<td style="font-size:80%"><button type="submit" name="DeleteItem" value="'.$row['id'].'" />Delete</td>"';
			echo '<td style="font-size:80%"><button type="submit" name="EditItem" value="'.$row['id'].'" />Edit</td>"';
			echo '<td style="font-size:80%; font-family: Work Sans;"><button id="Check" type="submit" name="CheckItem" value="'.$row['id'].'" />Check</td>"';
			echo "</tr>";
    	}
		echo "<tr>";
		echo '<td><a href="add.php" class="btn btn-primary">Add Task</a></td>';
		echo "</tr>";
    	echo "</table>";
	}
	
}
	$user = new User();
$user->displayAllUser();
?>
</div>
</html>