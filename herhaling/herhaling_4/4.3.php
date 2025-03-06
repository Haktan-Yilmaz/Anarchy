<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$pets = [
    ["species" => "Hond", "name" => "Buddy", "age" => 3],
    ["species" => "Papegaai", "name" => "Coco", "age" => 6],
    ["species" => "Konijn", "name" => "Nibbles", "age" => 2],
];

echo $pets[2]["name"] . " is een " . $pets[2]["species"];
$pets[1] = ["Papegaai", "name" => "Coco","age"=>7];
$pets[3] = ["species" => "Kat", "name" => "Simba", "age" => 2];

var_dump($pets);

?>
</body>
</html>