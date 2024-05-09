<?php
require 'database_connection.php';

//informs the client that the server is returning JSON formatted data
header('Content-Type: application/json');

//SQL query to select all events.
$query = "SELECT id, title, start_event as start, end_event as end FROM events";
//prepare the SQL query for execution
$stmt = $pdo->prepare($query);
//execute the query
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch all rows

echo json_encode($events); //return JSON data
?>
