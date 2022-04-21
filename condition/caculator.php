<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $num1 = "";
    $cal = "";
    $num2 = "";
    $result = "";
    $valid = 0;
    if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculation"])) {
        $num1 = $_POST["number1"];
        $cal = $_POST["caculation"];
        $num2 = $_POST["number2"];
        $valid = 0;
        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($cal) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                case 'x':
                    $result = $num1 * $num2;
                    break;
                case '/':
                case ':':
                    $result = $num1 / $num2;
                    break;
                case '%':
                    $result = $num1 % $num2;
                    break;
                default:
                    $valid = 1;
                    $result = "Invalid calculation";
                    break;
            }
        } else {
            $valid = 2;
            $result = "First or second number is not a numberic form";
        }
    }

    ?>
    <div class="content">
        <h1>Caculator Simulator</h1>
        <form action="#" method="POST" name="main-form">
            <div class="row">
                <span>First Number</span>
                <input type="text" name="number1" value="<?php echo $num1 ?>">
            </div>
            <div class="row">
                <span>Caculation</span>
                <input type="text" name="caculation" value="<?php echo $cal ?>">
            </div>
            <div class="row">
                <span>Second Number</span>
                <input type="text" name="number2" value="<?php echo $num2 ?>">
            </div>
            <div class="row">
                <input type="submit" name="submit" value="See Result">
            </div>
            <div class="row">
                <p><?php
                    if ($valid == 0) {
                        echo "Result: " . $num1 . " " . $cal .  " " . $num2 .  " = " . $result;
                    } else {
                        echo $result;
                    }
                    ?>
                </p>
            </div>
        </form>
    </div>

</body>

</html>