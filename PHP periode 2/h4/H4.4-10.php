<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$getal = 5;

$som = 0;

echo "Optelling: ";
for ($i = 1; $i <= $getal; $i++) {
    $som += $i;

    echo "$i";
    if ($i < $getal) {
        echo " + ";
    }
}

echo " = $som";
?>


</body>
</html>