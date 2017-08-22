<?php
$rows = pg_fetch_all($result);
$i = 0;
$j = 0;
echo "<tbody>";
  foreach ($rows as $row) {
    $result = pg_query($conn, "select distinct match_date from weekly_matches where week_number = 1;");
    $totalDays = pg_fetch_row($result);
      foreach ($totalDays as $day) {
        $j++;
      }
      echo "<tr>";
      // Need an if check for who is the FAVORITE, this will determine who goes first in the list
      $result = pg_query($conn, "select fav_name from team where id = {$row['team_home']};");
      $home_fav = pg_fetch_row($result);
      $result = pg_query($conn, "select fav_name from team where id = {$row['team_away']};");
      $away_fav = pg_fetch_row($result);
      if ($row[team_home] == $row[team_fav]) {
        echo "<td><input class='single-checkbox' type='radio' name='selectedTeamId[$i-$j]' value='{$row[team_home]}'><br></td>";
        echo "<td>{$home_fav[0]}</td>";
        echo "<td>{$row['spread']}</td>";
        echo "<td>{$away_fav[0]}</td>";
        echo "<td><input class='single-checkbox' type='radio' name='selectedTeamId[$i-$j]' value='{$row[team_away]}'><br></td>";
      } else {
        echo "<td><input class='single-checkbox' type='radio' name='selectedTeamId[$i-$j]' value='{$row[team_away]}'><br></td>";
        echo "<td>{$away_fav[0]}</td>";
        echo "<td>{$row['spread']}</td>";
        echo "<td>{$home_fav[0]}</td>";
        echo "<td><input class='single-checkbox' type='radio' name='selectedTeamId[$i-$j]' value='{$row[team_home]}'><br></td>";
      }
      echo "</tr>";
    $i++;
  }
echo "</tbody>";
?>
