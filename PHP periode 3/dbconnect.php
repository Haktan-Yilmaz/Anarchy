<?php
try{
    $dbconn = new PDO("mysql:host-localhost; dbname=p04_basis",
    "root", "");
}
catch(PDOException $e){
    die("HET LOOPT FOUT: " . $e->getMessage());
}


?>