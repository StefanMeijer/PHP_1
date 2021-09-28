<?php
$fruits = array("melon", "banana", "orange", "apple", "apricot");

foreach ($fruits as &$value) {
    echo "$value<br>";
}
?>