<!DOCTYPE html>
<html lang="en">
<head>
    <title>TU Question No.15, 2019</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="name" placeholder="Enter Name" required=""/><br/>
        <input type="number" name="age" placeholder="Enter Age" required=""/><br/>
        <input type="checkbox" name="hobbies[]" value="reading"/>Reading
        <input type="checkbox" name="hobbies[]" value="playing"/>Playing
        <input type="checkbox" name="hobbies[]" value="singing"/>Singing<br/>
        <textarea name = "comment" rows="4" cols="30" placeholder="comment here..." required="">
        </textarea><br/>
        <input type="Submit" name="submit" value="Validate">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $hobbies = $_POST['hobbies'];
            $hobbylength = count($hobbies);
            //validation
            $nameArray = str_split($name); //convert string into array
            $nameLength = strlen($name);
            //name
            if($nameLength<2 && $nameLength>11){
                echo "name length shoud be between 2-10";
            }
            //checking for numbers in strings
            foreach($nameArray as $key){
                if(is_numeric($key)){
                    echo "character as number not allowed in name";
                    return;
                }
            }
            //age
            if($age<16 && $age>56){
                echo "Age should be between 16-55";
                return;
            }
            //hobbies should be selected
            if($hobbylength==0){
                echo "one hobby should be selected";
                return;
            }
            echo "form is subbmitted successfully";     
        }
    ?>
</body>
</html>