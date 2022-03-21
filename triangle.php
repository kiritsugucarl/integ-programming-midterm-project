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
    <title>Triangle Calculator</title>
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
                    <li class="bookmark_3"><a href="rectangle.php">Rectangle</a></li>
                </ul>
            </div>  
            <div class="triangle" id="triangle">
                <h1 class="title-h1">Triangle Calculator</h1>
                <form action="" method="post">
                    <input type="number" placeholder="Base" name="base">
                    <br>
                    <input type="number" placeholder="Height" name="height">
                    <br>
                    <input type="submit" value="Calculate" name="submit4">
                </form>
                    <?php
                    error_reporting(0);
                    ini_set('display_errors', 0);
                    if (isset($_POST['submit4'])) {
                        $val1 = $_POST['base'];
                        $val2 = $_POST['height'];
                        $answer = ($val1 * $val2) / 2;
                        echo "<pre> The area of the triangle with base of $val1 units and height of $val2 units is : " . number_format($answer, 3, '.', ' ') . " units </pre>";
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
                    <h1>Formulas Related to Triangle</h1>
                    <p>The Triangle formulas are expressed as,</p>

                    <table class="table-formula">
                            <tr>
                                <td>Diameter of a Circle</td>
                                <td>D = 2 x r</td>
                            </tr>
                            <tr>
                                <td>Circumference of a Circle</td>
                                <td>C = 2 x π x r</td>
                            </tr>
                            <tr>
                                <td>Area of a Circle</td>
                                <td>A = π x r2</td>
                            </tr>
                    </table>
                </div>
            </div> 
            <div class="bottom">
                <p>GREIL PROGRAMMERS | MIDTERM PROJECT 2022</p>
                <p>i'm done...</p>
            </div>
        </div>
</body>
</html>