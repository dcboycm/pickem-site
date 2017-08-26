<?php
$result = pg_query($conn, "SELECT * FROM test_matches WHERE week = 1 and paid = true;");
$pickCount = pg_num_rows($result);
$sheet = 5;
$totalPot = $sheet * $pickCount;
if ($today == "Sunday" || $today == "Monday" || $today == "Tuesday") {
  echo "<h1>Everyone's Picks - $today.</h1>";
  echo "<h2>Total Pot Size - $$totalPot.</h2>";
  $i = 0;
  foreach ($paidMatches as $paidMatch) {
    echo "<table class='table col-1-5'>";
      echo "<thead>";
        echo "<tr>";
          echo "<th>$paidMatch[user_id]</th>";
        echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
        echo "<tr>";
        $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_1];");
        $fav_name = pg_fetch_row($result);
        echo "<td>$fav_name[0]</td>";
        echo "</tr>";
        echo "<tr>";
        $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_2];");
        $fav_name = pg_fetch_row($result);
        echo "<td>$fav_name[0]</td>";
        echo "</tr>";
        echo "<tr>";
        $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_3];");
        $fav_name = pg_fetch_row($result);
        echo "<td>$fav_name[0]</td>";
        echo "</tr>";
        echo "<tr>";
        $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_4];");
        $fav_name = pg_fetch_row($result);
        echo "<td>$fav_name[0]</td>";
        echo "</tr>";
        echo "<tr>";
        $result = pg_query($conn, "SELECT fav_name FROM team WHERE id = $paidMatch[pick_5];");
        $fav_name = pg_fetch_row($result);
        echo "<td>$fav_name[0]</td>";
        echo "</tr>";
        echo "<tr>";
          echo "<td>$paidMatch[tiebreaker] pts.</td>";
        echo "</tr>";
      echo "</tbody>";
    echo "</table>";
    $i++;
  }
} else {
  echo "<h1>Everyone's Picks - $today.</h1>";
  echo "<h2>Total sheets submitted so far - $$totalPot.</h2>";
}
?>
