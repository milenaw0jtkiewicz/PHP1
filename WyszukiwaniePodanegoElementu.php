<?php
function znajdzElement ($tablica, $element) {
    for($i = 0; $i<count($tablica); i++) {
        if($tablica[i] == $element) {
            retrun $i; //zwraca indeks elementu
        }
    }
    return -1; // jesli nie znaleziony zwraca -1.
}

$tablica = array(1,2,3,4,5);
$element= 3;
$indeks = znajdzElement($tablica, $element);
if($indeks != -1) {
    echo "Element $element zostal znaleziony na indeksie: $indeks";
} else {echo "Element $element nie zostal znaleziony w tablicy";
}
?>