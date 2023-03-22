<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function validate(){
        var x=document.forms["data"]["name"].value;
        if(x==""){
        alert("enter the name")
        return false;
        }
        var y=document.forms["data"]["age"].value;
        if(y<1 || y>100){
            alert("age must be between 1 and 100");
            return false;
        }
        var z=document.forms["data"]["comment"].value;
        if(z==""){
            alert("comment must not be blank");
            return false;
        }
    }
</script>
<body>
    <form name="data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onclick="return validate()">
<label for="name">Name</label>
<input type="text" name="name" id="nam">
<br>
<label for="age">Age</label>
<input type="text" name="age" id="txt">
<br>
<label for="comment" >Comment</label>
<input type="text" name="comment" id="commen">
<br>
<input type="submit" value="validitate">
</form>
</body>
</html>