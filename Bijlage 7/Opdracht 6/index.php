<?php
function forloop() {
    for ($x = 0; $x < 5; $x++) {
        for ($s = 0; $s <= 10; $s++) {
            echo "*";
        }
        echo "<br>";
    }
}
forloop();
echo "<hr>";

function whileloop() {
    $x = 0;
    while($x < 5) {
        $y = 0;
        while($y <= 10) {
            echo "*";
            $y++;
        }
        $x++;
        echo "<br>";
    }
}
whileloop();
echo "<hr>";

function dowhileloop() {
    $x = 0;
    do {
        $y = 0;
        do {
          echo "*";
          $y++;
        } while ($y <= 10);
      $x++;
      echo "<br>";
    } while ($x < 5);
}
dowhileloop();
?>