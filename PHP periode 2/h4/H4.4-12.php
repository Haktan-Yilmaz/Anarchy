<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$wisselkoersen = array(
    'Amerikaanse dollar' => 1.21934,
    'Britse pond' => 0.915551,
    'Japanse Yen' => 126.226,
    'Antilliaanse gulden' => 2.18243
);

echo "<table border='1'>
        <tr>
            <th>Valuta</th>
            <th>Wisselkoers (1 euro)</th>
        </tr>";

foreach ($wisselkoersen as $valuta => $koers) {
    echo "<tr>
            <td>$valuta</td>
            <td>$koers</td>
          </tr>";
}

echo "</table>";
?>


</body>
</html>