<?php
$servername="localhost";
$username="root";
$password="";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
    die("Błąd połączenia" . mysqli_connect_error());

} 

echo "Połączono pomyślnie"; 



$database="szkola_Goetel";
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if(mysqli_query($conn, $sql)) {
    echo "Baza danych utworzona";} else {
        echo "Nie udało się utworzyć bazy danych."  . mysqli_error($conn);
    }
if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected";
    } else { echo "Error podczas wyboru bazy dancyh" . mysqli_error($conn); 
     }

$sql = "CREATE TABLE IF NOT EXISTS uczen 
        (imie VARCHAR(20), 
        data_urodzenia DATE,
         wzrost INT(3))";

if (mysqli_query($conn, $sql)) {
    echo "Tabela uczen utworzona pomyślnie.";}
    else {
        echo "Błąd podczas twoezenia bazy danych:" . mysqli_error($conn); }


$imie= $_POST["imie"];
$wzrost= $_POST["wzrost"];
$data_urodzenia= $_POST["data_urodzenia"];
$sql_wstaw="insert into uczen (imie, wzrost, data_urodzenia) values ('$imie', '$wzrost', '$data_urodzenia')";
$result = mysqli_query($conn, $sql_wstaw);
echo $sql_wstaw.mysqli_error($conn);



?>