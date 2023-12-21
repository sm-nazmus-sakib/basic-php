<?php 
    
    $conn = new mysqli('localhost', 'root', '', 'demo');
    if(!$conn){
        echo "Not connected";
    }

    $empty_msg_firstname = '';
    $empty_msg_lastname = '';
    $empty_msg_email = '';     
    $empty_msg_password = '';
    $empty_msg_password_confirm = '';

    $user_first_name = '';
    $user_last_name = '';
    $user_email ='';
    $user_password = '';
    $user_password_confirm = '';

    if(isset($_POST['submit'])){
        $user_first_name = $_POST['user_first_name'];
        $user_last_name = $_POST['user_last_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_password_confirm = $_POST['user_password_confirm'];

        $md5_user_password = md5($user_password);

        if(empty($user_first_name)){
            $empty_msg_firstname = 'Fill this field';
        }

        if(empty($user_last_name)){
            $empty_msg_lastname = 'Fill this field';
        }

        if(empty($user_email)){
            $empty_msg_email = 'Fill this field';
        }

        if(empty($user_password)){
            $empty_msg_password = 'Fill this field';
        }

        if(empty($user_password_confirm)){
            $empty_msg_password_confirm = 'Fill this field';
        }

        if(!empty($user_first_name) && !empty($user_last_name) && !empty($user_email) && !empty($user_password) && !empty($user_password_confirm)){
            if($user_password === $user_password_confirm){

                $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password)  VALUES ('$user_first_name', '$user_last_name', '$user_email', '$md5_user_password')";

                if($conn->query($sql)){
                    header('location:login.php?usercreated');
                }

                else{
                    echo'Data is Not inserted';
                }
            }

            else{
                echo 'Password Not match';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" style="margin-top: 50px;">
            <h3 class="text-white text-center bg-success">User information</h3>
                <form action="user.php" method="POST">

                    <div class="mt-2">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="user_first_name" value="<?php  if(isset($_POST['submit'])){echo $user_first_name;} ?>">
                        <?php echo "<span class='text-danger'>$empty_msg_firstname</span>"; ?>
                    </div>   

                    <div class="mt-2">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="user_last_name" value="<?php  if(isset($_POST['submit'])){echo $user_last_name;} ?>">
                        <?php echo "<span class='text-danger'>$empty_msg_lastname</span>"; ?>
                    </div> 

                    <div class="mt-2">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="user_email" value="<?php  if(isset($_POST['submit'])){echo $user_email;} ?>">
                        <?php echo  "<span class='text-danger'>$empty_msg_email</span>"; ?>
                    </div>
                    
                    <div class="mt-2">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="user_password" value="<?php  if(isset($_POST['submit'])){echo $user_password;} ?>">
                        <?php echo "<span class='text-danger'>$empty_msg_password</span>"; ?>
                    </div>

                    <div class="mt-2">
                        <label class="form-label"> Confirm Password</label>
                        <input type="password" class="form-control" name="user_password_confirm" value="<?php  if(isset($_POST['submit'])){echo $user_password_confirm;} ?>">
                        <?php echo "<span class='text-danger'>$empty_msg_password_confirm</span>"; ?>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-success" name="submit">Submit</button>
                    </div>

                </form>
                <h5>You have an account. <a href="login.php">Login Here</a></h5>
                

            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>