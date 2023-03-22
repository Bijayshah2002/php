<?php
echo "welcome to php sql program....";
echo "<br>";
$servername="localhost";
$username="root";
$password=" ";
$name="records";
$connect=Mysqli_connect($servername,$username,$password,$name);
if(mysqli_connect_errno())
{
die("sorry we failed to connect:". mysqli_connect_eror());
}
else
{
echo "successfully connected";
}
?>