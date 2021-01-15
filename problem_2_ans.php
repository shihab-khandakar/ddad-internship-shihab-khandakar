<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Enter The Number</h3>
    <form action="" method="post">
        <input type="text" name="number" />
        <input type="submit" value="SUBMIT" />
    </form><br>
</body>
</html>
<?php
    if($_POST){
        $first_num = -1;
        $second_num = 1;
        $num = $_POST["number"];

        for($i=1; $i<=$num; $i++){
            $current = $first_num + $second_num;
            $first_num = $second_num;
            $second_num = $current;

            echo $current." &nbsp &nbsp &nbsp &nbsp ";
        }
    }
?>