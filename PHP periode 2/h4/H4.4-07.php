<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$prijs_iPhone = 69420;

$spaargeld = 800;

$tekort = $prijs_iPhone - $spaargeld;

if ($tekort > 250) {
    echo "Helaas, je hebt meer dan €250 tekort om de iPhone te kopen. Overweeg om een baantje te zoeken. Tekort: €$tekort.";
} elseif ($tekort <= 250 && $tekort > 0) {
    echo "Bijna! Je hebt nog €$tekort tekort om de iPhone te kopen. Spaar nog wat extra geld.";
} else {
    $overig_geld = $spaargeld - $prijs_iPhone;
    echo "Gefeliciteerd! Je kunt de iPhone kopen. Je spaargeld is nu op, maar je hebt nog €$overig_geld over.";
}
?>


</body>
</html>