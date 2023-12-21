<?php 
    $err = '';
   if(isset($_GET ['name']) && isset($_GET ['email'])){

        $name = $_GET ['name'];
        $email = $_GET ['email'];

    if (   empty($name)    &&   empty($email)   )
    {
        $err = 'Fill up this field.';
    }

    else

    {
        echo "Thank you ". $name. " For " .$email;
    }
    
   }


?>

<form action="form.php" method="GET">
<label for="name">Name:</label><br>
  <input type="text" id="name" name="name"> <br> <?php echo $err ?> <br><br
  <label for="email"> Email: </label> <br>
  <input type="email" id="email" name="email"> <br> <?php echo $err ?> <br><br>
  <input type="submit" value="Submit">

</form>