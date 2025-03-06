<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // verwerk.php?search=PHP
    $search = $_GET['search']; 
    echo "Zoekterm: " . $search;
    ?>
</body>
</html>