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
    <label>first number</label>
    <input type="number" name="num1">
    <br>
    <label>second number</label>
    <input type="number" name="num2">
    <br>
    <label>third number</label>
    <input type="number" name="num3">
    <br>
    <input type="submit" name="submit">

     </form>
     </body>
</html>
     <?php 
     if(isset($_POST['submit'])){
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        $c=$_POST['num3'];
        $sum=$a+$b+$c;
        echo "the sum of three number:".$sum;
     }
        ?>
