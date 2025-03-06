<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $score = 70;

    if ($score > 90) {
        echo "A";
    } elseif ($score > 80){
        echo "B";
    } elseif ($score >= 70){
        echo "C";
    } else echo "Je hebt een Onvoldoende"
    
    ?>
</body>
</html>