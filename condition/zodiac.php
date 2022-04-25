<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_zod.css">
    <title>Zodiac-RaphaelRyuu</title>
</head>

<body>
    <?php
    $img = "";
    $sign = "";
    $time = "";
    $day = "";
    $month = "";
    $result = "";
    $valid = 0;
    if (isset($_POST["day"]) && isset($_POST["month"])) {
        $day = $_POST["day"];
        $month = $_POST["month"];
        $valid = 0;
        if (is_numeric($day)) {
            switch ($month) {
                case 'January':
                case 1:
                if($day <=19 && $day >=1){
                    $sign = "Capricornus";
                    $img = "img/Capricornus.svg";
                    $time = "(December 22 – January 19)";
                }
                else if($day >=20 && $day <=31){
                    $sign = "Aquarius";
                    $img = "img/Aquarius.svg";
                }
                    break;

                default:
                    break;
            }
        }
    }
    ?>
    <div class="content">
        <h1>WHAT IS YOUR ZODIAC SIGN?</h1>
        <h2>Enter your birthday below</h2>
        <form action="#" method="POST" name="main-form">
            <div class="row">
                <span>Day</span>
                <input type="text" name="day" value="<?php echo $day ?>">
            </div>
            <div class="row">
                <span>Month</span>
                <input type="text" name="month" value="<?php echo $month ?>">
            </div>
            <div class="row">
                <input type="submit" name="submit" value="See Result">
            </div>

        </form>

        <div class="result">
            <img src="<?php echo $img ?>" alt="<?php $sign ?>">
            <p>You are <?php echo $sign ?> <span><?php echo $time ?></span> </p>

        </div>
    </div>

</body>

</html>