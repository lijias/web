<?php
$x = array(1, 1, 2, 3, 5, 8, 13, 21, 34);
$i = array();
for ($y = 0; $y < count($x); $y++) {
    if ($y < 2) {
        $i[$y] = 1;
    } else {
        $i[$y] = $i[$y-1]+$i[$y-2];
    }
}
print_r($i);
/*
 *
 *
 */