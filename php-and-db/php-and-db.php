<?php

//Php mysql db oop connection

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'myphpdb';



$conn = new mysqli($hostname, $username, $password, $dbname);


if($conn -> connect_error){
    die ('Connection failed'.$connection_error);
}
    echo 'Connected successfully. ';

    $sql = "INSERT INTO students_details (firstname, lastname, email)
    VALUES
    
    ('Ahnaf', 'Amin', 'aa@gmail.com')";

    if($conn-> query($sql) === TRUE){
        echo 'Data inserted';
    }

    else{
        echo 'Data is not inserted'. $conn_error;
    }

    $conn -> close();
?>
