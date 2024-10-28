<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakweb_2024_c_223040080";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>