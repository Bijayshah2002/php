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
          <h1>enter your name</h1>
          <input type="text" name="text" id="">
          <br>
          <h2>Hobbies</h2>
          <input type="checkbox" name="hobbies[]" value="singing" id="">Singing
          <input type="checkbox" name="hobbies[]"  value="dancing" id="">Dancing
          <input type="checkbox" name="hobbies[]" value="coding"  id="">Coding
          <br>
          <input type="submit" name="submit">

    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if(isset($_POST['text'])&& !empty($_POST['text']) && trim($_POST['text'])!= ''){
  $name= $_POST['text'];
  echo "name".$name;
    }
    else
    echo "<br> <h2>please enter the name again</h2>";
  if(isset($_POST['hobbies'])){
$hobbies=$_POST['hobbies'];
echo "<br> hobbies are :";
foreach($hobbies as $hobby){
    echo $hobby." ";
}
}
else 
  echo "<h1> select at atleast one hobby</h1>";

}
?>