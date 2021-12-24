<?php
  include_once 'dbh.inc.php';
  $player_id = $_POST['player_id'];
  $player_name = $_POST['player_name'];
  $player_position = $_POST['player_position'];
  $player_height = $_POST['player_height'];
  $player_weight = $_POST['player_weight'];
  $player_transferfee = $_POST['player_transferfee'];
  $player_age = $_POST['player_age'];
  $player_nationality = $_POST['player_nationality'];
  $player_appearances = $_POST['player_appearances'];
  $player_goals = $_POST['player_goals'];
  $player_assists = $_POST['player_assists'];
  $player_keypass = $_POST['player_keypass'];
  $player_passacc = $_POST['player_passacc'];
  $player_crossacc = $_POST['player_crossacc'];
  $player_shotacc = $_POST['player_shotacc'];
  $player_tackleratio = $_POST['player_tackleratio'];
  $player_yellowcard = $_POST['player_yellowcard'];
  $player_redcard = $_POST['player_redcard'];
  $player_cleansheet = $_POST['player_cleansheet'];
  $player_wages = $_POST['player_wages'];
  $player_contract = $_POST['player_contract'];
  $player_teamrole = $_POST['player_teamrole'];
  $player_value = $_POST['player_value'];
  $player_rating = $_POST['player_rating'];
  $sql = "Update player set player_name='$player_name',player_position='$player_position',player_height='$player_height',
  player_weight='$player_weight',player_transferfee='$player_transferfee',player_age='',player_nationality='$player_nationality',
  player_appearances='$player_appearances',player_goals='$player_goals',player_assists='$player_assists',player_keypass='$player_keypass',
  player_passacc='$player_passacc',player_crossacc='$player_crossacc',player_shotacc='$player_shotacc', player_tackleratio='$player_tackleratio'
  ,player_yellowcard='$player_yellowcard',player_redcard='$player_redcard',player_cleansheet='$player_cleansheet',player_wages='$player_wages',
  player_contract='$player_contract',player_teamrole='$player_teamrole',player_value='$player_value',player_rating='$player_rating' where player_id=$player_id;
  ";
  mysqli_query($conn,$sql);
  header("Location: playerupdate.php?signupplayer=success");
?>
