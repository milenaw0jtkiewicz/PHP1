<?php
$matura = mktime(8,00,0,5,4,2027);
$stodni = 100*24*60*60; //w sekundach
echo "<br> 100 dni przed maturą: " .
date("d.m.Y H:i:s", $matura - $stodni);

?>