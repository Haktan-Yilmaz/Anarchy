<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
Echo "Het is vandaag " . date("l d F Y");
Echo "<br>";
Echo "Vandaag is de " . date("z") . "e dag van het jaar";
Echo "<br>";


  $days[1] = "Maandag";
  $days[2] = "Dinsdag";
  $days[3] = "Woensdag";
  $days[4] = "Donderdag";
  $days[5] = "Vrijdag";
  $days[6] = "Zaterdag";

  echo $days[2];

  echo "<br>";

  date_default_timezone_set("Europe/Amsterdam");
  $today = date("j F Y");
  echo $today;

  echo "<br>";

  $time = date("H:i");
  echo "Het is nu: $time uur";

  echo "<br>";

  $month = date ("F");
  $daysInMonth = date("t");
  echo "Deze maand, $month heeft $daysInMonth dagen";

  echo "<br>";
  $week = date("W");
  echo "Deze week is het week: $week";

  $isLeapYear = (date("L", strtotime("$currentYear-01-01")) == 1) ? "wel" : "geen";
?>

</body>
</html>