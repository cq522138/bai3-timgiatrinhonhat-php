<?php
$a = [8, 1, 2, 3, 5, 7, 9];
$min = $a[0];
for ($i = 1; $i < count($a); $i++) {
    if ($a[$i] < $min) {
        $min = $a[$i];
    }
}
echo $min;
