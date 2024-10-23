<?php

// phpinfo();
$x = 5;
$name = "Puhiza";
$number = 3.14;


echo gettype($x);
echo '<Br>';
echo gettype($name);
echo '<Br>';
echo gettype($number);

function addNumbers($number1, $number2){
    $sum = $number1 + $number2;
    echo $sum;
}
echo '<br>';
addNumbers (8, 9); 

function product($n1,$n2,){
return $n1 = $n2;
}
$sm3 = addNumbers(34,55)




function maxNumbers($num1, $num2, $max){
    if ($num1 < 5) {
      
        if ($num1 > $num2) {
            return "$num1 is greater than $num2 and both are less than $max.";
        } elseif ($num1 < $num2) {
            return "$num2 is greater than $num1 and both are less than $max.";
        } else {
            return "$num1 is equal to $num2 and both are less than $max.";
        }
    } else {
        return "One or both numbers exceed the maximum limit of $max.";
    }
}


echo compareNumbers(5, 10, 15); 



?>