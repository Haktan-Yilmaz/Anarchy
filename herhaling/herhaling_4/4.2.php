<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $books = [
        "book1"=>["title"=>"1984", "author"=>"George Orwell", "pages"=>350], "<br>",
        "book2"=>["title"=>"Brave New World", "author"=>"Aldous Huxley", "pages"=>311], "<br>",
        "book3"=>["title"=>"Fahrenheit 451", "author"=>"Ray Bradbury", "pages"=>256], "<br>",
    ];
    $books[] = ["book4"=>["title"=>"De Ontdekking van de Hemel", "author"=>"Harry Mulisch", "pages"=>900]];

    print "Brave New World is geschreven door Aldous Huxley". "<br>";

    print_r($books);
    ?>
</body>
</html>