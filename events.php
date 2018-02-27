<?php
include 'base.php';
//header('Content-Type: application/json');
$start = '2018-01-01';
$end = '2018-12-01';
$query = 'SELECT * FROM events WHERE (date(start) >= '.'"'.$start.'"'.' AND date(start) <= '.'"'.$end.'"'.')';
$result = getData($query, $pdo);
echo json_encode($result);