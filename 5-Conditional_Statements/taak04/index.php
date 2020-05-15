<?php

$prodbesteld = 12;
$prodbesteld1 = 20;
$prodbesteld2 = 21;

if ($prodbesteld < 10) {
    $prijs = 1.50;
} elseif($prodbesteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}

if ($prodbesteld1 > 10) {
    $prijs1 = 1.50;
} elseif($prodbesteld1 > 20) {
    $prijs1 = 1.25;
} else {
    $prijs1 = 1.00;
}

if ($prodbesteld2 == 10) {
    $prijs2 = 1.50;
} elseif($prodbesteld2 == 20) {
    $prijs2 = 1.25;
} else {
    $prijs2 = 1.00;
}

echo $prijs." ".$prijs1." ".$prijs2;

?>