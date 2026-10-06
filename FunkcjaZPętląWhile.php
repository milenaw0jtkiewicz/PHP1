//Funkcja która zwraca sume elementów tablicy
<?php
function suma($tablica){
        $razem=0;
        $i=0;
        while($i< count($tablica)){
            $razem+=$tablica[$i];
            $i++;
        }
        return $razem;
}
    $liczby=[1,2,3,4,5];
    echo suma($liczby);
    ?>