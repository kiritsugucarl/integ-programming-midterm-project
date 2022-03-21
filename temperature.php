<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/v4-shims.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <title>Temperature Calculator</title>
</head>

<body>
    <!--animation section-->
    <div class="animation">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>

    <div class="body">
        <!--tab section-->
        <div class="tabs">
            <ul>
                <li class="bookmark_0"></li>
                <a href="index.php">
                    <li class="bookmark_1"><i class="fa-regular fa-circle" aria-hidden="true"></i>Circle</li>
                </a>
                <a href="rectangle.php">
                    <li class="bookmark_2">Rectangle</li>
                </a>
                <a href="triangle.php">
                    <li class="bookmark_3">Triangle</li>
                </a>
            </ul>
        </div>

        <!--about circle section-->
        <div class="circle" id="circle">
            <h1 class="title-h1"> Temperature Converter</h1>
            <form action="" method="post">
                <input type="number" placeholder="Input value here" name="num">
                <select name="options[]" id="temp" class="selection-1">
                    <option value="ftoc" name="ftoc">Fahrenheit to Celsius</option>
                    <option value="ctof" name="ctof">Celsius to Fahrenheit</option>
                </select>
                <br>
                <input type="reset" value="Reset">
                <input type="submit" value="Calculate" name="submit">
                <div class="input-section">
            </form>
            <?php

            if (isset($_POST['submit'])) {
                $val1 = $_POST['num'];
                $answer = 0;
                foreach ($_POST['options'] as $selected) {
                    $selected = $selected;
                }

                if ($val1 == null) {
                    $val1 = 0;
                }

                if ($selected == "ftoc") {
                    $answer = ($val1 - 32) / 1.8;
                    echo "
                    <div class='answer-question'>
                        <p class='answer'>$val1 F is " . number_format($answer, 3, '.', ',') . " Celsius</p>
                    </div>
                    ";
                }

                if ($selected == "ctof") {
                    $answer = ($val1 * 9 / 5) + 32;
                    echo "
                    <div class='answer-question'>
                        <p class='answer'>$val1 C is " . number_format($answer, 3, '.', ',') . " Fahrenheit</p>
                    </div>
                    ";
                }
            }
            ?>
        </div>
    </div>
    <div class="formula">
        <div class="elements">
            <i class="fa fa-solid fa-circle"></i>
            <i class="fa fa-solid fa-circle"></i>
            <i class="fa fa-solid fa-circle"></i>
        </div>
        <h1>Formulas Related to Temperature</h1>
        <p>The Temperature formulas are expressed as,</p>

        <table class="table-formula">
            <tr>
                <td>Celsius to Fahrenheit</td>
                <td>° F = 9/5 ( ° C) + 32</td>
            </tr>
            <tr>
                <td>Fahrenheit to Celsius</td>
                <td>° C = 5/9 (° F - 32)</td>
            </tr>
        </table>
    </div>
    </div>
    <div class="bottom">
        <p>GREIL PROGRAMMERS | MIDTERM PROJECT 2022</p>
    </div>
    </div>
</body>

</html>