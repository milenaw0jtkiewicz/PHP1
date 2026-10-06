//Funkcja która zwraca sume elementów tablicy
<?php
function suma($tablica){
    $rozmiar=count($tablica);
        $razem=0;
        for( $i=0; $i<$rozmiar; $i++){
            $razem+=$tablica[$i];
        }
        return $razem;
}
    $liczby=[1,2,3,4,5];
    echo suma($liczby);
    ?>
