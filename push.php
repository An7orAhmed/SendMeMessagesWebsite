<?php
  require_once "db_connect.php";
  
  $text = $_POST["message"];
  $sql = "INSERT INTO messages (msg) VALUES('".$text."')";
  mysqli_query($conn, $sql);
  header("location: index.php");
  $conn->close();
?>