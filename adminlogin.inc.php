<?php
  include_once 'dbh.inc.php';
  $name=$_POST['name'];
  $pwd=$_POST['password'];
  $data = mysqli_query($conn,"SELECT admin_password FROM admin WHERE admin_name='admin';");
  $result= mysqli_fetch_array($data);
  $pwdsv= $result[0];

  if($pwd==$pwdsv){
    echo "Login Successful";
    header("Location: adminhome.php?adminlogin=success");
  }
  else{
    echo "Incorrect Password";
  }
?>
