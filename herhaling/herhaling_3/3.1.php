<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cities = ["Amsterdam", "Rotterdam", "Utrecht", "Den Haag"];
    $cities[] = "Trabzon";
    echo $cities["0"];
    echo "<br>";    
    echo $cities["4"];
    ?>
</body>
</html>