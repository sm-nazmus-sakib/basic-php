<?php 

    // date(format, timestamp)

    // $time = time();
    // echo date('D - M - Y', $time). '<br>'; 
    // echo date ('l'). '<br>'; 
    // echo date('h : i : s a');
    // date_default_timezone_set('Asia/Dhaka');
    // echo date('h : i : s a');


    $d = mktime(11, 14, 54, 8, 16, 2014);
    // $d = mktime(hour, minutes, Secounds, months, date, year);
    // Show format (Year, month, date - hour, minutes, second)
    echo date('Y : m : d - h:i: s', $d);
?>