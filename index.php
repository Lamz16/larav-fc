<?php
$host = 'localhost';      // host server MySQL
$db   = 'namadatabase';   // nama database
$user = 'root';           // username MySQL
$pass = '';               // password MySQL (kosong kalau default XAMPP/Laragon)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    // Buat instance PDO
    $pdo = new PDO($dsn, $user, $pass);

    // Set mode error ke exception biar mudah ditangani
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
