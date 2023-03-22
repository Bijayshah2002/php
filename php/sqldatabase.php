<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// connect database by creating first
$create="create database studentss";
if(mysqli_query($conn,$create))
{
    echo "successfully created database:";
}
else
{
    echo "error occured while creting database". mysqli_error($conn);
}
mysqli_close($conn);

?>