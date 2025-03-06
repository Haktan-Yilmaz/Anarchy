<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $countries = ["Nederland"=>"Amsterdam", "Belgie"=>"Brussel", "Duitsland"=>"Berlijn"];
   foreach ($countries as $x => $y) {
    echo "De hoofdstad van $x is $y <br>";
   }
    ?>
    
</body>
</html>