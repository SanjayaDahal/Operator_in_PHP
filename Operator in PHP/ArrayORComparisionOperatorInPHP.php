<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparision operator in php</title>
</head>
<body>
    <?php
$x =100;
$y = "100";

var_dump($x==$y)."<br>";   // returns true if x=y

var_dump($x===$y)."<br>";  // returns true only if x=y and they are of same type

var_dump ($x!=$y)."<br>";  // returns true if x is not equall to y

var_dump ($x<>$y)."<br>";  // returns true if x is not equall to y

var_dump($x!==$y)."<br>";  // returns true if x is not equall to y and they are of same type

var_dump  ($x>$y)."<br>";  // returns true if x>y

var_dump  ($x<$y)."<br>";  // returns true if x<y

var_dump ($x>=$y)."<br>";  // returns true if 

var_dump ($x<=$y)."<br>";  // returns true if 

//var_dump($x<=>$y);  // returns -1 is x>y, 0 if x=y and -1 if x>y


    ?>
</body>
</html>