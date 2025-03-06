<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prices = [100, 200, 300, 400, 500];
    $i = 0;
    while ($i < count($prices)) {
    echo "Oorspronkelijke prijs: " . $prices[$i] . "<br>" . "Nieuwe prijs: " . ($prices[$i] += 50) . "<br>";
    $i++;
    if ($prices[$i] == 500) break;
}
?>
</body>
</html>