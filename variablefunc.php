<?php
    $total1 = null;
    $total2 = "";
    $total3 = 0;
    $total4 ="kitsana";
//การเช็คค่า ถ้ามีค่าจะได้ 1

        
    echo "ตัวแปร Total1 =".is_null($total1)."<br>"; //เป็นค่าว่างเพราะเป้น null
    echo "ตัวแปร Total2 =".isset($total2)."<br>"; //เป็นเลข 1 ถึงข้อ 4
    echo "ตัวแปร Total3 =".isset($total3)."<br>";
    echo "ตัวแปร Total4 =".isset($total4)."<br>";

    echo "<br>";

    //var_dump บอกรายละเอียดตัวแปร
    echo var_dump($total1)."<br>"; //NULL
    echo var_dump($total2)."<br>"; //string (0)
    echo var_dump($total3)."<br>"; //int (0) เก็บเลข 0 เอาไว้
    echo var_dump($total4)."<br>"; //string (7)




?>