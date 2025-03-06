<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $day = date('l');
    switch($day){
        case "Monday";
        echo "vanadag is het maandag";
        break;
        case "Tuesday";
        echo "vanadag is het dinsdag";
        break;
        case "wednesday";
        echo "vanadag is het woensdag";
        break;
        case "Thursday";
        echo "vanadag is het donderdag";
        break;
        case "Friday";
        echo "vanadag is het vrijdag";
        break;
        case "Saturday";
        echo "vanadag is het zaterdag";
        break;
        case "Sunday";
        echo "vanadag is het zondag";
        break;
    }
    

    ?> 
</body>
</html>