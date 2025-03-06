<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "IP addres: " . $_SERVER['SERVER_ADDR'] . "<br>"; 
    echo "Servernaam: " . $_SERVER['SERVER_NAME'] . "<br>"; 
    echo "Browser info: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
    ?>
</body>
</html>