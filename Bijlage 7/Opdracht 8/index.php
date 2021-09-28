<?php
function forloop() {
    for ($x = 10; $x >= 1; $x--) {
        for ($y = 0; $y < $x; $y++) {
            echo "*";
        }
        echo "<br>";
    }
}
forloop();
echo "<hr>";

function whileloop() {
    $x = 10;
    while($x >= 1) {
      $y = 0;
      while($y < $x) {
        echo "*";
        $y++;
      }
      $x--;
      echo "<br>";
    }
}
whileloop();
echo "<hr>";

function dowhileloop() {
    $x = 10;

    do {
      $y = 0;
        do {
        echo "*";
        $y++;
        } while ($y < $x);
        $x--;
      echo "<br>";
    } while ($x >= 1);
}
dowhileloop();
?>