<?php
  include 'php\koneksi.php';

            $id ='';
            $username = '';
            $password ='';
            $email = '';

          if(isset($_GET['ubah'])){
              $id = $_GET['ubah'];
              
              $query = "SELECT * FROM wisatawan WHERE id = '$id';";
              $sql = mysqli_query($koneksi, $query);

              $result = mysqli_fetch_assoc($sql);

              $username = $result['username'];
              $password = $result['password'];
              $email = $result['email'];

              // var_dump($result);

              // die();
            }
?>
<html>
<head>
    <title>Form Registrasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>
    <h2>Form Registrasi</h2>
    <form method="POST" action="prosesWisatawan.php"  enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control" id="username" value="<?php echo $username;?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $email;?>">
            </div>
        </div>

          <div class="mb-3 row">
            <label for="Password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="Password">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="konfirmPassword" class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-10">
            <input type="password" name="konfirmPassword" class="form-control" id="konfirmPassword">
            </div>
          </div>

          <?php
            if(isset($_GET['ubah'])){
        ?>
            <button type="submit" name="aksi" value="edit" class="btn btn btn-primary mb-3" >
                <i class="fa fa-save" aria-hidden="true"></i>
                Simpan Perubahan
            </button>
        <?php
            }else{
        ?>
             <button type="submit" name="aksi" value="tambah" class="btn btn btn-primary mb-3">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambahkan
        </button>
        <?php
            }
        ?>
       <?php
            if(isset($_GET['ubah'])){
        ?>
            <a href="wisatawan.php" type="submit" class="btn btn btn-danger mb-3">
                  <i class="fa fa-reply" aria-hidden="true"></i>
                  Batal
              </a>
        <?php
            }else{
        ?>
              <a href="login.php" type="submit" class="btn btn btn-danger mb-3">
                  <i class="fa fa-reply" aria-hidden="true"></i>
                  Batal
              </a>
          <?php
            }
            ?>
    </form>
</body>
<script src="js/registrasiwisatawan.js"></script>
</html>
