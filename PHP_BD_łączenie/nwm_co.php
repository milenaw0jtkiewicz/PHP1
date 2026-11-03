<?php

$name = $_POST["name"];
$email= $_POST["email"];

$sql= "INSERT INTO MyGuests (firstname, email) VALUES ('$name','$email')";

echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error:" . $sql "<br>" . mysqli_error($conn);
}



?>
