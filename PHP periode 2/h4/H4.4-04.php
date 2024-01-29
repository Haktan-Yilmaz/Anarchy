<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$oude_prijs = 100;

if ($oude_prijs > 150) {
    $nieuwe_prijs = $oude_prijs * 1.19;
} elseif ($oude_prijs < 55) {
    $nieuwe_prijs = $oude_prijs * 1.11; 
} else {
    $nieuwe_prijs = $oude_prijs * 1.16; 
}

echo "De oude prijs was €" . number_format($oude_prijs, 2, ',', '.') . ". ";
echo "De nieuwe prijs is €" . number_format($nieuwe_prijs, 2, ',', '.') . ".";
?>

</body>
</html>