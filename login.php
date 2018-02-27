<?php
include 'base.php';

session_start();

$table = 'users';
$email = $_POST['email'];
$password = $_POST['password'];

$result = getUser($table, $email, $password, $pdo);


if($result['email'] == $email && $result['password'] == $password){
    $_SESSION['login'] = true;
    header('Location: calendar.php');
    exit();
} else {
    echo '<script>alert("Invalid username or password");
                window.history.back();
            </script>';
}

