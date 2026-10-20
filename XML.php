<?php
$xml=simplexml_load_file("plik.xml")
        or die("Error:cannot create object");
        print_r($xml);
?>