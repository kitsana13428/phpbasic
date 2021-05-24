<?php
//switch case
 $month = 1; //ข้อมูลนำเข้า

    switch($month){
        case 1 : echo "เดือนมกราคม"; //ตรงกำบเงื่อนไข
            break; //สั่งหยุดการทำงาน
        case 2 : echo "เดือนกุมภาพันธ์";
            break;
        case 3 : echo "เดือนมีนาคม";
            break;
        default : //ไม่ตรงเงื่อนไขเลย
            echo "ไม่พบข้อมูล"; 
    }


?>