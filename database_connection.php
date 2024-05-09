<?php
$host = 'localhost';
$dbname = 'calendar';
$username = 'your_username';
$password = 'your_password';
//connect to the database
//create a new PHP Data Objects object
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
