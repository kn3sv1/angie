<?php

include('db.php');

//if I press button it will send
if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $title2 = $_POST['title2'];
  $description = $_POST['description'];
  $query = "INSERT INTO task(title, title2, description) VALUES ('$title', '$title2', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
