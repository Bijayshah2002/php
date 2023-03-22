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
        <label for="username">Username</label>
        <input type="text" name="username" id="usser">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="pass">
        <Br>
        <input type="submit" name="submit" value="submit">
        <br>
    </form>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    if($user="username" && $pass="password"){
        $SESSION['username']=$user;
        $SESSION['start']=time();
        $session['expire']=$SESSION['start']+(5*60*60);
        echo " login successful";
    }
    else
    echo " invalid username or password";

}


?>