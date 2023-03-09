
<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function HitungLuasLingkaran($r) {
    $luas =  3.14* $r * $r;

    echo "Jari-Jari = $r cm.<br>";
    echo "Luas Lingkaran = $luas cm<sup>2</sup>";
    echo "<hr>";

}

HitungLuasLingkaran(10);

echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungkelilinglingkaran($r) {
        $keliling = 2 * 3.14 * $r;

        echo "Jari-jari = $r cm.<br>";
        echo "keliling lingkaran = $keliling cm";
        echo "<hr>";

    }
hitungkelilinglingkaran(20);
?>