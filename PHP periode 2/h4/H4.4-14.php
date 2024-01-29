<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "<table border='1'>
        <tr>
            <th>Miles</th>
            <th>Kilometers</th>
            <th>Miles</th>
            <th>Kilometers</th>
        </tr>";

for ($miles = 1; $miles <= 20; $miles++) {
    $kilometers1 = $miles * 1.609; 
    $kilometers2 = ($miles + 20) * 1.609; 

    echo "<tr>
            <td>$miles</td>
            <td>$kilometers1</td>
            <td>" . ($miles + 20) . "</td>
            <td>$kilometers2</td>
          </tr>";
}

echo "</table>";
?>


</body>
</html>