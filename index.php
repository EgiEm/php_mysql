<?php

//$num = -1;

//if($num<0){
    //echo "$num is less than 0";
//}

//$age = 14;

//if (($age > 12) && ($age < 15)){
//    echo "Sale for you!!!";
//}

//if ($age > 18){
 //   echo "you are an adult!!!";
//}else {
 //   echo " you are under 18!!!";
//}

//if($num<10){
   // echo "the value of \$num is a niggative number!!!";
//}elseif($num==0){
    //echo "the value of \$num is equal to zero";
//}else{
//    echo "the value of \$num is a positive number";
//}



// Function to determine the grade based on the score
function getGrade($score) {
    if ($score >= 90 && $score <= 100) {
        return 'A';
    } elseif ($score >= 80 && $score <= 89) {
        return 'B';
    } elseif ($score >= 78 && $score <= 79) {
        return 'C';
    } elseif ($score >= 60 && $score <= 69) {
        return 'D';
    } else {
        return 'F';
    }
}

// Get the student's score from user input
echo "Enter the student's score: ";
$handle = fopen("php://stdin", "r"); // Open the standard input stream
$score = trim(fgets($handle)); // Read input from the console
fclose($handle); // Close the stream

// Validate the input to ensure it's a number
if (is_numeric($score) && $score >= 0 && $score <= 100) {
    // Get the grade
    $grade = getGrade($score);
    // Output the grade
    echo "The student's grade is: $grade\n";
} else {
    echo "Invalid score. Please enter a number between 0 and 100.\n";
}
?>
