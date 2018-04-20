<?php
session_start();
function EditItem($Id) {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}
function CheckItem($delete) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}
function AddItem($Item) {
    global $db;
    $query = 'INSERT INTO todos (owneremail, createddate, duedate, messgae, isdone)
              VALUES (:name)';
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();    
}
function DeleteItem($Id) {
	global $db;
    $query = 'DELETE FROM todos
              WHERE id = '$Id'';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();
}
?>