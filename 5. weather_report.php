<?php

$tempareture = 99;

if ($tempareture <= 0) {
    echo "Temparature is: " . $tempareture . " degree celcious. It's freezing!.";
} else if ($tempareture >= 1 && $tempareture <= 20){
    echo "Temparature is: " . $tempareture . " degree celcious. It's Cool.";
} else {
    echo "Temparature is: " . $tempareture . " degree celcious. It's Hot.";
}


?>