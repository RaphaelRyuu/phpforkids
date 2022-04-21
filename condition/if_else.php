<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
//câu điều kiện
//if else
$number = 11;
echo $number . " là ";
if ($number % 2 == 0) {
    echo "số chẵn ";
} else {
    echo "số lẻ ";
}
if ($number >= 0) {
    echo "và nguyên dương";
} else echo "và nguyên âm";
echo "<br \>";
//có thể gộp điều kiện lại bằng toán tử &&
if ($number % 2 == 0 && $number >= 0) {
    echo $number . " là số nguyên dương chẵn";
} else if ($number % 2 == 0 && $number < 0) {
    echo $number . " là số nguyên âm chẵn";
} else if ($number % 2 == 1 && $number >= 0) {
    echo $number . " là số nguyên dương lẻ";
} else echo $number . "là số nguyên âm lẻ";
echo "<br \>";
//toán tử điều kiện tương đương với câu trên
$check1 = ($number >=0) ? " là số nguyên dương" : " là số nguyên âm";
$check2 = ($number % 2 == 0) ? " chẵn" : " lẻ";
echo $number . $check1 . $check2 . "<br \>";
