<?php
$now= time();
$week = 7*24*60*60; //w sekundach
echo "<br> za tydzien ".
date("d.m.Y h:i:sa", $now + $week);
?>