<?php
$message = "Ngay dau tien di hoc"; //khai bao voi ki tu $ o dau, ten gom[A-z][0-9], none space, phan biet Hoa thuong
$level = 16.08;
define("Neng", "dep trai vo dich"); //dinh nghia hang so
define("tiennuoc", 25);
echo $message; //in ra man hinh
echo "<br \>"; //xuong dong
echo gettype($message); //in ra kieu du lieu
echo "<br \>";
var_dump($message); //in ra bien va kieu du lieu cua bien
echo "<br \>";

echo(int)$level; //ep kieu du lieu cua bien $level tu float -> int
echo "<br \>";
settype($level, "int"); //doi kieu du lieu cua bien
echo $level;
echo"<br \>";

echo is_numeric($level); //kiem tra xem kieu du lieu cua $level co phai so hay khong 
echo"<br \>";
echo is_string($level); //in ra 1 thi dung, khong in ra gi thi sai
echo"<br \>";

echo Neng;
echo "<br \>";
echo "Tien nuoc mot khoi: ". tiennuoc;
?>