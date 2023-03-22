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
        <h1>ENTER STRING</H1>
        <BR>
        <input type="text" name="str">
        <br>
        <input type="submit" value="display">
        <h1></h1>
        
</body><h1></h1>
</html>
<?php
if($_POST){
    $arr=trim($_POST['str']);
    $length=strlen($arr);
    $split=str_split($arr);
    $size=sizeof($split);
    echo $size;
    echo "<br>";
    echo "first:".$split[0]." last:".$split[$size-1];
    echo "<br>";

    echo "string:".$arr;
    echo "<br>";
    echo "length:".$length;
    echo "<br>";
    echo "first char:".$arr[0]."<br> last char:".$arr[$length-1];
    
}
    ?>
