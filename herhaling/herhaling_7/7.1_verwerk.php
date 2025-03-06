<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $phoneNumber = $_POST['number'];
    $bornDate = $_POST['bornDate'];
    echo "Telefoon nummer: " . $phoneNumber . "<br>";
    echo "Geboortedatum: " . $bornDate;
    ?>
</body>
</html>