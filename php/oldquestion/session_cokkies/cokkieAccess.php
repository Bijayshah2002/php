<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Accessing cokkies</h1>
</body>
</html>
<?php
if(isset($_COOKIE['lastvisit'])){
    $visit=$_COOKIE['lastvisit'];
}
else
echo "your cookie got stale";
echo "<br>";
echo "welcome back...you visited last time on".$visit;
?>
