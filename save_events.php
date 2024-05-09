<?php
//check form data
if(isset($_POST['title'], $_POST['start'])) {
   require_once 'database_connection.php';

   //get form data
   $title = $_POST['title'];
   $start = $_POST['start'];
} else {
}
?>
