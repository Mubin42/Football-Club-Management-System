<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Player Data</title>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>
    <div class="formcontent">
    <form action="playerupdate.inc.php" method="post">
      Player ID:<input type ="text" name="player_id" placeholder="ID"><br>
      Player Name:<input type ="text" name="player_name" placeholder="Name"><br>
      Player Position:<input type ="text" name="player_position" placeholder="Position"><br>
      Player Height:<input type ="number" step="0.01" name="player_height" placeholder="Height(m)"><br>
      Player Weight:<input type ="number" step="0.01" name="player_weight" placeholder="Weight(kg)"><br>
      Player Transfer Fee:<input type ="number" name="player_transferfee" placeholder="Transfer Fee($$)"><br>
      Player Age:<input type ="number" name="player_age" placeholder="Age"><br>
      Player nationality:<input type ="text" name="player_nationality" placeholder="Country"><br>
      Player Appearances:<input type ="number" name="player_appearances" placeholder="Appearances"><br>
      Player goals:<input type ="number" name="player_goals" placeholder="goals"><br>
      Player assists:<input type ="number" name="player_assists" placeholder="assists"><br>
      Player key pass:<input type ="number" step="0.01" name="player_keypass" placeholder="keypass"><br>
      Player Pass Accuracy:<input type ="number" step="0.01" name="player_passacc" placeholder="Pass accuracy"><br>
      Player Cross Accuracy:<input type ="number" step="0.01" name="player_crossacc" placeholder="Cross Accuracy"><br>
      Player Shot Accuracy:<input type ="number" step="0.01" name="player_shotacc" placeholder="Shot Accuracy"><br>
      Player Tackle Ratio:<input type ="number" step="0.01" name="player_tackleratio" placeholder="Tackle Ratio"><br>
      Player Yellow Card:<input type ="number" name="player_yellowcard" placeholder="Yellow Card"><br>
      Player Red Card:<input type ="number" name="player_redcard" placeholder="Red Card"><br>
      Player Clean Sheets:<input type ="number" name="player_cleansheet" placeholder="Clean Sheets"><br>
      Player Wages:<input type ="number" name="player_wages" placeholder="WAges($$)"><br>
      Player Contract:<input type ="date" name="player_contract" placeholder="Contract"><br>
      Player Team Role:<input type ="text" name="player_teamrole" placeholder="Team Role"><br>
      Player Value:<input type ="number" name="player_value" placeholder="Player Value"><br>
      Player Performance:<input type ="number" step="0.01" name="player_rating" placeholder="Rating"><br/>
      <div  class="c1"><button type ="submit" name="submit">Insert Data</button></div>
    </form></div>
  </body>
</html>
