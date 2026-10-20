<?php
$row = 1;
if (($handle = fopen("owoce.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for($i=0; $i < $num; $i++) {
            echo $data[$i] . "<br />\n";
        }
}
fclose($handle);
}
?>