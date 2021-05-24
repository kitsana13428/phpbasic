<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        h1{
            text-align:center;
        }
    </style>
<body>
    <?php
    $price1 = 150.05;
    $price2 = 100.05;
    $sum = $price1 + $price2;
     echo "<h1>".$sum."<br>";
     echo "ก่อนแปลง = ".gettype($sum)."<br>";
        //การแปลงค่า variable
    $sum = (integer)$sum; //ทำให้ sum เป็นค่า int
    echo $sum."<br>";
     echo "หลังแปลง = ".gettype($sum)."<br></h1>";
     //หลังแปลงค่า variable
?>
</body>
</html>
