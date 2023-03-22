<?php
session_start();
$_SESSION['name']="bijay shah";
$_SESSION['age']=21;
$_SESSION['adress']="birgunj";
echo "My city name is:". $_SESSION['name']."<br>";
echo "My age is:".$_SESSION['age']."<br>";
echo "My address is:". $_SESSION['adress'];
session_destroy();

?>