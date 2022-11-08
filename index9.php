<?php

$color = "black";

//if(isset( $_GET['color'] )){
    //$color = "black";
//}

// jei kreipiamasi su post - color = white.

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
    $letters = [ "A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
    
    for ($i = 0; $i < rand(3,10); $i++) {
        echo $checkbox . "<label for='check' style= 'color:white'>" . $letters[$i] . "</label>";
    }
        ?>

        <button>mygtukas</button>
        
        </form>
        <?php }else { 
            print_r(count($_POST["boxes"]));
            ?>
    


            <?php } ?>
    </body>
    </html>

    
    

<!--     
    <input type="checkbox">
    <input type="checkbox" name="B">
    <input type="checkbox" name="C">
    <input type="checkbox" name="D">
    <input type="checkbox" name="E">
    <input type="checkbox" name="F">
    <input type="checkbox" name="G">
    <input type="checkbox" name="H">
    <input type="checkbox" name="I">
    <input type="checkbox" name="J">
 -->

