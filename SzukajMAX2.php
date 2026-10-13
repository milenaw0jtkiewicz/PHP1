//Napisz funckję która wyszuka w tablicy największy element i zwróci jego indeks.


<?php
function ZnajdzMax($tablica) {
    $max_indeks=0;
    for($i=1; $i<count($tablica;)$i++) {
        if($tablica[$i] > $tablica[$max_indeks]) {
            $max_indeks=$i;
        }    
    }
    return $max_indeks;
    }
    $tablica=[1,2,3,4,5];
    $indeks znajdzMax($tablica);
    echo "Największy element w tablicy to: "
    . $tablica[$indeks]
    . "jest na pozycji" . $indeks;