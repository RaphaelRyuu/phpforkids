<?php
session_start();
$_SESSION['view'] = 1;
?>
<html>

  <body>
    <?
      echo $_SESSION['view'];
      unset($_SESSION['view']); // remove session
      session_destroy();  // destroy array
    ?>
  </body>

</html>