<?php
  include_once 'dbh.inc.php';
  $staff_ssn = $_POST['staff_ssn'];
  $staff_name = $_POST['staff_name'];
  $staff_nationality = $_POST['staff_nationality'];
  $staff_age = $_POST['staff_age'];
  $staff_designation = $_POST['staff_designation'];
  $staff_joining_date = $_POST['staff_joining_date'];
  $staff_contract = $_POST['staff_contract'];
  $staff_weekly_salary = $_POST['staff_weekly_salary'];
  $sql = "Update staff set staff_name='$staff_name',staff_nationality='$staff_nationality',staff_age='$staff_age',
  staff_designation='$staff_designation',staff_joining_date='$staff_joining_date',staff_contract='$staff_contract',staff_weekly_salary='$staff_weekly_salary'
  where staff_ssn='$staff_ssn';";
  mysqli_query($conn,$sql);
  header("Location: staffupdate.php?signupstaff=success");
  ?>
