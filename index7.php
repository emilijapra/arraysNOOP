<?php

$color = "yellow";
echo $_SERVER["REQUEST_METHOD"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    header("Location: index7.php");
    die;
} else{
    $color = "green";
}


    // header("Location: index7.php");
    // die;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color?>;">

<form action="" method="GET">
        <button type="submitGreen">G</button>
</form>

<form action="" method="POST">
    <button type="submitYellow">Y</button>
</form>
        
</body>
</html>