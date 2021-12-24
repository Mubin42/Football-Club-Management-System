<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manager Data</title>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>
    <div class="formcontent">
    <form action="signupmanager.inc.php" method="post">
      License No:<input type ="text" name="manager_license_no" placeholder="license_no"><br>
      Manager Name:<input type ="text" name="manager_name" placeholder="Name"><br>
      Manager nationality:<input type ="text" name="manager_nationality" placeholder="Country"><br>
      Manager Age:<input type ="number" name="manager_age" placeholder="Age"><br>
      Manager Type:<input type ="text" name="manager_type" placeholder="type"><br>
      Number of matches:<input type ="number" name="manager_matches" placeholder="matches"><br>
      Number of wins:<input type ="number" name="manager_wins" placeholder="wins"><br>
      Number of draws:<input type ="number" name="manager_draws" placeholder="draws"><br>
      Number of loses:<input type ="number" name="manager_loses" placeholder="loses"><br>
      Weekly salary:<input type ="number" name="manager_weekly_salary" placeholder="Weekly salary"><br>
        <div  class="c1"><button type ="submit" name="submit">Insert Data</button></div>
    </form></div>
  </body>
</html>
