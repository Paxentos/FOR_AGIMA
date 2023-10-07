<?php
//Выведи ассоциативный массив в обратном порядке без использования  array_reverse().

$test = [
    'one'=>1,
    'two'=>2,
    'three'=>3
];
//print_r($test);
$reverse =[];
$arrKeys= array_keys($test);
for ($i=count($arrKeys)-1;$i>=0;$i--){
    //print_r($arrKeys[$i]. ' ');
    $reverse[$arrKeys[$i]] = $test[$arrKeys[$i]];
}
print_r($reverse);

