<?php
      session_start();
      $_SESSION["button"] = 0;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title></title>
  </head>
  <body>

      <form class="" action="session_son.php" method="post">
        <div class="form-group">
        <h1>JUST CLICK THERE, MATE -->
        <input class = "btn btn-primary" type="submit" name="submit" value="submit">
        </h1>
        </div>
        <div class="form-group">
<h2>You have clicked <?=$_SESSION["button"]?> times </h2>
        </div>
      </form>
  </body>
</html>
