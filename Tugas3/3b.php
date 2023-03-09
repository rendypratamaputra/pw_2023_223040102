<?php
function UrutanAngka ($angka) {
    $count = 1 ;

    for($i=0; $i < $angka; $i++) {
        for ($j=0; $j <= $i ; $j++) { 
            echo " $count " ;
            
            $count++;
        }
        echo "<br>";
    }
        

}
echo UrutanAngka(5);
?>