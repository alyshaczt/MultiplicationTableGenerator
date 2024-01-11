<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    
    <style>
        body {
            font-family:"Lucida Console", "Courier New", monospace;
            background-color: #ffe4e1;
            color: #ffa49b;
        }

        h2 {
            color: #ffa49b;
        }

        table {
            width: 20%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 3px solid #ffe4e1;
        }


        td {
            background-color: #ffcdc8;
            color: white;
            font-weight: bold;
        }


        tr:first-child td {
            background-color: #ffb6af; 
            color: #fff; 
        }

        
        td:first-child {
            background-color: #ffb6af;
            color: #fff; 
        }   

        a {
        color: #ff8d82;
        }

        a:hover {
        color: #ff7668; 
        }
    </style>
</head>
<body>
<?php


    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if (($number1 !== false) && ($number2 !== false) && ($number1 >= 3) && ($number1 <= 12) && ($number2 >= 3) && ($number2 <= 12)) {
        echo "<h2>Multiplication Table</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= $number1; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $number2; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Please enter valid numbers between 3 and 12 (inclusive) for both values.</p>";
        echo 'Return to the original page with the form. ' . '<a href="https://www2.cs.torontomu.ca/~acezette/lab08/lab08.php">Click here to do so!</a>'; //this links the page back to index.php 
    }
    ?>
</body>
</html>

