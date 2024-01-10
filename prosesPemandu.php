<?php
    include 'php\koneksi.php';
        
    

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "tambah"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $negara = $_POST["negara"];
            $pengalaman = $_POST["pengalaman"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $foto =  $_FILES['foto']['name'];

            $dir = "img/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file( $tmpFile, $dir.$foto);
            // die();
            

            $query = "INSERT INTO pemandu VALUES(null, '$username','$password','$nama','$email','$negara','$pengalaman','$jenis_kelamin','$foto')";
            $sql = mysqli_query($koneksi, $query);
            // echo "<br>Tambah Data <a href='registrasiPemandu.php'>[Home]</a>";
            if($query){
                header("location: login.php");
                // echo "Data Berhasil Ditambahkan <a href='pemandu.php'>[HOME]</a>";
            }else{
                echo $query;
            }
            // echo "Tambah Data  <a href='pemandu.php'>[HOME]</a>";
        }else if($_POST['aksi'] == "edit"){
            echo "Edit Data  <a href='pemandu.php'>[HOME]</a>";
            // var_dump($_POST);
            $id = $_POST["id"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $negara = $_POST["negara"];
            $pengalaman = $_POST["pengalaman"];
            $jenis_kelamin = $_POST["jenis_kelamin"];

            $queryShow = "SELECT * FROM pemandu WHERE id = '$id'";
            $sqlShow = mysqli_query($koneksi, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($_FILES['foto']['name'] == ""){
                $foto = $result['foto'];
            }else {
                $foto = $_FILES['foto']['name'];
                unlink("img/".$result['foto']); 
                move_uploaded_file( $_FILES['foto']['tmp_name'], 'img/'. $_FILES['foto']['name']);
            }

            $query = "UPDATE pemandu SET username = '$username', password = '$password', nama = '$nama', email = '$email', negara = '$negara', pengalaman = '$pengalaman', jenis_kelamin = '$jenis_kelamin', foto = '$foto'  WHERE id = '$id';";
            $sql = mysqli_query($koneksi, $query);
        }
    }

    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];

        $queryShow = "SELECT * FROM pemandu WHERE id = '$id'";
        $sqlShow = mysqli_query($koneksi, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        // var_dump($result);
        unlink("img/".$result['foto']);         

        $query = "DELETE FROM pemandu WHERE id ='$id';";
        $sql = mysqli_query($koneksi, $query);

        if($sql){
            header("location: pemandu.php");
        }else{
            echo $query;
        }
        // echo "Hapus Data  <a href='pemandu.php'>[HOME]</a>";
    }
    
?>