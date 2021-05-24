<?php
   /*
   คะแนน (score)

   มากกว่า 80 => A
   มากกว่า 70 => B
   มากกว่า 60 => C
   มากกว่า 50 => D
   อื่นๆ > F

   */
  
    $score = 20;
    $grade = "";

    if($score >= 80){
       $grade = "A";
    }
    elseif($score >= 70){
        $grade = "B";
    }
    elseif($score >=60){
        $grade = "C";
    }
    elseif($score >=50){
        $grade = "D";
    }
    else{
        $grade = "F";
    }

    echo "คะแนนของคุณคือ ".$score." เกรดที่ได้ = ".$grade;
?>