<?php
include 'config.php';



try {
    $pdo = new PDO("mysql:host=".$dbHost.
        ";dbname=".$dbName, $dbUser, $dbPass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //$pdo -> query ('SET NAMES utf8');
} catch (PDOException $e) {
    die("Failed to connect with MySql: ".$e -> getMessage());
}



function getUser($table, $email, $password, $pdo) {
    //$sql = 'SELECT * FROM ' .$table.' WHERE email = '.'"'.$email.'" AND password = "'.$password.'"';
    $stmt = $pdo -> query('SELECT * FROM '.$table.
        ' WHERE email = '.
        '"'.$email.
        '" AND password = "'.$password.
        '"');
    $data = $stmt -> fetch(PDO::FETCH_ASSOC);
    $stmt -> closeCursor();
    return $data;
}

function getData($query, $pdo) {
    $stmt = $pdo -> query($query);
    $data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    $stmt -> closeCursor();
    return $data;
}

function addData($table, $pdo, $values) {
    if($table == 'events'){
        $columns = array('start', 'end', 'title', 'room_id');
    } elseif ($table == 'rooms'){
        $columns = 'color';
    } elseif ($table == 'users'){
        $columns = array('email', 'password', 'created');
    }
    $stmt = $pdo -> prepare('INSERT INTO'.$table.'('.$columns.') VALUES ('.$values.')');
    $stmt->execute();
}