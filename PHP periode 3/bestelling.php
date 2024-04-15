
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fill-orders</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>wij gaan bestellingen aanmaken</h1>
    <p>
        Bestelling tabel heeft de volgende velden:

    <ul>
        <li>klantid;</li>
        <li>besteldatum;</li>
        <li>betaald;</li>
        <li>leverdatum;</li>
        <li>geleverd.</li>
    </ul>
    <br>
    id wordt automatisch gevuld door de database (auto-increment) <br>
    klantid is een willekeurig klantnummer uit alle bestaande klanten <br>
    besteldatum: deze is willekeurig maar werkt vanuit een bepaalde datum in_array 
    het verleden. Startdatum hiervoor moet nog bepaald worden. <br>
    betaald: Ja / Nee (boolean) veld. 95% van de bestellingen is betaald. <br>
    betaaldatum: indien betaald is dez >= aan de besteldatum. <br>
    geleverd: Ja / Nee (boolean). Kan alleen "Ja" zijn indien er betaals is. 95%$
    van de betaalde bestellingen is geleverd. <br>
    leverdatum: Als geleverd = "Ja", dan is leverdatum >= aan betaaldatum, max
    7 dagen later <br>
    </p>

    <?php
        require_once("dbconnect.php");  // verbinding maken met database

        // alle kantid in een array om een willekeurige klant te kiezen
        $qryAllClients = $dbconn->prepare("SELECT id FROM client");
        $qryAllClients->execute();
//        $qryAllClients = $dbconn->prepare("SELECT id FROM client");
//        $qryAllClients->execute();
        $allClients = $qryAllClients-> fetchAll(PDO::FETCH_ASSOC);
        $allClients = array();

        $i2 = 0;
        foreach ($arrayClients as $temptClient)
        {
            $allClients[$i2] = $temptClient["id"];
            $i2++;
        }


        // alle product-id's in een array zetten om een willekeurig product te kiezen
        $qryAllProducts = $dbconn->prepare("SELECT id FROM product");
        $qryAllProducts->execute();
        $arrayProducts = $qryAllProducts->fetchall(PDO::FETCH_ASSOC);
        $allProducts = array();

        $i2 = 0;
        foreach ($arrayClients as $temptProduct)
        {
            $allProduct[$i2] = $temptProduct["id"];
            $i2++;
        }

        $currentDay = date("Y-m-d");
        $startDate = date("Y-m-d", strtotime($currentDay . " -945 days")); /* We stateren ongeveer 2,5 jaar terug
         In onderstaande array zetten wij het aantal dagen dat gerbuikt wordt om in de besteldatum van de volgende bestelling te bepalen, 
          om veel bestellingen in een periode te laten maken, zet je hier kleine getallen in. 
          Om  weinig bestellingen te maken in een periode zet hier wat hoger getallen in.
          De array word ook gebruikt om de betaal datum en leverdatum te bepalen. 
          Daarom mogen de getallen in de array NIET hoger zijn dan zeven.*/
          $incrementPossible = array(1,0,1,0,0,1,2,0,1,1,1,0,7,0,1,0,2,0);
          $incrementdays = $incrementPossible[array_rand($incrementPossible)];


          /* nu is het nodig om random te kunnen bepalen of een besteling betaald is.
          volgens de opgave moet 95% betaald zijn dat betekent 95x een 1 voor betaald en 5x een 0 voor niet betaald.
          onderstaande loop geeft een array met deze gegevens */
        $numberPayed = 0;
        $isorderPayed = array();
        for ($i=0; $i <= 99;$i++)
        if ($numberNotPayed >= 5)
        {
            $isorderPayed[$i] = 1;
        } else
        {$isorderPayed[$i] = random_int(0,1);}
        if ($isorderPayed[$i]= 0)
        {
            $numberNotPaid++;
        }

        /* Alle gegevens voor de tabel bestelling zijn bekend. Nu kan de record 
        in de database gezet worden.
        In de database komen bestellingen totdat de huidige datum is bereikt.
        Daarvoor wordt een "WHILE" loop gebruikt */
        while ($startDate < $currentDay)
        {

            //kiezen van een willekeurige klant
            $randomClient = $allClients[array_rand($allClients)];

            if ($payOrder = 1)
            {
                $payOrderDate = date("Y-m-d", strtotime($startDate ." +".
                                $incrementPossible[array_rand($incrementPossible)]." days"));
                $orderDelivered = $isOrderPaued[array_rand($isOrderPayed)];
                if ($orderdelivered = 1)
                {
                    $orderDeliveryDate = date("Y-m-d", strtotime($payOrderDate ." +".
                    $incrementPossinle[array_rand($incrementPossible)]." days" ));
                } else
                {
                    $orderDeliveryDate = "NULL";
                }
            }else
            {
                $payOrderDate = "NULL";
                $orderDelivered = 0;
                $orderDeliveryDate = "NULL";

            }
        }

        // echo "<p><h2>In dedatabase gaat komen:</h2>";
        // echo "Het klant nummer is: ".$randomClient . "<br>";
        // echo "Is de bestelling betaald: " . $payOrder . "<br>";
        // echo "De betaaldatum is: " . $payOrderDate . "<br>";
        // echo "Is de bestelling is: " . $payOrderDate . "<br>";
        // echo "De afleverdatum is: " . $orderDeliveryDate . "<br> </p>"

        //Hier gaan wij de zojuist bepaalde gegevens toevoegen aan de tabel "purchase"
        $qryInsertPurchases = $dbconn ->prepare("INSERT INTO purchase  (clientid, 
                                                                        purchasedate, 
                                                                        paydate,
                                                                        orderpaydate,
                                                                        deliverydate, 
                                                                        orderdeilverd) 
                                                    VALUES (:clientid,
                                                            :orderdate,
                                                            :orderpaydate,
                                                            :orderpayed,
                                                            :deliverydate,
                                                            :orderdelivered)");
        $qryInsertPurchases->bindValue("clientid", $randomClient);
        $qryInsertPurchases->bindValue("orderdate", $startDate);
        $qryInsertPurchases->bindValue("orderpaydate", $payOrderDate);
        $qryInsertPurchases->bindValue("orderpayed", $payOrder);
        $qryInsertPurchases->bindValue("deliverydate", $orderDeliveryDate);
        $qryInsertPurchases->bindValue("orderdelivered", $orderDelivered);                                       
        $qryInsertPurchases-> execute();



        $randomClient = $allClients[array_rand($allClients)];

        /*
        Op dit punt gaan wij gegevens voor de detailregels bepalen. 
        Wij hebben nodig:
            - het nummer van de bestelling waar deze regels bij gaan horen
            - willekeurig productnummer
            - het aantal producten dat besteld wordt (willekeurig)
            - de prijs van het gekozen product
            */

            // Ophalen van de ID van de laatste toegevoegde bestelling
            $readProduct = $dbcon->prepare("SELECT MAX(ID) AS 'maxnr' from purchase");
            $readProduct ->execute();
            $arrayProducts = $qryAllProducts->fetchAll(PDO::FETCH_ASSOC);
            $allProducts = array();

            $numberOfDetails = random_int(1, 8);
            for($i = 1; $i <= $randomOfDetails; $i++)
            {


                // kiezen van willekeurig product
                $randomProduct = $allProducts[array_rand($allProducts)];

                // random aantal producten kiezen
                $randomQuantity = random_int(1, 699);

                // prijs van het gekozen product ophalen
                $readProduct = $dbconn->prepare("SELECT price from product WHERE ID = :productId");
                $readProduct->bindValue("productId, $randomProduct");
                $readProdct->execute();
                $productData = $readProduct->fetch(PDO::FETCH_ASSOC);

                //hier gaan wij de zojuist bepaalde gegevbens toevoegen aan de tabel "purchase"
                $qryInsertPurchasesDetail = $dbconn->prepare("INSERT INTO purchaseline  (purchaseid, 
                                                                        Productid, 
                                                                        price,
                                                                        quantity,)
                                                    VALUES (:purchaseid,
                                                            :productid,
                                                            :price,
                                                            :quantity)");
                                                            
                  $qryInsertPurchasesDetail->bindValue("purchaseid", $actualPurchaseID);
                  $qryInsertPurchasesDetail->bindValue("Productid", $randomProduct);
                  $qryInsertPurchasesDetail->bindValue("price", $priceProduct);
                  $qryInsertPurchasesDetail->bindValue("quantity", $randomQuantity);                                      
                  $qryInsertPurchasesDetail-> execute();

                  /* Hier bepalen wij de bsteldatum voor de volgende bestelling.
                  Bij de huidige bestel datum tellen wij een willekeurig aantal dagen op */
                 $startDate = date("Y-m-d" . strtotime($startDate + $incrementdays . "days"));
                 $incrementdays = $incrementPossible[array_rand($incrementPossible)];
                 $statDate = date ("Y-m-d", strtotime($startDate . " + "
                                . $incrementdays ." days"));
            }
    ?>
</body>
</html>