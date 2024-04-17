<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, 'myDBi');
if(!$conn){
    die("Connection falied: ".mysqli_connect_error());
}
//echo"Connected successfully\n";
?>