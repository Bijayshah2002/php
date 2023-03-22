<body>
<form action="" method="post">
<label>First Number</label>
<input type="number" name="first_num" /> <br />
<label>Second Number</label>
<input type="number" name="second_num" /> <br />
<label>Third Number</label>
<input type="number" name="third_num" />
<input type="submit" name="" value="Submit" />
</form>
</body>
<?php
if($_POST){
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$third_num = $_POST['third_num'];
$sum = $first_num + $second_num + $third_num;
echo 'Sum: '.$sum;
}
?>