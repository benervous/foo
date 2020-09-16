<?php include "connect.php"; ?>
<?php include "functions.php";?>
<?php Update(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Update</title>
  </head>
  <body>
    <div class="col-sm-6">
      <h1 class = "test-center">Update</h1>
      <form action="update.php" method="post">
        <div class="form-group">
          <label for="Username">Username</label>
          <input type="text" name="Username" placeholder="Enter your username" class="form-control">
        </div>
        <div class="form-group">
          <label for="Password">Password</label>
          <input class="form-control" type="Password" name="Password" placeholder="Enter your password">
        </div>
     <div class="form-group">
        <select class="" name="id">
          <?php showId(); ?>
        </select>
        <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        </div>
      </form>
    </div>
  </body>
</html>
