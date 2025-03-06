<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$person = [
    "title" => 1984,
    "author" => "George Orwell",
    "year" => 1949
];
foreach($person as $key => $value){
    echo "De " . $key . " is " . $value . "<br>";
}

?>
</body>
</html>