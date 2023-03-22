<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action=""  method="post">
    <label for="date">select the date</label>
    <input type="date" name="date" id="djk">
    <br>
    <input type="submit" value="find days" name="submit">
   </form> 
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $datez=$_POST['date'];
    $date1=new DateTime($datez);
    $date2=new DateTime();
    
    $diff=$date1->diff($date2);
    $days=$diff->days;
    echo "today you are:".$days."days";

}
?>