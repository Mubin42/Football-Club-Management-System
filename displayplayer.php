<?php
  include_once 'dbh.inc.php';
  $sql="Select * from player";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="css/style.css">
  <header class="pth">
    Player Table <br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Position</th>
      <th>Height</th>
      <th>Weight</th>
      <th>Transfer Fee</th>
      <th>Age</th>
      <th>Nationality</th>
      <th>Appearances</th>
      <th>Goals</th>
      <th>Assists</th>
      <th>KeyPass</th>
      <th>Pass Accuracy</th>
      <th>Cross Accuracy</th>
      <th>Shot Accuracy</th>
      <th>Tackle Ratio</th>
      <th>Yellow Cards</th>
      <th>Red Cards</th>
      <th>Cleansheets</th>
      <th>Wages</th>
      <th>Contract</th>
      <th>Team Role</th>
      <th>Value</th>
      <th>Rating</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['player_id']."</td>
      <td>".$result['player_name']."</td>
      <td>".$result['player_position']."</td>
      <td>".$result['player_height']."</td>
      <td>".$result['player_weight']."</td>
      <td>".$result['player_transferfee']."</td>
      <td>".$result['player_age']."</td>
      <td>".$result['player_nationality']."</td>
      <td>".$result['player_appearances']."</td>
      <td>".$result['player_goals']."</td>
      <td>".$result['player_assists']."</td>
      <td>".$result['player_keypass']."</td>
      <td>".$result['player_passacc']."</td>
      <td>".$result['player_crossacc']."</td>
      <td>".$result['player_shotacc']."</td>
      <td>".$result['player_tackleratio']."</td>
      <td>".$result['player_yellowcard']."</td>
      <td>".$result['player_redcard']."</td>
      <td>".$result['player_cleansheet']."</td>
      <td>".$result['player_wages']."</td>
      <td>".$result['player_contract']."</td>
      <td>".$result['player_teamrole']."</td>
      <td>".$result['player_value']."</td>
      <td>".$result['player_rating']."</td>
      </tr>";
    }

?>
</table></div>
