<?php
    include 'php\koneksi.php';

    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == "tambah") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $konfirmPassword = $_POST["konfirmPassword"]; // Corrected variable name
            $email = $_POST["email"];
    
            // Check if password and konfirmpassword are the same
            if ($password != $konfirmPassword) {
                echo "Password and Konfirm Password do not match.";
                // You may want to handle this case differently, e.g., redirect back to the registration form
            } else {
                // Continue with your database insert logic
                $query = "INSERT INTO wisatawan VALUES(null, '$username','$password','$konfirmPassword','$email')";
                $sql = mysqli_query($koneksi, $query);
    
                if ($sql) {
                    header("location: login.php");
                } else {
                    echo $query;
                }
            }
        }else if($_POST['aksi'] == "edit"){
            echo "Edit Data  <a href='wisatawan.php'>[HOME]</a>";
            // var_dump($_POST);
            $id = $_POST["id"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];

            $queryShow = "SELECT * FROM wisatawan WHERE id = '$id'";
            $sqlShow = mysqli_query($koneksi, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            $query = "UPDATE wisatawan SET username = '$username', password = '$password', email = '$email'";
            $sql = mysqli_query($koneksi, $query);
        }
    }
    
    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        $query = "DELETE FROM wisatawan WHERE id ='$id';";
        $sql = mysqli_query($koneksi, $query);
    
        if ($sql) {
            header("location: wisatawan.php");
        } else {
            echo $query;
        }
    }
    
    
?>