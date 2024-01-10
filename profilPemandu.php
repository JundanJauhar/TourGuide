<?php
include 'php\koneksi.php';

// Assuming you have the Pemandu's ID from the URL parameter
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM pemandu WHERE id = $id;";
    $sql = mysqli_query($koneksi, $query);

    // Check if the query is successful
    if ($sql) {
        $row = mysqli_fetch_assoc($sql);
        $no = 0;
    } else {
        // Handle the case where the query fails
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Handle the case where the Pemandu ID is not provided
    echo "Pemandu ID is not specified.";
    exit();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/pemandu.css"> 

    <title>Profil Pemandu</title>
</head>
<body>
    <form action="php\profilPemandu.php" method="POST">
        <section class="vh-100" style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="img/<?php echo $row['foto']; ?>" alt="" style="width: 150px">                                    <p>Tour Guide</p>
                                    <i class="far fa-edit mb-5"></i>
                                    <a href="index.php">Kembali</a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>Information</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Email</h6>
                                                <p class="text-muted"><?php echo $row['email']; ?></p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Pengalaman</h6>
                                                <p class="text-muted"><?php echo $row['pengalaman']; ?></p>
                                            </div>
                                        </div>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Negara</h6>
                                                <p class="text-muted"><?php echo $row['negara']; ?></p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Jenis Kelamin</h6>
                                                <p class="text-muted"><?php echo $row['jenis_kelamin']; ?></p>
                                            </div>
                                        </div>
                                        <div class="d-inline-flex align-items-center">
                                            <a class="text-primary px-3" href="">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a class="text-primary px-3" href="">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a class="text-primary px-3" href="">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                            <a class="text-primary px-3"
                                                href="https://www.instagram.com/jundan_jhr/?hl=en">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a class="text-primary pl-3" href="">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>
</html>
