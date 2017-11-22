<?php
$week_number = $_SESSION["week_number"];
$games = pg_query($conn, "select * from weekly_matches where week_number = '$week_number' order by id;");
$dates = pg_query($conn, "select distinct match_date from weekly_matches where week_number = '$week_number';");
$i = 0;
$j = 0;
echo "<tbody>";

echo "</tbody>";
?>
