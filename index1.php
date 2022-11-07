<?php
include "./phone.php";

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
<h1>arraysnoop2</h1>
    <?php
        $phone = new Phone();
        $phone->manufacturer  = "iHome";
        $phone->year = "1960";
        $phone->model = "8";

        $phone1 = new Phone();
        $phone1->manufacturer = "Saasung";
        $phone1->year = "1920";
        $phone1->model = "S5";

        $phone2 = new Phone();
        $phone2->manufacturer = "Huaaei";
        $phone2->year = "1890";
        $phone2->model ="P9";

        $phone3 = new Phone();
        $phone3->manufacturer = "Noka";
        $phone3->year = "1630";
        $phone3->model = "3310";

        $phone4 = new Phone("Samsnug", 2019,"s20");
        $phone5 = new Phone("Blockborry", 1860,"2");
        $phone6 = new Phone("Aplla", 1945,"5");
        $phone7 = new Phone("Cav" , 2022, "100");

        $phones = [$phone, $phone1, $phone2, $phone3, $phone4, $phone5, $phone6, $phone7];

    for ($i=0; $i < count($phones); $i++) { 
    $phone = $phones[$i];
    }
    ?>

<table class="table">
    <thead>
        <tr>
            <?php
                foreach ($phones[0] as $key => $value) {
                    echo "<th>".$key."</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($phones as $phone) {
                echo "<tr>";
                    echo "<td>".$phone->manufacturer."</td>";
                    echo "<td>".$phone->year."</td>";
                    echo "<td>".( ($phone->model) ? "naujas" : "devėtas")."</td>";
                   
                echo "</tr>";
            }

        ?>
    </tbody>
</table>
</body>
</html>