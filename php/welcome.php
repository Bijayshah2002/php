<!DOCTYPE HTML>
<html>
<body>
<form action="welcome.php" method="post">
Name: <input type="text" name="username"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>       
</html>

Welcome.php

<html>
<body>
Welcome <?php echo $_POST["username"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</body>
</html>