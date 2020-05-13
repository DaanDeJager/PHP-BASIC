<?php
$test1 = 3;
$test2 = 6;
if($test1 == $test2) {
    echo "geloijk";
}
else{
    echo "Niet gelijk";
}
echo "<br>";
if($test1 != $test2) {
    echo "ongelijk";
}
else{
    echo "gelijk";
}
echo "<br>";
    if($test1 === $test2) {
        echo "niet identiek";
    }
    else{
        echo "identiek";
    }
echo "<br>";
    if($test1 > $test2) {
        echo "groter dan";
    }
    else{
        echo "kleiner dan";
    }
echo "<br>";
    if($test1 < $test2) {
        echo "test1 is kleiner dan test2";
    }
    else{
        echo "test 1 is groter dan test 2";
    }
echo "<br>";
    if($test1 >= $test2) {
        echo "test1 is groter dan of gelijk aan test2";
    }
    else{
        echo "test 1 is niet groter of gelijk aan test 2";
    }
echo "<br>";
    if($test1 <= $test2) {
        echo "test1 is kleiner dan of gelijk aan test2";
    }
    else{
        echo "test 1 is niet kleiner of gelijk aan test 2";
    }
?>