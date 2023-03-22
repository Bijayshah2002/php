<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>storing session variable</h1>
    session_start()
    <br>
</body>
</html>
<?php
session_start();
$_SESSION['views']=1;
echo "pageviews:". $_SESSION['views'];
?>