<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$uur = date('H');

if ($uur >= 6 && $uur < 12) {
    $dagdeel = "Ochtend";
} elseif ($uur >= 12 && $uur < 18) {
    $dagdeel = "Middag";
} elseif ($uur >= 18 && $uur < 24) {
    $dagdeel = "Avond";
} else {
    $dagdeel = "Nacht";
}

echo "Op dit moment is het: $dagdeel";
?>

</body>
</html>