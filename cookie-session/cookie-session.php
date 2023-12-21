<?php 


    session_start();

    $_SESSION['cname'] = 'Technology village';

    $_SESSION['c'] = 'ck';
    echo $_SESSION['cname'];
    echo $_SESSION['c'];
    
?>