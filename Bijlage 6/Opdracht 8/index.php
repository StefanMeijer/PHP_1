<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 1</title>
    </head>
    <body>
        <?php
            $datum = 14062016;
            $year = $datum % 10000;
            $month = $datum / 10000 % 100;
            $day = $datum / 1000 % 32;
            
            echo 'Date: ' . $datum . '<br><br>';
            echo 'Year: ' . $year . '<br>';
            echo 'Month: ' . $month . '<br>';
            echo 'Day: ' . $day . '<br>';
        ?>
    </body>
</html>
