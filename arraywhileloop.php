<?php
//while loop array function each

    $colors = ["yellow"=>"เหลือง","red"=>"แดง","orange"=>"ส้ม"];

    while($item=each($colors)){
        print("key = ".$item["key"]." Value = ".$item["value"]."<br>");
    }


?>