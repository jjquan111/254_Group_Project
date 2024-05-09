<?php
// Check form data
if (isset($_POST['title'], $_POST['start'])) {
    require_once 'database_connection.php';

    // Get form data
    $title = $_POST['title'];
    $start = $_POST['start'];

    // Insert event to database
    $query = "INSERT INTO events (title, start_event, end_event) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    if ($stmt->execute([$title, $start, $start])) {
        // Redirect back to the form page or another page after a successful insert
        header('Location: add-event.html');
    }
}
?>
