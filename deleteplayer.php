<?php
  include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>
    <div class="formcontent">
    <form  action="deleteplayer.inc.php" method="post">
      Delete Player data :<input type="text" name="name" placeholder="Player name">
      <div  class="c1"><button type ="submit" name="submit">Submit</button></div>
    </form></div>
  </body>
</html>
