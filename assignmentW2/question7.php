<?php

$a = 24;
$b = 36;

while ($b != 0) {
    $remainder = $a % $b;
    $a = $b;
    $b = $remainder;
}

echo "GCD / HCF = " . $a;

?>