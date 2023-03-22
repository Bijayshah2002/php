<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="">
    <br>
<label for="age">Age:</label>
<input type="text" name="age" id="">
<br>
<label for="gender">Gender:</label>
<input type="radio" name="gender" id="">Male
<input type="radio" name="gender" id="">Female
<br>
<input type="submit" name="submit" value="store into file ">
</form>
</body>

</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $file=fopen("person.txt","a") or die("connot open the file!");
    fwrite($file,$name." ".$age." ".$gender);
    fclose($file);
    echo "<br>";
    echo "Data saved successfully:";
}



?>