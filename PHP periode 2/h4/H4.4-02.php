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

$dagdeel = match (true) {
    $uur >= 6 && $uur < 12 => "Ochtend",
    $uur >= 12 && $uur < 18 => "Middag",
    $uur >= 18 && $uur < 24 => "Avond",
    default => "Nacht",
};

echo "Op dit moment is het: $dagdeel";
?>


</body>
</html>