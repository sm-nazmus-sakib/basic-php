<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'myphpdb';


    $conn = mysqli_connect($hostname, $username, $password, $dbname);


    if(!$conn){
        die('connection failed'.mysqli_connect_error());
    }
    // echo 'connection successfully';

    $sql = "SELECT * FROM students_details";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        echo "<table border = '1'> 
        <tr> 
           
            <th> Firstname </th>
            <th> Lastname </th>
            <th> Email</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)){
           
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
        
            echo "
                <tr>
                    
                    <td> $firstname  </td>
                    <td> $lastname </td>
                    <td> $email  </td>
                </tr>
            ";

        }
        echo "</table>";
    }
    else{
        echo 'Result not found';
    }


    mysqli_close($conn);
?>
