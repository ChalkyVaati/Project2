<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=jcm44';
    $username = 'jcm44';
    $password = 'lq40ntX5';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>