<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$variabele1 = 10;
$variabele2 = 15;

$grootste_variabele = max($variabele1, $variabele2);


$resultaat = $grootste_variabele * 2 + ($variabele1 + $variabele2 - $grootste_variabele);

echo "Het resultaat is: " . $resultaat;
?>

</body>
</html>