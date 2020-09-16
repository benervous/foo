<?php require "functions.php"?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>TODO, buddy!</title>
   </head>
   <body>
     <div class="Welcome">
       <h1>Hello here! Just be cool, don't be asshole (c) Anonymous.</h1>
     </div>
     <div class="TODO-list">
     <div class="Homework-list">
       <h2>Homework</h2>
       <?php showId("TODO"); ?>
     </div>
     <div class="Schedul-list">
     <?php showId("Scheduled things"); ?>
     </div>
     </div>

   </body>
 </html>
