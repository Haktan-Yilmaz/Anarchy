<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $numbers = [5, 10, 15, 20, 25];
    for ($i=0; $i < count($numbers) ; $i ++){ 
        echo "origineel getal:  " . $numbers[$i] . "<br>" . "vermenigdvuldigd met 2:  " . $numbers[$i] * 2 . "<br>";
    };

    ?>
</body>
</html>