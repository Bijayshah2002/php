<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>clear session</h1>
    session_start()
</body>
</html>
<?php
session_start();
session_destroy();
echo $_SESSION['tagname'];// remain untill page reload
unset($_SESSION['tagname']);
echo $_SESSION['tagname']; //session no more
?>