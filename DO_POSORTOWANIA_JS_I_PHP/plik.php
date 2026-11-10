if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected";
} else { echo "Error select database:;" . mysqli_error($conn);
}