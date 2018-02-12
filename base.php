<?php
 $dbHost = "localhost";
 $dbUser = "root";
 $dbPass = "root";
 $dbName = "booker";


    
        try{
            $pdo = new PDO("mysql:host=".$dbHost.";dbname=".$dbName, $dbUser, $dbPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //$pdo -> query ('SET NAMES utf8');
        }
        catch(PDOException $e){
            die("Failed to connect with MySql: " . $e->getMessage());
        }



function selectUser($table, $email, $password, $pdo){
    //$sql = 'SELECT * FROM ' .$table.' WHERE email = '.'"'.$email.'" AND password = "'.$password.'"';
    $stmt = $pdo->query('SELECT * FROM ' .$table.' WHERE email = '.'"'.$email.'" AND password = "'.$password.'"');
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $data;

}