<?php
$servername = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'pabw'; 

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

    // mysqli_select_db($koneksi, $database);

?>
