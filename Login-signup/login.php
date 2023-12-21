<?php 
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'demo');
    if(!$conn){
        echo "Not connected";
    }

    $empty_email = '';
    $empty_password = '';

        if(isset($_POST['submit'])){
           $user_email = $_POST['user_email'];
           $user_password = $_POST['user_password'];
        
           $md5_user_password = md5($user_password);

           if(empty($user_email)){
            $empty_email = 'Fill up this field';
           }

           if(empty($user_password)){
            $empty_password = 'Fill up this field';
            }

            if(!empty($user_email && $user_password)){
                $sql = "SELECT * FROM users WHERE user_email = '$user_email' AND  user_password='$md5_user_password' ";
                $query = $conn->query($sql);

                if($query-> num_rows > 0){
                    $_SESSION['login'] = 'Login Success';
                    header('location:dashboard.php');
                }
               else{
                echo 'Not found';
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
            <div class="col-4" style="margin-top: 150px;">
                    <?php 
                      if(isset($_GET['usercreated']) ){
                        echo 'User created successfully';
                      }
                    ?>
                <form action="login.php" method="POST">

                    <div class="mt-2">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="user_email" value="<?php  if(isset($_POST['submit'])){echo $user_email;} ?>">
                        
                        <?php if(isset($_POST['submit'])){echo "<span class='text-danger'>$empty_email</span>";}  ?>
                    </div>
                    
                    <div class="mt-2">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="user_password" value="<?php  if(isset($_POST['submit'])){echo $user_password;} ?>">
                        <?php if(isset($_POST['submit'])){echo "<span class='text-danger'>$empty_email</span>";}  ?>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-success" name="submit">Login</button>
                    </div>

                </form>
                <h5>Not account? <a href="user.php">Register Here</a></h5>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>