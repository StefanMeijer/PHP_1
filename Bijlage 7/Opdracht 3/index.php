<?php
$number = 75;
        
function higherOrLower($number) {
    if ($number > 100) {
        $result = $number . " is greater than 100";
        echo "<p>$result</p>";
    } else {
        $result = $number . " is less than or equal to 100";
        echo "<p>$result</p>";
    }
}
higherOrLower($number);
?>