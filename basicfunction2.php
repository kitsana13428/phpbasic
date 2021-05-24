<?php
//ฟังก์ชั่นแบบส่งค่า
    function getBonus(){
        //ประมวลผล
        return 50000; //ส่งค่าออกไป
    }

    //เรียกใช้งาน
    $bonus = getBonus();
    print("จำนวนโบนัส = ".$bonus);
    print("<br>");
    $salary = 10000 + $bonus;

    print("เงินเดือนรวมโบนัส = ".$salary);

?>