<?php 
    if(isset($_POST['submit'])){
       $total = count ($_FILES['file']['name']);
       for($x = 0; $x < $total; $x++){
            $fileName = $_FILES['file']['name'][$x];
            $tempFile =  $_FILES['file']['tmp_name'][$x];
            $upload = 'images/'.$fileName;

            move_uploaded_file($tempFile, $upload);
       }
       
    }
?>

<form action="multiple-files-upload.php" method="POST" enctype="multipart/form-data">
    <h3>Select file</h3> 
    <input type ="file" name = "file[]" multiple> <br> <br>
    <input type = "submit" name ="submit" value = "upload">

</form>