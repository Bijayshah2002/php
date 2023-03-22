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
        <input type="text" name="name" id="" required="">
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="">
        <br>
        <label for="hobbies">Hobbies:</label>
        <input type="checkbox" name="hobbies[]" value="reading" id="">Reading
        <input type="checkbox" name="hobbies[]" value="singing" id="">Singing
        <input type="checkbox" name="hobbies[]" value="playing" id="">Playing
    
        <br>
        <label for="comment">Comment:</label>
        <br>
  <textarea name="comment" id="" cols="34" rows="10"></textarea>  
  <br>
  <input type="submit" value="validate" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$age=$_POST['age'];
$comment=$_POST['comment'];
$arr=str_split($name);
$arrlength=count($arr);
$hobbies=$_POST['hobbies'];
if($hobbies==NULL)
echo "hobbies is not selected";
echo "<br>";
$hobbieslength=count($hobbies);
echo "number of hobbies :".$hobbieslength;
echo "<br>";
echo "the character number in the name:".$arrlength;
echo "<br>";
if($arrlength<2 || $arrlength>11){
echo "name must contain only 2-10 characters";
return;
}
foreach($arr as $value){
    if(is_numeric($value)){
        echo "name cannot contain number in it";
        return;
    }
}
if($age<16 && $age>55){
    echo "age should be in between 16 and 55";
    return;
}
if($hobbieslength==0){
    echo "atleast one hobbies should be selected";
    return;
}
if($comment==NULL){
echo "comment should not be blank";
return;
}
echo "<br>";
echo "form subbmitted successfully";
}
?>
