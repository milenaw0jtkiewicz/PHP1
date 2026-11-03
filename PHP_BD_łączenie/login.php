<?php

$login = $_POST["name"];
$password = sha1( $_POST["haslo"]);
$sql = "SELECT login, password from MyGuests where login = '$login'";
if($result=mysqli_query($conn, $sql)) {
    $row = mysqli_fetch_assoc($result);
    if($password == $row['password']){
        echo "zalogowano pomyślnie";
    }
    } else { echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>