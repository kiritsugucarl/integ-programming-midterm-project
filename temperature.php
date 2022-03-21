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
    <div class="animated-body">
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
        <div class="bubbles"></div>
    </div> 
        <div class="about">
            <div class="tabs">
                <ul>
                    <li class="bookmark_0"><a href="#"></a></li>
                    <li class="bookmark_1"><a href="index.php"><i class="fa fa-circle-dashed fa-2xs"></i>Circle</a></li>
                    <li class="bookmark_2"><a href="rectangle.php">Rectangle</a></li>
                    <li class="bookmark_3"><a href="triangle.php">Triangle</a></li>
                </ul>
            </div>  
            <div class="temperature" id="temperature">
                <h1 class="title-h1">Temperature Calculator</h1>
                    <form action="" method="post">
                        <input type="number" name="num" placeholder="Input Value">
                        <br>
                        <select name="options2[]" id="temp" class="selection-2">
                        <option value="ftoc" name="ftoc">Fahrenheit to Celsius</option>
                        <option value="ctof" name="ctof">Celsius to Fahrenheit</option>
                        </select>
                        <br>
                        <input type="reset" value="Reset">
                        <input type="submit" value="Calculate" name="submit2">
                        <div class="input-section">
                    </form>
                    <?php
                    error_reporting(0);
                    ini_set('display_errors', 0);
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