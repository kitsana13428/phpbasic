<?php
//การสร้าง function 
//ฟังก์ชั่นแบบแสดงผลธรรมดา
 
    function show($message){ //พารามิเตอร์ messsage
        print("<b>Hello " .$message. "</b>");
        print("<br>");
        print("<hr>");
    }

//พารามิเตอร์ ส่งค่า
//อาร์กิวเม้น รับค่า

//เรียกใช้ function
//มีเพื่อลดการทำซ้ำ 
    show("kitsana"); //kitsana อากิวเม้น
    show("PHP");
 
//----------------------
//function การบวกเลข
//function การรับค่า
    function add($a , $b){ //สร้างพารามิเตอร์
        $c = $a + $b; //C คือ a + b
        print($a."+".$b."=".$c);
        print("<br>");
    }

//เรียกใช้ฟังกชั่น
    $x = 10;
    $y = 30;
    add($x,$y); //เรียกใช้พารามิเตอร์
    add(100,50); //ใช้งานฟังก์ชั่นได้เรื่อยๆ 
    add(60,5);

?>