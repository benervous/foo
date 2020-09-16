<?php session_start();
      if(isset($_POST['submit'])){
      $_SESSION["button"]++;
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo $_SESSION["button"]; ?></h1>

  </body>
</html>
