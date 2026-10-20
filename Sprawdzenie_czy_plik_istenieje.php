<?php 
$filename = 'plik.txt';

if(file_exists($filename)) {
    echo "This file $filename exists";
} else { 
    echo "This file $filename does not exist"; 
    }
?>