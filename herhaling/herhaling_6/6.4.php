<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $grades = [8.5, 7.0, 6.5, 9.0, 4.5];
    foreach ($grades as $grades) {
        echo "Het cijfer is: ". $grades . "<br>";
        if($grades < 5.5){
            echo "onvoldoende" . "<br>";
        }
        else{
            echo"voldoende". "<br>";
        }
    }
    ?>
</body>
</html>