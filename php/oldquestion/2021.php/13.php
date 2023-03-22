<?php
$servername="localhost";
$username="root";
$password="";
$connects= MySqli_connect($servername,$username,$password);

$createDB="create database coursesss";
if(!$connects){
    die("could not connect to the server;". MySqli_connect_error());
}
if(mysqli_query($connects,$createDB)){
    echo "database successfully created";
    echo "<br>";
}
else
echo "problem occured while making database". mysqli_error($connect);
$connect=MySqli_connect($servername,$username,$password,"coursesss");
$sql="create table subjects(
    sub_id varchar(10) primary key,
    sub_Des varchar(100) NOT NULl,
    sub_cr int(10)
                            )";

 if(mysqli_query($connect,$sql)){
    echo "table created successfully";
    echo "<br>";
 }                            
 else
 echo "error occured while creating data". mysqli_error($connect);

 $data="insert into subjects values(
    'PHP001','Hypertext preprocessor',48)";
 if(mysqli_query($connect,$data)){
    echo "data inserted successfully";
    echo "<br>";
 }
 else
 echo "error occured while inserting data". mysqli_error($connect);

 mysqli_close($connect);
 

?>
h   