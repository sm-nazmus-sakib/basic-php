<?php

// Mysqli db procedural connection

 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'myphpdb';


 $conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "DELETE FROM students_details WHERE id = 4";

if (mysqli_query($conn, $sql)) {
    echo "Data Deleted successfully";
  } else {
    echo "Data Deleted not successfully : " . mysqli_error($conn);
  }
 
  mysqli_close($conn);
?>
