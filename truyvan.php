<?php
//Tạo và Kiểm tra kết nối
//Truy vấn
include 'c_db.php';
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
// Fetch all
mysqli_fetch_all($result, MYSQLI_ASSOC);
// Free result set
mysqli_free_result($result);
//Đóng kết nối
mysqli_close($conn);
?>