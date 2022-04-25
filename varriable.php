<?php
/**
 * data type in php
 * number, string, boolean, hoặc NULL, "integer", "double", "string", "array",", "class"
 */

$message = " Ngay dau tien di hoc 18";
$level = 16.08;
$b = (integer)$level; // ép kiểu


// định nghĩa const variable 
define("Neng", "xau trai vo dich"); 
define("PI", 3.14);

var_dump($message); //in ra bien va kieu du lieu cua bien
gettype($message); // => string
settype($message, "integer");
empty($message); //=> true if it's null


is_string($message); //=> true || false;
is_numeric($level); //kiem tra xem kieu du lieu cua $level co phai so hay khong 

unset($message); // => remove variable => giải phóng bộ nhớ
unset($level);

?>