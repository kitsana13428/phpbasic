<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basic</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>  

    <h1>html ร่วม php</h1>
<?php
    //การใช้ php ร่วม html
    echo "<h1>kitsana</h1>";
    $name = "cop kitsana"; //string
    $age = "25"; //integer
    $phone = "0806344238";

    echo "<h1>ชื่อ".$name."</h1><br>";
    echo "<h1>อายุ".$age."</h1><br>"

?>

</body>
</html>