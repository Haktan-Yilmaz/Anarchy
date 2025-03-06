<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
         session_start();
        $color = $_POST['color'];
        echo "color: " . $color . "<br>";
        $_SESSION['color'] = $_POST;
        echo "your favorite color is " . $_POST['color']
    ?>
    <br>
</body>
</html>