<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>retrieving session</h1>
    session_start()
</body>
</html>
<?php
session_start();
echo "session user". $_SESSION['user'];
echo "session profile". $_SESSION['profile'];

?>