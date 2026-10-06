//Funkcja która zwraca sume elementów tablicy
<?php
function suma($tablica){
        $razem=0;
        foreach($tablica as $element){
            $razem+=$element;
        }
        return $razem;
}
    $liczby=[1,2,3,4,5];
    echo suma($liczby);
    ?>