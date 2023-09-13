<?php

$temp_1 = 37.5;
$temp_2 = 19;
$temp_3 = 139;

function celciousToFarenheight ($celcious){
    $celTofar = ($celcious*9/5) + 32;
    echo  $celcious . " degree celcious to farenheight is " . $celTofar . " degree farenheight";
}
function farenheightToCelcious ($farenheight){
    $fartocel =($farenheight-32) * (5/9);
    echo  $farenheight . " degree farenheight to celcious is " . $fartocel . " degree celcious";
}

celciousToFarenheight($temp_1);
echo PHP_EOL;
celciousToFarenheight($temp_2);
echo PHP_EOL;
celciousToFarenheight($temp_3);
echo PHP_EOL;
echo PHP_EOL;

farenheightToCelcious($temp_1);
echo PHP_EOL;
farenheightToCelcious($temp_2);
echo PHP_EOL;
farenheightToCelcious($temp_3);



?>