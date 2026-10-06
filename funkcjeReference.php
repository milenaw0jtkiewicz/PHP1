<?php
    $value=5;
    function functionReference(&$val) {
        $val++;
        echo $val."<br>";
    }
    functionReference($value);
    echo $value;
?>