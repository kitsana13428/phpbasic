<?php
//ระบุ array range โดยไม่ต้องใส่ทีละตัว
    $number = range(1,25);//1 ถึง 25
    $number2 = range(1,100,10);//1 ถึง 100 เพิ่มทีละ 10
    $word = range('A','O',2);//ให้ตัวอักษรเพิ่มทีละ 2 
    
    print_r($number);//แสดงผลทุกตัว 1-25
    print ("<br>");

    print_r($number2);
    print ("<br>");
    
    print_r($word);
?>