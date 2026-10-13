<?php
    function odwrocTablice(&$tablica){
        for ($i=0; $i<count($tablica)/2; i++){
            $temp= $tablica[$i];
            $tablica[$i];
            $tablica[count($tablica)-1-$i] = $temp;
        }
    }

    $liczby = [1,2,3,4,5,6,7,8,9,10];
    odwrocTablice($liczby);
    print_r($liczby);