<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Staff Data</title>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>
    <div class="formcontent">
    <form action="staffupdate.inc.php" method="post">
      Staff SSN:<input type ="text" name="staff_ssn" placeholder="SSN"><br>
      Staff Name:<input type ="text" name="staff_name" placeholder="Name"><br>
      Nationality:<input type ="text" name="staff_nationality" placeholder="Country"><br>
      Age:<input type ="number" name="staff_age" placeholder="Age"><br>
      Designation:<input type ="text" name="staff_designation" placeholder="Designation"><br>
      Joining date:<input type ="date" name="staff_joining_date" placeholder="Joining date"><br>
      Contract:<input type ="date" name="staff_contract" placeholder="Contract"><br>
      Weekly salary:<input type ="number" name="staff_weekly_salary" placeholder="Weekly salary">
      <div  class="c1"><button type ="submit" name="submit">Insert Data</button></div>
    </form></div>
  </body>
</html>
