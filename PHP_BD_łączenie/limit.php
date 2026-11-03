<?php
//return the first 30 records
$sql = "SELECT * FROM Orders LIMIT 30";
//select records 16-25 (inclusive)
$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";
?>