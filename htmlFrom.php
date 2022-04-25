<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
    <h2>login</h2>
    <br>
    <INPUT type="text" name='txtTendangnhap' placeholder="name">
    <br>
    <INPUT type="password" name="txtMatkhau" placeholder="password">
    <br>
    <input type="checkbox" name="check_html" value="HTML"> HTML
    <input type="checkbox" name="check_css" value="CSS"> CSS
    <br>
    Giới tính:
    <br>
    <input type="radio" name="gender" value="nam">Nam
    <input type="radio" name="gender" value="woman">Nữ
    <br>
    <INPUT type="submit" name="btnSubmit" value="Submit">
    <INPUT type="reset">
  </form>
</body>


<?php
if (isset($_POST['submit'])) {
  $name = $_POST['txtTendangnhap'];
  $password = $_REQUEST['txtMatkhau'];
  $checkboxHTML = $_POST('check_html');
  $checkboxCSS = $_POST('check_css');
  $gender = $_POST['gender'];

  echo ('<h2>hello</h2>' . $name . ' ' . $password);


  /**
   * depend on method post/get => data is stored in array $_POST/$_GET
   * or it stored in array $_REQUEST = $_POST || $_GET || $_COOKIE
   */
}
?>

</html>