<?php
session_start();

// Contoh data pengguna (username dan password)
$valid_username = "admin";
$valid_password = "admin123";

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Memeriksa apakah username dan password cocok
if ($username === $valid_username && $password === $valid_password) {
    // Jika cocok, simpan informasi pengguna dalam session
    $_SESSION['username'] = $username;
    header("Location: dashboard.php"); // Arahkan ke halaman dashboard
    exit();
} else {
    // Jika tidak cocok, kembali ke halaman login dengan pesan error
    header("Location: login.php?error=1");
    exit();
}
?>