<?php
function forloop() {
    for ($x = 1; $x <= 10; $x++) {
        for ($y = 0; $y < $x; $y++) {
            echo "*";
        }
        echo "<br>";
    }
}
forloop();
echo "<hr>";

function whileloop() {
    $x = 1;
    while($x <= 10) {
      $y = 0;
      while($y < $x) {
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
    $x = 1;

    do {
      $y = 0;
        do {
        echo "*";
        $y++;
        } while ($y < $x);
        $x++;
      echo "<br>";
    } while ($x <= 10);
}
dowhileloop();
?>