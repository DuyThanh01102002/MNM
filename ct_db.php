<?php
//Tạo và Kiểm tra kết nối
// Tạo cơ sở dữ liệu
include 'c_db.php';
$sql = "CREATE TABLE myDBi (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
    ON UPDATE CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
//Đóng kết nối
?>