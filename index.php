<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stlesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <!-- CIRCLE -->
    <div class="circle" id="circle">
        <h1>Circle</h1>
        <form action="" method="post">
            <input type="number" placeholder="Radius" name="radius">
            <br>
            <select name="options1[]" id="circle">
                <option value="area">Area</option>
                <option value="circumference">Circumference</option>
                <option value="diameter">Diameter</option>
            </select>
            <br>
            <input type="submit" value="Calculate" name="submit1">
        </form>
        <?php
        if (isset($_POST['submit1'])) {
            $val1 = $_POST['radius'];
            $result = 0;
            $answer = 0;
            foreach ($_POST['options1'] as $selected) {
                $selected = $selected;
            }
            if ($selected == "area") {
                $answer = 3.1416 * pow($val1, 2);
                echo "<pre>The area of circle with radius given $val1 is : " . number_format($answer, 3, '.', ' ') . " units</pre>";
            } elseif ($selected == "circumference") {
                $result = 2 * 3.1416;
                $answer = $result * $val1;
                echo "<pre>The circumference of circle with radius given $val1 is : " . number_format($answer, 3, '.', ' ') . " units</pre>";
            } elseif ($selected == "diameter") {
                $answer = 2 * $val1;
                echo "<pre>The diameter of circle with radius given $val1 is : " . number_format($answer, 3, '.', ' ') . " units</pre>";
            }
        }
        ?>
    </div>

    <!-- TEMPERATURE -->
    <div class="temperature" id="temperature">
        <h1>Temperature</h1>
        <form action="" method="post">
            <input type="number" name="num" placeholder="Input Value">
            <br>
            <select name="options2[]" id="temp">
                <option value="ftoc" name="ftoc">Fahrenheit to Celsius</option>
                <option value="ctof" name="ctof">Celsius to Fahrenheit</option>
            </select>
            <br>
            <input type="submit" value="Calculate" name="submit2">
        </form>
        <?php

        if (isset($_POST['submit2'])) {
            $val2 = $_POST['num'];
            $answer = 0;
            foreach ($_POST['options2'] as $selected) {
                $selected = $selected;
            }
            if ($selected == "ftoc") {
                $answer = ($val2 - 32) / 1.8;
                echo "<pre>$val2 F is " . number_format($answer, 3, '.', ' ') . " Celsius</pre>";
            }

            if ($selected == "ctof") {
                $answer = ($val2 * 9 / 5) + 32;
                echo "<pre>$val2 C is " . number_format($answer, 3, '.', ' ') . " Fahrenheit</pre>";
            }
        }
        ?>
    </div>

    <!-- TRIANGLE -->
    <div class="triangle" id="triangle">
        <h1>Triangle</h1>

        <form action="" method="post">
            <input type="number" placeholder="Base" name="base">
            <br>
            <input type="number" placeholder="Height" name="height">
            <br>
            <input type="submit" value="Calculate" name="submit3">
        </form>

        <?php
        if (isset($_POST['submit3'])) {
            $val1 = $_POST['base'];
            $val2 = $_POST['height'];
            $answer = ($val1 * $val2) / 2;
            echo "<pre> The area of the triangle with base of $val1 units and height of $val2 units is : " . number_format($answer, 3, '.', ' ') . " units </pre>";
        }
        ?>
    </div>

    <!-- RECTANGLE -->
    <div class="rectangle" id="rectangle">
        <h1> Rectangle </h1>
        <form action="" method="post">
            <input type="number" placeholder="Length" name="length">
            <br>
            <input type="number" placeholder="Width" name="width">
            <br>
            <select name="options3[]" id="" class="options3">
                <option value="area">Area</option>
                <option value="perimeter">Perimeter</option>
            </select>
            <br>
            <input type="submit" value="Calculate" name="submit4">
        </form>

        <?php
        if (isset($_POST['submit4'])) {
            $answer = 0;
            $val1 = $_POST['length'];
            $val2 = $_POST['width'];
            foreach ($_POST['options3'] as $selected) {
                $selected = $selected;
            }
            if ($selected == "area") {
                $answer = $val1 * $val2;
                echo "<pre> The area of rectangle with length of $val1 units and width of $val2 units is : " . number_format($answer, 3, '.', ' ') . " units </pre>";
            } elseif ($selected == "perimeter") {
                $answer = 2 * ($val1  + $val2);
                echo "<pre> The perimeter of rectangle with length of $val1 units and width of $val2 units is : " . number_format($answer, 3, '.', ' ') . " units </pre>";
            }
        }
        ?>
    </div>

</body>

</html>