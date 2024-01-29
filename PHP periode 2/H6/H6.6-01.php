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

if (!isset($_SESSION['page_visits'])) {
    $_SESSION['page_visits'] = 0;
}

$_SESSION['page_visits']++;

echo "Deze pagina heb je al: " . $_SESSION['page_visits'] . " keer bekeken";
?>

</body>
</html>