
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
  <label>Date Of Birth:</label>
  <input type="date" name="dob" />
  <input type="submit" value="Calculate Age in Days" />
</form>
</body>
</html>

<?php 
if(isset($_GET['dob'])){
  $dob = $_GET['dob'];
  $date1 = new DateTime($dob);

  $date2 = new DateTime();
  
  $diff = $date2->diff($date1);

  $age_in_days = $diff->days;
  echo "Your age in days is: $age_in_days";
}
?>