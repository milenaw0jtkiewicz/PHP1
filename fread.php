<?php 
    $myfile = fopen("Milena.txt", "r")
                or die("Unable to open file!");
    echo ($myfile, filesize("Milena.txt"));
    fclose($myfile);
?>