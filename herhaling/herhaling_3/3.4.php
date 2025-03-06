<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $product = ["name"=>"Laptop", "price"=>799,99, "inStock"=>"true"];
    $product[] = ["Brand"=>"HP"];
    $product["price"] = "799,99"; 
    print_r($product);
    ?>
</body>
</html>