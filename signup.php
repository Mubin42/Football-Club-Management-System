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
    <form  action="signup.inc.php" method="post"><br>
      Full Name: <input type="text" name="fullname" placeholder="Full Name"><br>
      Username: <input type="text" name="username" placeholder="Username"><br>
      E-mail: <input type="text" name="email" placeholder="E-mail"><br>
      Password: <input type="password" name="pwd" placeholder="Password"><br>
      Confirm Password: <input type="password" name="pwdrepeat" placeholder="Confirm Password"><br>
      <div  class="c1"><button type ="submit" name="submit">Submit</button></div>
    </form></div>
  </body>
</html>
