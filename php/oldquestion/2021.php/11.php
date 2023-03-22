<?php


function sort_ascending($numbers){
    echo "the integers in ascending order are given below:";
    sort($numbers);
    for($i=0;$i<count($numbers);$i++){
        echo $numbers[$i]." ";
    }
}
$integers=array(45,23,2,4,12,4,5,90);
sort_ascending($integers);
?>
