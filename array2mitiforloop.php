<?php
//อาเรย์แบบ 2 มิติ

    $products = array(
        array("คีย์บอร์ด","Keyboard",500),
        array("เมาส์","Mouse",700),
        array("ไมค์","Microphones",900),
        array("หูฟัง","Headphones",1000),

    );
//การเข้าถึง => แถว , คอลัมน์
//(0,1,2) แถวที่ 1
//(1,1,2) แถวที่ 2
//(2,1,2) แถวที่ 3

//การใช้ for loop แสดงข้อมูล
    for($row=0;$row<count($products);$row++){
        print("ชิ้นที่ = ".$row."<br>");
        for($column=0;$column<count($products[$row]);$column++){
            print($products[$row][$column]."<br>");
        }
        print("<hr>");
    }
   

?>