<?php
include 'koneksi.php';
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Registration logic
    if (isset($_POST['aksi']) && $_POST['aksi'] === 'tambah') {
        // Handle registration for both pemandu and wisatawan here
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $negara = $_POST['negara'];
        $pengalaman = $_POST['pengalaman'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        // Add the necessary database insert logic here

        // After successful registration, you may redirect users to the login page
        header("Location: login.php");
        exit();
    }

    // Login logic
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials for pemandu
    $sqlPemandu = "SELECT * FROM pemandu WHERE username='$username' AND password='$password'";
    $resultPemandu = mysqli_query($koneksi, $sqlPemandu);

    // Check credentials for wisatawan
    $sqlWisatawan = "SELECT * FROM wisatawan WHERE username='$username' AND password='$password'";
    $resultWisatawan = mysqli_query($koneksi, $sqlWisatawan);

    if ($username == 'admin' && $password == 'admin123') {
        $_SESSION['username'] = 'admin'; // Set the admin username
        $_SESSION['login'] = true;
        header("location: ../admin.php");
        exit();
    } elseif ($resultPemandu->num_rows > 0) {
        $row = mysqli_fetch_assoc($resultPemandu);
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = true;
        header("Location: ../index.php");
        exit();
    } elseif ($resultWisatawan->num_rows > 0) {
        $row = mysqli_fetch_assoc($resultWisatawan);
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = true;
        header("Location: ../index.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        header("Location: ../login.php");
        exit();
    }
} elseif (isset($_GET['logout'])) {
    // Logout logic
    session_unset();
    session_destroy();
    header("Location: ../index.php"); // Redirect to your home page
    exit();
}
?>