<?php

function check($countries,$exist_country){
 foreach($countries as $arr){
    if($arr==$exist_country){
    echo "The country is in the list:".$arr;
 }
}
}
$list=array("nepal","america","canada","newzealand");
check($list,"nepal");

?>