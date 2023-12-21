<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'demo');

    if(isset($_POST['submit'])){
        $firstname  =  $_POST['firstname'];
        $lastname   =  $_POST['lastname'];
        $email      =  $_POST['email'];

        $imagename =  $_FILES ['image']['name'];
        $tmpname =  $_FILES ['image']['tmp_name'];
        $upload = 'images/'.$imagename;

        $sql = "INSERT INTO students(firstname, lastname, email, image)
        VALUES('$firstname', '$lastname', '$email','$imagename')";

        if(mysqli_query($conn, $sql) == TRUE){
            move_uploaded_file($tmpname, $upload);
            echo "Data inserted";
        }
        else{
            echo "Data  is not inserted";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .img{
            height:50px;
            width:50px;
        }
    </style>
</head>
<body>

</body>
</html>

<form action = "<?php  echo $_SERVER['PHP_SELF'] ?>" method ="POST" enctype ="multipart/form-data">

    First Name: 
    <input type = "text" name = "firstname"> <br> <br>

    Last Name: 
    <input type = "text" name = "lastname"> <br> <br>

    Email: 
    <input type = "email" name = "email"><br> <br>

    Image: 
    <input type = "file" name = "image" multiple><br> <br>

     
    <input type = "submit" name="submit" value ="insert">
</form>



<?php 
    $sql = "SELECT * FROM students ORDER BY id DESC LIMIT 2";
    $data = mysqli_query($conn, $sql);

    echo "<table border ='1'> <tr></tr>";

    while($row = mysqli_fetch_assoc($data)){
        $firstname  =  $row['firstname'];
        $lastname   =  $row['lastname'];
        $email      =  $row['email'];
        $image      =  $row['image'];

        
        echo "<tr> <td>$firstname</td> <td> $lastname </td> <td> $email </td> ";
        echo "<td> <img src = 'images/$image' class ='img'></td> </tr> ";
    }

    
?>

</table>