<?php
//อาเรย์แบบ 2 มิติ!
//แสดงค่าแบบ for each 
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

//การใช้ for each แสดงข้อมูล
    foreach($products as $product){
        print("ชื่อสินค้าไทย = ".$product[0]."<br>");
        print("ชื่อสินค้าอังกฤษ = ".$product[1]."<br>");
        print("ราคาสินค้า = ".$product[2]."<br>");
        print("<hr>");
    }
   

?>