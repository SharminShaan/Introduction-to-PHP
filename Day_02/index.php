<?php
    $a =10;
    $b =10;
    echo $b;
    echo "<br>";

    //$b = $b+12; [assignment operator]
    //$a *=10;
    //echo $a**$b
    
    //comparison operator

    if ($a==$b){
        echo "A & B similar";
    }else{
        echo "NOT";
    }
    echo "<br>";
    $a = 10;
    $b = '10';
    if($a==$b){
        echo "a & b similar";
    }else{
        echo "not";
    }
    echo "<br>";
    $a = 10;
    $b = '10';
    if($a===$b){
        echo "a & b similar";
    }else{
        echo "not";
    }
    echo "<br>";

    $a = 10;
    $b = 10;
    if($a!=$b){
        echo "not";
    }else{
        echo "a & b similar";
    }
    echo "<br>";
    $a = 10;
    $b = 20;
    if($a>$b){
        echo "A";
    }else{
        echo "B";
    }
    echo "<br>";

    //php increment/decrement operator//
    $a = 10;
    $a = $a +1;
    $a++;
    $a--;
    ++$a;
    --$a;
    echo $a;
    echo "<br>";

//logical operator//
    $a =30;
    $b =20;
    $c =10;

    if($a > $b && $a > $c){
        echo "A is the biggest number";
    }elseif($b > $a && $b > $c){
        echo "b";
    }else{
        echo "c";
    }
    echo "<br>";

    if($a > $b || $a > $c){
        echo "A is the biggest number";
    }elseif($b > $a || $b > $c){
        echo "b";
    }else{
        echo "c";
    }
    echo "<br>";

    //not operator//
    echo !false;

    echo "<br>";

    //GPA Calculator//

    $marks =69;
    
    if($marks >= 80 && $marks <= 100){
        echo "You got A+";
    }elseif($marks >=70 && $marks <= 79){
        echo "You got A Grade";
    }elseif($marks >=60 && $marks <= 69){
        echo "You got A- Grade";
    }elseif($marks >=50 && $marks <= 59){
        echo "You got B Grade";
    }elseif($marks >=40 && $marks <= 49){
        echo "You got C Grade";
    }elseif($marks >=33 && $marks <= 39){
        echo "You got D Grade";
    }elseif($marks >=00 && $marks <= 32){
        echo "You got F Grade";
    }else{
        echo "Invalid Number";
    }
echo "<br>";

    switch($marks){
        case ($marks >= 80 && $marks <=100):
            echo "You got A+";
            break;
        case ($marks >= 70 && $marks <=79):
            echo "You got A";
            break;
        case ($marks >= 60 && $marks <=69):
            echo "You got A-";
            break;
        case ($marks >= 50 && $marks <=59):
            echo "You got B";
            break;
        case ($marks >= 40 && $marks <=49):
            echo "You got C";
            break;
        case ($marks >= 33 && $marks <=39):
            echo "You got D";
            break;
        case ($marks >= 00 && $marks <=32):
            echo "You got F";
            break;
        default:
            echo "Invalid Number";
    }
    echo "<br>";

    // 1-100//
    // for($i=1; $i<=100; $i++){
    //     echo $i.'<br>';
    // }

    
  /*  for ($i = 1; $i<=1000; $i+=2){
    echo $i.'<br>';
    }*/


    $sum=0;
	
for ($i=1; $i<=100; $i++)
	
{
$sum=$sum+$i;   
} 
echo $sum;

echo '<br>';

$n = 100;
for ($i = 1; $i <= $n; $i++) {
    if (($i % 2) != 0) {
        echo $i.'<br>' ;
    }
}
    
?>