<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$zijde1 = 4;
$zijde2 = 7;
$zijde3 = 9;

if ($zijde1 + $zijde2 > $zijde3 && $zijde1 + $zijde3 > $zijde2 && $zijde2 + $zijde3 > $zijde1) {
    echo "Met de zijden ($zijde1, $zijde2, $zijde3) is het mogelijk om een geldige driehoek te vormen.";
} else {
    echo "Met de zijden ($zijde1, $zijde2, $zijde3) is het niet mogelijk om een geldige driehoek te vormen.";
}
?>


</body>
</html>