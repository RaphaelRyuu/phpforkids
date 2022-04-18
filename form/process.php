<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
//method post hay get thi dung $_ tuong ung, $_REQUEST dung cho ca hai method
//echo $_POST["username"] . "<br \>";
//echo $_REQUEST["password"] . "<br \>";
$username = $_POST["username"];
$password = $_POST["password"];

$result = ($username == "nengdeptrai" && $password == "1682000") ? "Đăng nhập thành công" : " Đăng nhập thất bại"; 
echo $result . "<br \>"//dùng toán tử điều kiện do chưa biết câu điều kiện trong php
?>