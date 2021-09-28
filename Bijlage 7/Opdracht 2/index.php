<?php
    $invoergetal = 9;
    echo 'If-else<br>';
    
    if ($invoergetal < 1) {
        echo "Ongeldig cijfer";
    } elseif ($invoergetal <= 3) {
        echo "Zeer slecht";
    } elseif ($invoergetal <= 5) {
        echo "Onvoldoende";
    } elseif ($invoergetal <= 7) {
        echo "Voldoende";
    } elseif ($invoergetal == 8) {
        echo "Goed";
    } elseif ($invoergetal == 9) {
        echo "Zeer goed";
    }  elseif ($invoergetal == 10) {
        echo "Uitmuntend";
    } else {
        echo "Ongeldig cijfer";
    }
    
    echo "<hr>";
    echo 'Switch<br>';
    
    switch (true) {
        case $invoergetal < 1:
            echo "Ongeldig cijfer";
            break;
        case $invoergetal <= 3:
            echo "Zeer slecht";
            break;
        case $invoergetal <= 5:
            echo "Onvoldoende";
            break;
        case $invoergetal <= 7:
            echo "Voldoende";
            break;
        case $invoergetal == 8:
            echo "Goed";
            break;
        case $invoergetal == 9:
            echo "Zeer goed";
            break;
        case $invoergetal == 10:
             echo "Uitmuntend";
            break;
        default:
            echo "Ongeldig cijfer";
            break;
    }
?>