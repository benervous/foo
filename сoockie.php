<?php
$expiration = time() + 60*60*24*7;
$name = "SomeName";
$data = 100;


setcookie($name, $data, $expiration);


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Coockie</title>
    <h1>Hi there!</h1>
    <div class="cookie">
      <?php
      if(isset($_COOKIE["SomeName"])){
        $cookie = $_COOKIE["SomeName"];
        echo $cookie;
      }
      else{
        echo "This cookie doesn't exitst";
      }

       ?>

    </div>
  </head>
  <body>

  </body>
</html>
