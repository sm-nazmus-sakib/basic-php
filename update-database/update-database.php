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


$sql = "UPDATE students_details SET firstname = 'Gurin', lastname = 'Bod', email = 'gurin@gmail.com' WHERE id = 4";




if (mysqli_query($conn, $sql)) {
    echo "Updated successfully";
  } else {
    echo "Updated not successfully : " . mysqli_error($conn);
  }
 
  mysqli_close($conn);
?>
