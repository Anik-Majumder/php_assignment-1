<?php

$score_1 = 99;
$score_2 = 100;
$score_3 = 50;

$average_score = ($score_1 + $score_2 + $score_3) / 3;


if ($average_score >= 80 && $average_score <= 100) {
    echo "Your average score is: " . $average_score . " And Your grade is 'A'";
} 
else if ($average_score <= 79 && $average_score >= 70){
    echo "Your average score is: " . $average_score . " And Your grade is 'B'";
} 
else if ($average_score <= 69 && $average_score >= 60){
    echo "Your average score is: " . $average_score . " And Your grade is 'C'";
}
else if ($average_score <= 59 && $average_score >= 50){
    echo "Your average score is: " . $average_score . " And Your grade is 'D'";
}
else if ($average_score <= 50 && $average_score >= 0){
    echo "Your average score is: " . $average_score . " And Your grade is 'F'";
}
else {
    echo "Invalid Numver, Please provide a number between 0 - 100.";
}


?>