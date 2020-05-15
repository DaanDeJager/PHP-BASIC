<?php

$var1 = 69;
$var2 = 420;

if ($var1 < 5 && $var2 > 10) {
    echo "Dit is allebei waar.";
} else {
    echo "Dit is allebei niet waar.";
}

echo "<br>";

if ($var1 < 5 || $var2 > 10) {
    echo "1 of beide is waar.";
} else {
    echo "Geen van beide is waar.";
}

echo "<br>";

if ($var1 < 5 xor $var2 > 10) {
    echo "1 van ze is waar.";
} else {
    echo "Geen van beide is waar.";
}

echo "<br>";

if ($var1 < 5 != $var2 > 10) {
    echo "Dit is niet waar.";
} else {
    echo "Dit is wel waar";
}

?>