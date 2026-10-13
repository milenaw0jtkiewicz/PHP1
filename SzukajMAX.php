//Napisz funckję która wyszuka w tablicy największy element i zwróci jego indeks.


<?php
function ZnajdzMax($tablica) {
    $max = $tablica[0];
    for($i=1; $i<count($tablica); $i++) {
        if($tablica[$i] > $max ) {
            $max=$tablica[$i]; //zwraca indeks znalezionego elementu
        }
    }
    return $max; //zwraca -1 jesli element nie zostal znaleziony
}
$tablica = array(1,2,3,4,5);
$indeks =znajdzMax($tablica);
echo "Największy element w tablicy to: " . $indeks;