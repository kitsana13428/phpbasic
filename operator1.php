<?php

$a=500;
$b=500;
$c=400;

echo "ตัวแปร A =".$a."<br>";
echo "ตัวแปร B =".$b."<br>";
echo "ตัวแปร C =".$c."<br>";

echo "<br>";

echo  ("A = B").var_dump ($a == $b)."<br>"; //แสดงค่า ถ้าเท่ากันจะเท่ากับ true
echo  ("A = C").var_dump ($a == $c)."<br>";
echo  ("A != C").var_dump ($a != $c)."<br>"; //แสดงค่า ถ้าไม่เท่ากันจะได้ true

?>