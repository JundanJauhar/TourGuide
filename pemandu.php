<!DOCTYPE html>

<?php
    include 'php\koneksi.php';

    $query = "SELECT * FROM pemandu;";
    $sql = mysqli_query($koneksi, $query);
    $no = 0;

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/table.css"> <!-- Custom styling for the table -->
</head>
<body>

<?php include 'admin.php'; ?>

<div class="container mt-4">
    <div class="row">
        
        <div class="col-md-9">

            <div class="mb-3">
                <?php if (isset($_GET['ubah'])) : ?>
                    <a href="registrasiPemandu.php" class="btn btn-primary">
                        <i class="fa fa-pencil"></i> Simpan Perubahan
                    </a>
                <?php else : ?>
                    <a href="registrasiPemandu.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambahkan
                    </a>
                <?php endif; ?>
            </div>

            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>No.</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Negara</th>
                        <th>Pengalaman</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($result = mysqli_fetch_assoc($sql)) : ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $result['nama']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['negara']; ?></td>
                            <td><?php echo $result['pengalaman']; ?></td>
                            <td><?php echo $result['jenis_kelamin']; ?></td>
                            <td><img src="img/<?php echo $result['foto']; ?>" alt="" style="width: 150px"></td>
                            <td>
                                <a href="registrasiPemandu.php?ubah=<?php echo $result['id']; ?>" class="btn btn-primary">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="prosesPemandu.php?hapus=<?php echo $result['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data tersebut???')">
                                    <i class="fa fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
