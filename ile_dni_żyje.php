<?php
$aktualnie = mktime(12,27,0,6,10,2008);
$osiemnlat = 18 * 365 * 24 * 60 * 60; //w sekundach
echo "<br> ile dni zyje
: " .
date("d.m.Y H:i:s", $aktualnie + $osiemnlat);

?>