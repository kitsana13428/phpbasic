<?php
//array for each
//การลูปข้อมูลมาแสดงให้หมด

//อาเรย์แบบเดียว

    $number = [10,20,30,40,50,60,70];
    $fruits = ["ส้ม","มะละกอ","แอปเปิ้ล","กล้วย","ขุนน","น้อยหน่า","องุ่น"];

//อาเรย์แบบคู่
    $colors = ["red"=>"แดง","yellow"=>"เหลือง","orange"=>"ส้ม","green"=>"เขียว"];
    $animals =["dog"=>"หมา","cat"=>"แมว","pig"=>"หมู","cow"=>"วัว"];

//อาเรย์แบบเดี่ยวใช้งาน
    foreach($fruits as $fruit){ //ดึงข้อมูลทั้งหมดมาแสดง
        print($fruit."<br>");
    }

    print("<hr>");

//อาเรย์แบบคู่ใช้งาน
    foreach($animals as $key=>$value){ //ดึงข้อมูล key และ value มาแสดง
        print("คำศัพท์ = ".$key." คำแปล = ".$value."<br>");
    }

?>