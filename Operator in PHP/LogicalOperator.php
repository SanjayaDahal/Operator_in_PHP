<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logical operator</title>
</head>
<body>
<?php
        $x = 100;  
        $y = 50;

        if ($x == 100 && $y == 50) 
        {
            echo "Hello world!"."<br>";
        }
        if ($x == 100 || $y == 50) 
        {
            echo "Hello world!"."<br>";
        }
        if ($x  !== 100) 
        {
            echo "Hello world!"."<br>";
        }
?>
</body>
</html>