<?php
// zad15
// for($i = 0; $i <= 1000; $i++){
//     if($i % 3 == 0 && $i % 7 == 0){
//         echo $i . " ";  
//     }
// }

// zad16

// for($i = 0; $i <= 100; $i++){
//     if($i % 3 != 0){
//         echo $i . " ";  
//     }
// }

// zad 17

// $x = 10;
// $licznik = 0;
// for($i = $x; $i <= $i + 20; $i++){
//     if($i % 3 == 0){
//         echo $i . " ";
//     }
// }

//zad 19

$array = [1,4,3,6,8,9,2];

$max = $array[0];

for($i = 0; $i < count($array); $i++) {
    if($array[$i] > $max){
        $max = $array[$i];
        
    }
}
echo $max;


?>
