<?php
//function การกำหนดค่าเริ่มต้น
//function ชื่อ นามสกุล ที่อยู่
//ถ้าที่อยู่ไม่ได้กรอก จะใส่ กทม. อัตโนมัติ
    function showData($fname , $lname , $address = "กรุงเทพมหานคร"){
        print("ชื่อ = ".$fname."<br>");
        print("นามสกุล = ".$lname."<br>");
        print("ที่อยู่ = ".$address."<br>");
        print("<hr>");
    }

//การเรียกใช้งาน
    showData("กฤษณะ" , "รัตนพลแสน" , "ปราจีนบุรี"); 
    showData("ศิริพร" , "ขำวารี" , "อยุธยา");

    showData("สมชาย" , "ใจดี"); //ที่อยู่เป็น กทม.อัตโนมัติ
    showData("สมชาย" , "หมายจันทร์");

?>