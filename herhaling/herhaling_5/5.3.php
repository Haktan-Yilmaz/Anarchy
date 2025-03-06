<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    do {
        $i = random_int($min = 1, $max = 10);
    echo "geraden getal is $i <br>";
    if ($i == 5) break; 
    } while ($i > 0 );

    ?>
    
</body>
</html>