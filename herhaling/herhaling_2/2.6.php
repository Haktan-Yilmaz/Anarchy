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
    switch(true){
        case ($score > 90);
        echo "Geweldig";
        break;
        case ($score >= 75 && $score <=90);
        echo "Goed";
        break;
        case ($score >= 55 && $score <75);
        echo "Voldoende";
        break;
        case ($score < 55);
        echo "Onvoldoende";
        break;
    }
    echo "<br>";
    echo ($score >= 55) ? "Geslaagd" : "Gezakt";
    ?>
</body>
</html>