<?php
//check form data
if (isset($_POST['title'], $_POST['start'])) {
    require_once 'database_connection.php';

    //get form data
    $title = $_POST['title'];
    $start = $_POST['start'];

    //insert event to database
    $query = "INSERT INTO events (title, start_event, end_event) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    if ($stmt->execute([$title, $start, $start])) {
        //redirect back to add event
        header('Location: add_event.html');
        exit;
    } else {
    }
}
?>