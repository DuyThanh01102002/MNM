<?php
//Tạo và Kiểm tra kết nối
// Tạo cơ sở dữ liệu
include 'c_db.php';
$sql = "INSERT INTO myDBi (firstname, lastname, email)
VALUES ('Le', 'Duy Thanh', 'duy241102@gmail.com')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//Đóng kết nối
?>