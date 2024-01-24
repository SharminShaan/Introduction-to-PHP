<?php

//varialble
    $message = "Wishing u a happy day";
echo "$message";
echo "<br>";
echo "This is perfact";
echo "<br>";

//Datatype
$one = "hello kitty"; //string
$two = 123; //Integer
$three = 12.5; //float
$four = true; //boolean
$five = array(123,'sana'); //Array
$six = NULL; //null

echo var_dump($one);
echo "<br>";

$asif_age = 21;
$sakib_age = 24;

if($asif_age > $sakib_age){
    echo "asif older";
}
else if($asif_age < $sakib_age){
    echo "sakib older";
}
else{
    echo "both similar aged";
}

?>