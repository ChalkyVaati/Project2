<?php
session_start();

if(isset($_POST['deleteItem'])) {
	global $db;
	$delete = $_POST['deleteItem'];
    $query = 'DELETE FROM todos
              WHERE id = '$delete'';
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}

if(isset($_POST['EditItem'])) {
	header( 'Location: edit.php' );
}

if(isset($_POST['CheckItem'])) {
	$email = $_SESSION["email"];
	global $db;
	$delete = $_POST['deleteItem'];
    $query = 'UPDATE todos SET isdone = 1 WHERE owneremail = '$email'';
    $statement = $db->prepare($query);
    $statement->execute();
}

?>