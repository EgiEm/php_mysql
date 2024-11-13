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




// function callCounter() {
  //  static $count = 0;
   // $count++;
//    echo "the value of count variable is : $count <br>";
//}
//callCounter();
//callCounter();



//$sports = array('Football', 'Basketball', 'Handball', 'Voleyball');
 //   echo count($sports);
 //   array_push($sports, 'Golf');
 //   var_dump($sports);



//    $sports = array('Football','Basketball', 'Handball', 'Voleyball');
//array_unshift($sports, 'Tennis');
//var_dump($sports);




$dogs = array(
  array("Chihuahua", "Mexico", 25),
  array("Husky", "Siberian",15),
  array("Bulldog", "England",10)
);

echo $dogs[0][0]. " Origin ".$dogs[0][1]. ", Life Span ". $dogs[0][2]. "<br>";
echo $dogs[1][0]. " Origin ".$dogs[1][1]. ", Life Span ". $dogs[1][2]. "<br>";
echo $dogs[2][0]. " Origin ".$dogs[2][1]. ", Life Span ". $dogs[2][2]. "<br>";

for($row = 0; $row<3; $row++){
  echo "<p><b>Row Numbber $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col<3; $col++){
    echo "<li>".$dogs[$row][$col]."</li>";
  }
  echo "</ul>";
}

//challenge

$array4D = [
  [
      [
          ['Item 1-1-1-1', 'Item 1-1-1-2'],
          ['Item 1-1-2-1', 'Item 1-1-2-2']
      ],
      [
          ['Item 1-2-1-1', 'Item 1-2-1-2'],
          ['Item 1-2-2-1', 'Item 1-2-2-2']
      ]
  ],
];

echo "<table border='1'>";

for ($i = 0; $i < count($array4D); $i++) {
  echo "<tr><td colspan='2'>Iphone 1: $i</td></tr>";
  
  for ($j = 0; $j < count($array4D[$i]); $j++) {
      echo "<tr><td>Iphone 2: $j</td><td>";

      for ($k = 0; $k < count($array4D[$i][$j]); $k++) {
          echo "<div>Iphone 3: $k</div>";
          echo "<ul>";

          for ($l = 0; $l < count($array4D[$i][$j][$k]); $l++) {
              echo "<li>Iphone 4: $l - " . $array4D[$i][$j][$k][$l] . "</li>";
          }

          echo "</ul>";
      }
      echo "</td></tr>";
  }
}

echo "</table>";







?>



