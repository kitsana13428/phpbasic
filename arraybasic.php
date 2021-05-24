<?php
//array แบบเดี่ยว ปกติ

    $animal = array("Dog" , "Cat" , "Pig"); //เก็บข้อมูลใน array
    print($animal [0]); //เรียกใช้งาน 0 = Dog
    

    print("<br>");
//array แบบจับคู่
//สามารถระบุ ตัวเลข ตัวอักษรที่เราต้องการได้
    $animals = array("A1"=>"Dog" , "A2"=>"Cat" , "A3"=>"Pig");
    print($animals ["A2"]); //เรียกใช้งาน A2 = Cat

?>
