</body>
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


function getTotalVisits() {
    return isset($_COOKIE['total_visits']) ? $_COOKIE['total_visits'] : 0;
}

function increaseTotalVisits() {
    $totalVisits = getTotalVisits() + 1;
    setcookie('total_visits', $totalVisits, time() + 3600 * 24 * 365); 
}

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}

$_SESSION['visits']++;

increaseTotalVisits();

echo "Deze pagina heb je al: {$_SESSION['visits']} keer bekeken voordat de internet browser is afgesloten <br>" ;
echo "Totaal aantal bezoeken: " . getTotalVisits() + 1 . " keer bekeken.";
?>




</body>
</html>