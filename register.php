<?php
include 'conn.php'; // Pastikan koneksi ke database

$username = $_POST['username'];
$password = $_POST['password']; // Hash password untuk keamanan
$level = $_POST['level'];

$query = "INSERT INTO admin (username, password, level) VALUES ('$username', '$password', '$level')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}
?>
