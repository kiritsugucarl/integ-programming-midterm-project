<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="/calculator.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/v4-shims.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <title>Rectangle Calculator</title>
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
                    <li class="bookmark_2"><a href="temperature.php">Temperature</a></li>
                    <li class="bookmark_3"><a href="triangle.php">Triangle</a></li>
                </ul>
            </div>  
            <div class="rectangle" id="rectangle">
                <h1 class="title-h1">Rectangle Calculator</h1>
                    <form action="" method="post">
                        <input type="number" placeholder="Length" name="length">
                        <br>
                        <input type="number" placeholder="Width" name="width">
                        <br>
                        <select name="options3[]" id="circle" class="selection-3">
                            <option value="area">Area</option>
                            <option value="perimeter">Perimeter</option>
                        </select>
                        <br>
                        <input type="reset" value="Reset">
                        <input type="submit" value="Calculate" name="submit3">
                        <div class="input-section">
                    </form>
                    <?php
                    error_reporting(0);
                    ini_set('display_errors', 0);
                    if (isset($_POST['submit3'])) {
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
            </div>
            <div class="formula">
                <div class="elements">
                <i class="fa fa-solid fa-circle"></i>
                <i class="fa fa-solid fa-circle"></i>
                <i class="fa fa-solid fa-circle"></i>
                </div>
                    <h1>Formulas Related to Rectangle</h1>
                    <p>The Rectangle formulas are expressed as,</p>

                    <table class="table-formula">
                            <tr>
                                <td>Perimeter of a Rectangle</td>
                                <td>P = 2 (l + b)</td>
                            </tr>
                            <tr>
                                <td>Area of a Rectangle</td>
                                <td>A = l x b</td>
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