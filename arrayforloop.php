<?php
//การ for loop array
//ลดการซ้ำซ้อนการ print ดูข้อมูล
//-------------
//ข้อมูลในอาเรย์ 
    $fruit = ["ส้ม","มะละกอ","กล้วย","ส้ม","มังคุด","ลำไย","ส้มโอ","พุทรา","องุ่น"]; 

    $total = count($fruit); //สร้างตัวแปลเผื่อเก็บการนับค่าในอาเรย์
    for($index = 0;$index<$total;$index++){ //ทำการ loop
        print("ตำแหน่ง = ".$index." --> ".$fruit[$index]."<br>"); 
    }

?>