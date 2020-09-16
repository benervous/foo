<?php include "functions.php"; ?>
<?php Create(); ?>
<?php $id=10; print_r($_GET);?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <title>Form example</title>
 </head>
 <body>
   <div class="col-sm-6">
     <h1 class = "test-center">Create</h1>
     <form action="create.php" method="post">
       <div class="form-group">
        <a href="create.php?id=<?=$id; ?>">CLICK HERE</a>
       </div>
       <div class="form-group">
         <label for="Username">Username</label>
         <input type="text" name="Username" placeholder="Enter your username" class="form-control">
       </div>
       <div class="form-group">
         <label for="Password">Password</label>
         <input class="form-control" type="Password" name="Password" placeholder="Enter your password">
       </div>
       <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
     </form>
   </div>
 </body>
 </html>
