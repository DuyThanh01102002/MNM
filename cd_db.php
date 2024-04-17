<?php
include 'c_db.php';
$sql = "CREATE DATABASE myDBi";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
}else{
    echo "Error creating database:".mysqli_error($conn);
}
mysqli_close($conn);
?>