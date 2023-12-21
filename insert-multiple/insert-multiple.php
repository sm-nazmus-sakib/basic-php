<?php

// Mysqli db oop connection

 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'myphpdb';


 $conn = new mysqli($hostname, $username, $password, $dbname);
 if($conn -> connect_error){
    die ('Connection failed'.$connection_error);
}
    // echo 'Connected successfully';


$sql = "INSERT INTO students_details (firstname, lastname, email)
VALUES('Amin3', 'Zian3', 'zian3@gmail.com');";

$sql .= "INSERT INTO students_details (firstname, lastname, email)
VALUES('Amin4', 'Zian4', 'zian4@gmail.com');";


  if($conn->multi_query($sql) === TRUE){
    echo "Multi data inserted";
  }
  else{
    echo "Multi data is not inserted" .$conn->error;
  }



  $conn ->close();
  ?>