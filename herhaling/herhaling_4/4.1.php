<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $products = [
        "Laptop"=> ["price"=>999.99, "stock"=>30], "<br>",
        "Smartphone"=>["price"=>699.99, "stock"=>50], "<br>",
        "Monitor"=>["price"=>199.99, "stock"=>30], "<br>",
        "Toetsenbord"=>["price"=>49.99, "stock"=>120], "<br>"
    ];
    $products[] = ["Tablet"=>["price"=>299.99, "stock"=>50]];

    print "Smartphone kost 699.99 euro". "<br>";

    print_r($products);
    ?>
</body>
</html>