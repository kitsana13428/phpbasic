<?php
//continue function
    for($i=1;$i<=10;$i++){
        if($i==5) continue; //ถ้าถึงอันที่5ให้ข้ามไปอันที่6เลย
        echo "รอบที่ = ".$i."<br>";
    }
    exit; //ตัดการทำงานโปรแกรม จะไม่ทำงานด้านล่างอีก                           
    echo "จบการทำงานโปรแกรม"; 


?>