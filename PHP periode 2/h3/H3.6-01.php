<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
date_default_timezone_set("Europe/Amsterdam");
$date = date ("l j F Y");
echo "Het is vandaag: $date";

echo "<br>";

$day = date("z");
echo "Vandaag is de " . date("z") . "e dag van het jaar";

echo "<br>";

$dayname = date ("l");
$number = date ("w");
echo "$dayname is de " .  $number . "e van de week";

echo "<br>";

$month = date ("F");
$daycount = date ("t");

echo "De maand $month heeft in totaal $daycount dagen";

echo "<br>";


$year = date ("Y");
$leap = date ("L");

echo "Het jaar " . $year . " is ";
if($leap == 1){
    echo "een schrikkeljaar";
}
else{
    echo "geen schrikkeljaar";
}


?>

</body>
</html>