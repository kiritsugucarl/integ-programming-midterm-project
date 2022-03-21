<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="/calculator.png">
<!--fontawesome section-->
<!--naiplement ang font awesome para makita yung icons na ginamit sa website-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/v4-shims.css">
<!--google font section-->
<!--naimplement ang google font para makita yung font na ginamit sa website HAHAHAHAHHAHA-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <title>Circle Calculator</title>
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
        <div class="about">
<!--tab section-->
            <div class="tabs">
                <ul>
                    <li class="bookmark_0"></li>
                    <a href="rectangle.php"><li class="bookmark_1"><i class="fa-regular fa-circle" aria-hidden="true"></i>Rectangle</li>
                    </a>
                    <a href="temperature.php"><li class="bookmark_2">Temperature</li></a>
                    <a href="triangle.php"><li class="bookmark_3">Triangle</li></a>
                </ul>
            </div>  
<!--about circle section-->
            <div class="circle" id="circle">
                <h1 class="title-h1">Circle Calculator</h1>
                    <form action="" method="post">
                        <input type="number" placeholder="Radius" name="radius">
                        <select name="options1[]" id="circle" class="selection-1">
                            <option value="area">a (area)</option>
                            <option value="circumference">C (circumference)</option>
                            <option value="diameter">d (diameter)</option>
                        </select>
                        <br>
                        <input type="reset" value="Reset">
                        <input type="submit" value="Calculate" name="submit1">
                        <div class="input-section">
                    </form>
                    <?php
                    error_reporting(0);
                    ini_set('display_errors', 0);
                    if (isset($_POST['submit1'])) {
                        $val1 = $_POST['radius'];
                        $result = 0;
                        $answer = 0;
                        foreach ($_POST['options1'] as $selected) {
                            $selected = $selected;
                        }
                        if($val1 == null)
                        {
                            $val1 = 0;
                        }
                        if ($selected == "area") {
                            $answer = 3.1416 * ($val1 * $val1);
                            echo "<pre class='answer'>The area of circle with radius given $val1 is : " . number_format($answer, 3, '.', ' ') . " units</pre>";
                        } elseif ($selected == "circumference") {
                            $result = 2 * 3.1416;
                            $answer = $result * $val1;
                            echo "<pre class='answer'>The circumference of circle with radius given $val1 is : " . number_format($answer, 3, '.', ' ') . " units</pre>";
                        } elseif ($selected == "diameter") {
                            $answer = 2 * $val1;
                            echo "<pre class='answer'>The diameter of circle with radius given $val1 is : " . number_format($answer, 3, '.', ' ') . " units</pre>";
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
                    <h1>Formulas Related to Circle</h1>
                    <p>The Circle formulas are expressed as,</p>
<!--table with contents section-->
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
<!--footer section-->
            <div class="bottom">
                <p>GREIL PROGRAMMERS | MIDTERM PROJECT 2022</p>
            </div>
        </div>
</body>
</html>