<?php

$balance = 5000;
$transfer = 4500;

$a = $transfer<=$balance; //เก็บค่าการเปรียบเทียบจำนวณเงิน
$b = $transfer>0; //ถอนเงินต้องมากกว่า 0 ติดลบไม่ได้

echo "<b><center>ยอดเงินคงเหลือ =  <font color=green>".$balance. " </font>บาท<br>";
echo "<b><center>จำนวณเงินที่ถอน =  <font color=green>".$transfer. " </font>บาท<br><hr>";
if($a && $b) { //ยอดกดน้อยกว่าหรือเท่ากับเงินบัญชี
    echo "<font color=green>สามารถกดเงินได้ </font><br>";
    $balance = $balance-$transfer; //คำนวณยอดคงเหลือ
    echo "ยอดเงินคงเหลือ = <font color=red>".$balance." </font>บาท<br>";//แสดงยอดคงเหลือ

}else{
    echo "ไม่สามารถกดได้ ยอดเงินคงเหลือไม่พอ <br>";
}

echo "<font color=blue>คืนบัตรกดเงิน";
echo "เจมหน้าหี";
?> 