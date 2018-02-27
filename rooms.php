<?php
include 'base.php';
//header('Content-Type: application/json');
$query = 'SELECT * FROM rooms';
$result = getData($query, $pdo);
echo json_encode($result);