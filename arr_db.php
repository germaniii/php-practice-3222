<!DOCTYPE php>
<html>
<head>
    <title> 7-3 Address Book</title>
    <meta name = "keywords" content = "German, Felisarta, PHP, Practice"> 
    <meta name = "description" content = "This webpage is a practice page for PHP functions">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
        $input = $_POST['n'];
        $x = 1;
        $y = 2;
        $validity = "";

        //Error Trapping, should be numeric
        if(is_numeric($input)){
            //Error Trapping, input should be whole number
            if(ctype_digit(strval($input))){
                echo "  <h1> Multiplication Table of $input </h>
                        <table>";

                for($x; $x <= $input; $x++){         // main loop, prints the row
                    echo "<tr><td>", $x, "</td>";     

                        for($y; $y <= $input; $y++){    // prints the column
                            $mult = $x * $y;
                            echo "<td>", $mult, "</td>";
                        }
                    $y=2;
                    echo "</tr>";
                }

                echo "</table>";
            }else echo "<h2>Input Should be a Whole Number!</h2>";
        }else echo "<h2>Input Should be a number! </h2>";
?>
</body>
</html>