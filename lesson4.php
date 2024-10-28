<?php

// phpinfo();
// $x = 5;
// $name = "Puhiza";
// $number = 3.14;


// echo gettype($x);
// echo '<Br>';
// echo gettype($name);
// echo '<Br>';
// echo gettype($number);

// function addNumbers($number1, $number2){
   //  $sum = $number1 + $number2;
    // echo $sum;
// }
// echo '<br>';
// addNumbers (8, 9); 

// function product($n1,$n2,){
// return $n1 = $n2;
// }
// $sm3 = addNumbers(34,55)




// function maxNumbers($num1, $num2, ){
   //  if ($num1 < 15) {
      
      //   if ($num1 > $num2) {
         //    return "$num1 is greater than $num2 and both are less than.";
        // } elseif ($num1 < $num2) {
        //     return "$num2 is greater than $num1 and both are less than.";
       //  } else {
  //           return "$num1 is equal to $num2 and both are less than.";
    //     }
//     } else {
  //       return "One or both numbers exceed the maximum limit of.";
 //    }
// }

// echo compareNumbers(5, 10, 15); 




//$x = 5; 

//function localVariable() {
  //  global $x;
   // $y = 10; 
//    echo $x;
 //   echo $y;
//}
//localVariable();




//$x = 5;
//$y = 7;

//function sum() {
  //  global $x, $y;
   // $y = $x + $y;
//}
//sum();
//echo $y;




function callCounter() {
    static $count = 0;
    $count++;
    echo "the value of count variable is : $count <br>";
}
callCounter();
callCounter();



$sports = array('Football', 'Basketball', 'Handball', 'Voleyball');
    echo count($sports);
    array_push($sports, 'Golf');
    var_dump($sports);



    $sports = array('Football','Basketball', 'Handball', 'Voleyball');
array_unshift($sports, 'Tennis');
var_dump($sports);


?>



