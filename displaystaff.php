<?php
  include_once 'dbh.inc.php';
  $sql="Select * from staff";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="css/style.css">
  <div class="tl1"><table>
    <tr>
      <th>Social Security No.</th>
      <th>Name</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Designation</th>
      <th>Joining Date</th>
      <th>Contract</th>
      <th>Salary</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['staff_ssn']."</td>
      <td>".$result['staff_name']."</td>
      <td>".$result['staff_nationality']."</td>
      <td>".$result['staff_age']."</td>
      <td>".$result['staff_designation']."</td>
      <td>".$result['staff_joining_date']."</td>
      <td>".$result['staff_contract']."</td>
      <td>".$result['staff_weekly_salary']."</td>
      </tr>";
    }

?>
</table></div>
