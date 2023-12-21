<?php 
    $file = fopen('info.txt', 'a') or die ('Unable to open this file');
    $txt = 'Sakib'. '<br>';
    fwrite($file, $txt);
    fclose($file);
?>