<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
echo "welcome to the sql database";
echo "<br>";
$username="root";
$server="localhost";
$password="";
$connect=mysqli_connect($server,$username,$password);
if(!$connect){
    die("sorry we cannot connect to the sql server".mysqli_connect_error());
}
else 
echo "successfully connected to the sql server";
echo "<br>";
$createDB="create database planess";
if(mysqli_query($connect,$createDB)){
echo "database made successfully";
}
else
echo "probleml occured". mysqli_connect_error($connect);
$sql="create table planes
(id int primary key,
name varchar(30),
source varchar(20),
destination varchar(30),
datejoined date
)";
if(mysqli_query($createDB,$sql)){
    echo "table created successfully";
}
else
echo "probleml occured". mysqli_connect_error($connect);
$sqldata="insert into planes values(1,'yeti','kathmandu','bhaktapur','11-11-2020')";
if(mysqli_query($createDB,$sqldata)){
    echo "data inserted successfully";
}
else
echo "probleml occured". mysqli_connect_error($connect);
$check="select name from planes where source='kathmandu' and destination='bhaktapur'";
if(mysqli_query($createDB,$check)){
    echo $check;
}
?>