<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
//toan tu binh thuong + - * / %
$x = 10;
$y = -$x +5;
$z = $y *2;
echo $x % 3 . "<br \>"; //chia lay phan du
echo $y/2 . "<br \>";
echo $z . "<br \>";

//toan tu gan += -= *= /=
$x *=5; //$x = $x*5
echo $x . "<br \>";

//toan tu ++$bien vs $bien++, tuong tu voi --
$x = 2;
$y = $x++; // $x++: tra ve gia tri cua x roi moi tang 1 don vi
$m = 5;
$n = ++$m; // ++$m: tang gia tri $m len 1 don vi roi tra ve gia tri cua $m
echo "Y: " . $y . "<br \>";
echo "X: " . $x . "<br \>";
echo "N: " . $n . "<br \>";
echo "M: " . $m . "<br \>";

//toan tu so sanh '==' bang, '===' bang tuyet doi, '!=, <>' so sanh khac, '!===' khac tuyet doi, '<,>' lon hon nho hon
$x=2; $y="4"; $z=4;
echo "X lon hon Y dung khong? " . ($x > $y) . "<br \>"; //in ra 1 = true, khong in ra = false
echo "Y bang Z dung khong? " . ($y == $z) . "<br \>"; 
echo "Y bang tuyet doi Z dung khong?" . ($y === $z) . "<br \>"; //=== so sanh ca kieu du lieu cua 2 bien

//toan tu logic voi: and == &&, or == ||
// xor=true neu chi x hoac chi y true, !$x =true neu $x false
$x=5; $y=10;
echo "$x<6 and $y>8? " .  ($x<6 and $y>8) . "<br \>";
echo "! <$x<6> ? " .  (!$x<6) . "<br \>";

//toan tu dieu kien
$x=9; $var="Nang";
$check = ($x>0) ? "số dương" : "số âm";
$result = (is_string($var)) ? "là chuỗi" : "không phải chuỗi";
echo "$x có phải số dương không? " . $check . "<br \>";
echo "'$var' có phải chuỗi không? " . $result . "<br \>";
?>