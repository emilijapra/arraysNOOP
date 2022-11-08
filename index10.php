<?php
print_r($_POST["totalCount"]);

$color = "black";

if($_SERVER["REQUEST_METHOD"] == "POST")
$color = "white";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color ?>;">


    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
     ?>
<form action="" method="POST">
    <?php
    $checkbox = '<input type="checkbox" name="boxes[]" id="">';
    $letters = [ "A", "B" , "C", "D", "E", "F", "G", "H", "I", "J"];
    $times = rand(3,10);
    for ($i = 0; $i < $times; $i++) {
        echo $checkbox . "<label for='check' style= 'color:white'>" . $letters[$i] . "</label>";
    }
        ?>
        <input type="hidden" name="totalCount" value="">
        <button>mygtukas</button>
        </form>
        <?php }else { 
            print_r(count($_POST["boxes"]));
            ?>
    


            <?php } ?>
    </body>
    </html>
