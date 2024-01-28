<?php
//print  1-1000 odd number only using for loop
/*
for ($i=1; $i <=1000; $i++){
    if($i%2 !=0){
        echo $i."<br>";
    }
}
*/

// $i = 1;
/*
while($i <= 1000){
    echo $i."<br>";
    $i++;
} */

/* do{
    echo $i."<br>";
    $i++;
}while($i <= 1000); */

//index arrays

/* $city = array("Dhaka", "Tangail", "Jamalpur");
print_r($city);
echo $city[1]; */

// associative arrays

//$city = array("Dhaka", "Tangail", "Jamalpur");
//array can be written as follows
//$city = ["Dhaka", "Tangail", "Jamalpur"];

/* $run = array("Sakib"=>55, "Asif"=>22, "Rakib"=>25);
echo $run["Sakib"]; */

//multi-dimensional arrays
/* $students = array(
    array("Asad", 29),
    array("Arib", 28),
    array("Araf", 59) 
)*/
$city = ["Dhaka", "Tangail", "Jamalpur"];
echo "<ul>";
foreach ($city as $value) {
    echo "<li>$value</li>";
}
echo "</ul>";


// $i = 1;
// while ($i <= 100) {
//     if ($i % 2 == 0) {
//         echo $i . "<br>";
//         $i++;
//     }
// }
?>