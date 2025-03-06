<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
for ($i = 0; $i < count($matrix); $i++) {
    echo $matrix[$i][0] . " " . $matrix[$i][1]. " " . $matrix[$i][2] . "<br>";
}


?>



</body>
</html>