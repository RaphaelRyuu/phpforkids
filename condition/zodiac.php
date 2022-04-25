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
    if (isset($_POST["day"]) && isset($_POST["month"])) {
        $day = $_POST["day"];
        $month = $_POST["month"];
        // Capricorn (December 22 – January 19)
        // Aquarius (January 20 – February 18)
        // Pisces (February 19 – March 20)
        // Aries (March 21 – April 19)
        // Taurus (April 20 – May 20)
        // Gemini (May 21 – June 20)
        // Cancer (June 21 – July 22)
        // Leo (July 23 – August 22)
        // Virgo (August 23 – September 22)
        // Libra (September 23 – October 22)
        // Scorpio (October 23 – November 21)
        // Sagittarius (November 22 – December 21)

        if (is_numeric($day)) {
            switch ($month) {
                case 'January':
                case 1:
                    if ($day <= 19 && $day >= 1) {
                        $sign = "Capricorn";
                        $img = "img/Capricorn.svg";
                        $time = "(December 22 – January 19)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 20 && $day <= 31) {
                        $sign = "Aquarius";
                        $img = "img/Aquarius.svg";
                        $time = "(January 20 – February 18)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'February':
                case 2:
                    if ($day <= 18 && $day >= 1) {
                        $sign = "Aquarius";
                        $img = "img/Aquarius.svg";
                        $time = "(January 20 – February 18)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 19 && $day <= 29) {
                        $sign = "Pisces";
                        $img = "img/Pisces.svg";
                        $time = "(February 19 – March 20)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'March':
                case 3:
                    if ($day <= 20 && $day >= 1) {
                        $sign = "Pisces";
                        $img = "img/Pisces.svg";
                        $time = "(February 19 – March 20)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 21 && $day <= 31) {
                        $sign = "Aries";
                        $img = "img/Aries.svg";
                        $time = "(March 21 – April 19)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'April':
                case 4:
                    if ($day <= 19 && $day >= 1) {
                        $sign = "Aries";
                        $img = "img/Aries.svg";
                        $time = "(March 21 – April 19)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 20 && $day <= 30) {
                        $sign = "Taurus";
                        $img = "img/Taurus.svg";
                        $time = "(April 20 – May 20)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'May':
                case 5:
                    if ($day <= 20 && $day >= 1) {
                        $sign = "Taurus";
                        $img = "img/Taurus.svg";
                        $time = "(April 20 – May 20)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 21 && $day <= 31) {
                        $sign = "Gemini";
                        $img = "img/Gemini.svg";
                        $time = "(May 21 – June 20)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'June':
                case 6:
                    if ($day <= 20 && $day >= 1) {
                        $sign = "Gemini";
                        $img = "img/Gemini.svg";
                        $time = "(May 21 – June 20)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 21 && $day <= 30) {
                        $sign = "Cancer";
                        $img = "img/Cancer.svg";
                        $time = "(June 21 – July 22)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'July':
                case 7:
                    if ($day <= 22 && $day >= 1) {
                        $sign = "Cancer";
                        $img = "img/Cancer.svg";
                        $time = "(June 21 – July 22)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 23 && $day <= 31) {
                        $sign = "Leo";
                        $img = "img/Leo.svg";
                        $time = "(July 23 – August 22)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'August':
                case 8:
                    if ($day <= 22 && $day >= 1) {
                        $sign = "Leo";
                        $img = "img/Leo.svg";
                        $time = "(July 23 – August 22)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 23 && $day <= 31) {
                        $sign = "Virgo";
                        $img = "img/Virgo.svg";
                        $time = "(August 23 – September 22)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'September':
                case 9:
                    if ($day <= 22 && $day >= 1) {
                        $sign = "Virgo";
                        $img = "img/Virgo.svg";
                        $time = "(August 23 – September 22)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 23 && $day <= 30) {
                        $sign = "Libra";
                        $img = "img/Libra.svg";
                        $time = "(September 23 – October 22)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'October':
                case 10:
                    if ($day <= 22 && $day >= 1) {
                        $sign = "Libra";
                        $img = "img/Libra.svg";
                        $time = "(September 23 – October 22)";
                        $result = "You are " . $sign . " " . $time;
                    } else if ($day >= 23 && $day <= 31) {
                        $sign = "Scorpio";
                        $img = "img/Scorpio.svg";
                        $time = "(October 23 – November 21)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'November':
                case 11:
                    if ($day <= 21 && $day >= 1) {
                        $sign = "Scorpio";
                        $img = "img/Scorpio.svg";
                        $time = "(October 23 – November 21)";
                        $result = "You are " . $sign . $time;
                    } else if ($day >= 22 && $day <= 30) {
                        $sign = "Sagittarius";
                        $img = "img/Sagittarius.svg";
                        $time = "(November 22 – December 21)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                case 'December':
                case 12:
                    if ($day <= 21 && $day >= 1) {
                        $sign = "Sagittarius";
                        $img = "img/Sagittarius.svg";
                        $time = "(November 22 – December 21)";
                        $result = "You are " . $sign . $time;
                    } else if ($day >= 22 && $day <= 31) {
                        $sign = "Capricorn";
                        $img = "img/Capricorn.svg";
                        $time = "(December 22 – January 19)";
                        $result = "You are " . $sign . " " . $time;
                    } else {
                        $result = "Invalid day";
                    }
                    break;
                default:
                    $result = "Invalid month";
                    break;
            }
        } else {
            $result = "Day is not a numberic form";
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
            <p><?php
                echo $result;
                ?></p>

        </div>
    </div>

</body>

</html>