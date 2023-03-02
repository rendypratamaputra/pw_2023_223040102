<?php
$depan = 'Rendy';
$belakang = 'Pratama';

for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0 and $i % 3 == 0) {
        echo $depan . $belakang . "<br>";
    } elseif ($i % 5 == 0) {
        echo $depan . '<br>';
    } elseif ($i % 3 == 0) {
        echo $belakang . '<br>';
    } else {
        echo $i . "<br>";
    }
}
?>