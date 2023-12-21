<?php include 'Connection.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud Operation</title>
  </head>

  <body>

    <div class="container my-5">
        <div>
            <h3>Please input your information</h3>
        </div>
        <form action="" method="POST">

            <div class="form-group mb-3">
                <label>Firstame</label>
                <input type="text" class="form-control"  
                placeholder="Enter your firstame"
                name="firstname" autocomplete = "off">
            </div>


            <div class="form-group mb-3">
                <label>Lastname</label>
                <input type="text" class="form-control"  
                placeholder="Enter your lastname"
                name="lastname" autocomplete = "off">
            </div>

            <div class="form-group mb-3">
                <label>Age</label>
                <input type="number" class="form-control"  
                placeholder="Enter your  age"
                name="age" autocomplete = "off">
            </div>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <input type="submit" name="save" value="Save">
        </form>
    </div>

    <?php
        if(isset($_POST['save'])){
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $age = $_POST['age'];

            $query = "INSERT INTO student(firstname, lastname, age) VALUES('$fname', '$lname', '$age')";
            $data = mysqli_query($con, $query);

        }

    ?>

  </body>

</html>