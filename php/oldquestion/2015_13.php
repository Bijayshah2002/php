<?php
$first_array = array(2, 4, 6, 8, 10);
$second_array = array(3, 5, 7, 9, 11);
$result_array = array();//array declaration with no values
echo sizeof($first_array);
echo "<br>";
$sum=0;
for($i = 0; $i < sizeof($first_array); $i++){
$result_array[$i] = $first_array[$i] + $second_array[$i];

$sum=$result_array[$i]+$sum;
}
echo $sum;
echo "<pre>";
print_r($first_array);
print_r($second_array); 
print_r($result_array);
echo "</pre>";
echo 'Sum of two arrays is: '.array_sum($result_array);
?>