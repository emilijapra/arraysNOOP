<?php
include "./Coin.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>arraysnoop</h1>
    <?php
    

$coin = new Coin();
$coin->setCountry("Spain");
$coin->setWorth("2eur");
$coin->setManufacture("2002");
$coin->setMaterial("Silver");
//print_r($coin);
//echo "<br>";

$coin2 = new Coin();
$coin2->setCountry("Japan");
$coin2->setWorth("¥1,000");
$coin2->setManufacture("1871");
$coin2->setMaterial("Paper");
//print_r($coin2);
//echo "<br>";

$coin3 = new Coin();
$coin3->setCountry("Egypt");
$coin3->setWorth("LE 5");
$coin3->setManufacture("1961");
$coin3->setMaterial("Paper");
//print_r($coin3);
//echo "<br>";

$coin4 = new Coin();
$coin4->setCountry("U.S.A");
$coin4->setWorth("0.25");
$coin4->setManufacture("1909");
$coin4->setMaterial("Copper");
//print_r($coin4);
//echo "<br>";

$coin5 = new Coin();
$coin5->setCountry("Thailand");
$coin5->setWorth("฿20");
$coin5->setManufacture("1897");
$coin5->setMaterial("Paper");
//print_r($coin5);
//echo "<br>";
$coins = [$coin, $coin2, $coin3, $coin4, $coin5];


?>

<table class="table">
    <thead>
        <tr>
            <th>Country</th>
            <th>Worth</th>
            <th>Manufacture</th>
            <th>Material</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($coins as $coin) {
                echo "<tr>";
                    echo "<td>".$coin->getCountry()."</td>";
                    echo "<td>".$coin->getWorth()."</td>";
                    echo "<td>".$coin->getManufacture()."</td>";
                    echo "<td>".$coin->getMaterial()."</td>";
                echo "</tr>";
            }

        ?>
    </tbody>
</table>
</body>
</html>




