<?php
// koneksi.php

$host     = "localhost";
$username = "root";
$password = "";
$database = "db_cobauas_pbo";   // Ganti jika nama database Anda berbeda

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Mengatur charset agar mendukung karakter UTF-8
$koneksi->set_charset("utf8");
?>