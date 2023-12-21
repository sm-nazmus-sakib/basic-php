<?php


//Ternary operator
// $x =  4;
// echo $status =  ($x==2? 'OK' : 'Not ok');


//if , else statement
// $x=10;
// $y=5;
// if($x<$y){
//     echo 'Small';
// }

// elseif($x == $y){
//     echo 'Equal';
// }

// elseif ($x>$y){
//     echo 'Big';
// }

// else{
//     echo 'False';
// }


//Switch statement
// $name = "C+";
//     switch($name){
//     case "PHP";
//     echo "PHP Tutorial";
//     break;

//     case "JAVA";
//     echo "JAVA Tutorial";
//     break;

//     case "C++";
//     echo "C++ Tutorial";
//     break;

//     default:
//     echo "Other programing language";
// }


//Loop
// $x=1;
// while($x < 6){
//     echo $x . '<br>';
//     $x++;
// }



// Do While loop
// $x=1;
// do{
//     echo $x;
//     $x++;
// }

// while($x < 6)
/*Note: while loop aga condition check korbe trpr execute korbe, Do while loop  
aga execute korbe trpr condition check korbe*/



//For Loop
// for($x=1; $x < 6; $x++){
//   echo $x . '<br>';
// }


// for($x=1; $x < 6; $x++){
//     if($x==3)
//     break;
//     echo $x. '<br>';
// }

// for($x=1; $x < 6; $x++){
//     if($x==3)
//     continue;
//     echo $x. '<br>';
// }



//For each loop
// $name = array('Sakib','Galib','Tasnim');
// foreach($name as $value){
//     echo $value. ' ';
// }


//Function
// function sum($num1, $num2){
//     $sum =  $num1 + $num2;
//     return $sum;
// }

// sum(2,30);


// function info($name, $age){
//     echo "Name: " .$name. " & age " .$age;
// }
//  info("Sakib", 23);


// function sum($x, $y){
//     $z = $x + $y;
//     return $z;
// }

//   echo sum(4, 7);


//array
// $name =  array('Sakib', 'Galib', 'Tasnim');
// echo $name[1];


// $name =  array();
// $name [0] =  'Sakib';
// $name [1] =  'Galib Galib Galib';
// $name [2] =  'Munjir';
// echo $name[1];

//Associative array
// $name = array('Sakib'=>10, 'Galib'=>20, 'Munjir'=>'30');
// echo $name['Sakib'];


// $name = array('Sakib'=>10, 'Galib'=>20, 'Tasnim'=>30);
// foreach($name as $key=>$value){
//    echo $key. ' ' .$value. '<br>';
// }


//Multi-Dimentional array
// $name = array(
//     array('Sakib', 30, 'Dhaka'),
//     array('Sakib1', 31, 'Dhaka1'),
//     array('Sakib2', 32, 'Dhaka2')
// );

// for($x=0; $x<3; $x++){
//     for($y = 0; $y <3; $y++){
//         echo $name [$x][$y]. "<br>";
//     }
//     echo "<br>";
// }


//Array Function
// $name = array('A', 'B', 'C');

// $count = count($name);
// for($x=0; $x < $count; $x++){
//     echo $name[$x];
// }


// $name = array('A', 'D', 'C');
// rsort($name);

// foreach($name as $value){
//     echo $value. "<br>";
// }


//Super global variable ($GLOBALS)
// $x = 10;
// $y = 20;
// function info(){
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'] ;
// }

// info();
// echo $z;




//Super global variable ($_SERVER)
// echo $_SERVER ['PHP_SELF'];

// echo $_SERVER ['SERVER_NAME'];

// echo $_SERVER['SERVER_ADDR'];

// echo $_SERVER ['SERVER_SOFTWARE'];

// echo $_SERVER ['HTTP_HOST'];

// echo $_SERVER['SCRIPT_NAME'];

// echo $_SERVER ['REQUEST_METHOD'];

// echo $_GET['channel'];
// echo $_GET['Course'];


 echo isset($_REQUEST['name']);
 echo isset($_REQUEST['email']);
//


?>
<!-- <a href="superglobals.php?Channel=TechnologyVillage&Course=PHP">
    Click me 
</a> -->



<form action="" method="POST">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br><br>
  <input type="submit" value="Submit">
</form>


