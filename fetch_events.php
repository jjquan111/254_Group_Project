<?php
require 'database_connection.php';

//set  header to JSON to return JSON 
header('Content-Type: application/json');

//fetch events from database
$query = "SELECT id, title, start_event as start, end_event as end FROM events";
$stmt = $pdo->prepare($query);
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch all rows

echo json_encode($events); //return JSON data
?>
