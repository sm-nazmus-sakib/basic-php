<?php 

//    move_uploaded_file($tmpfile, $upload );
    if(isset($_POST['submit'])){
       $fileName = $_FILES ['myfile']['name'];
       $tmpFile =  $_FILES ['myfile']['tmp_name'];
       $fileSize =  $_FILES ['myfile']['size'];
       $upload =   'images/'.$fileName;
       $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
       $uploadOk = 1;
       $check = getImageSize($tmpFile);

       if( $check !== false){
        echo 'This is an image file. ' .$check['mime'].'. ';
        $uploadOk = 1;
       }
       else{
        $uploadOk = 0;
       }

       if(file_exists($upload)){
        echo ' Sorry!! File already exist. ' ;
        $uploadOk = 0;
       }

       if($fileSize > 100000){
        echo ' File is too large. ';
        $uploadOk = 0;
       }

       if($imageFileType != 'jpg' && $imageFileType != 'png'){
        echo 'File only allowed jpg & png. ';
        $uploadOk = 0;
       }

       if($uploadOk == 0){
        echo 'The file was not uploaded. ';
       }

       elseif(move_uploaded_file($tmpFile, $upload)){
        echo 'File uploaded. ';
       }
       else{
        echo 'There is an error uploading your file. ';
       }

       


    //    echo $check['mime'];
    }
?>

<form action="file-upload.php" method = "POST" enctype = "multipart/form-data">
    <input type = "file" name = "myfile"> <br> <br>
    <input type = "submit" name = "submit" value ="upload">
</form>