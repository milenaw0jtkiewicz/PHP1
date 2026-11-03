<?php
session_start();
echo 'Welcome to page #2<br>';
echo 'Ulubiony kolor: ' . $_SESSION['favcolor'];
echo 'Zwierzę: ' . $_SESSION['animal'];
echo date('Y m d H:i:s', $_SESSION['time']);

echo $_SESSION['bzdura'];
?>
