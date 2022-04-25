<?php
setcookie("user", "yushaku", time() + 60 * 60);
?>

<html>
  <body>
    <?php
      echo $_COOKIE["user"];
      setcookie("user", "", time()-3600);//remove cookies
    ?>
  </body>
</html>