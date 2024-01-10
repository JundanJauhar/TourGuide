<?php
  include 'php\koneksi.php';

            $id ='';
            $username = '';
            $password ='';
            $nama ='';
            $email = '';
            $negara ='';
            $pengalaman ='';
            $jenis_kelamin = '';

          if(isset($_GET['ubah'])){
              $id = $_GET['ubah'];
              
              $query = "SELECT * FROM pemandu WHERE id = '$id';";
              $sql = mysqli_query($koneksi, $query);

              $result = mysqli_fetch_assoc($sql);

              $username = $result['username'];
              $password = $result['password'];
              $nama = $result['nama'];
              $email = $result['email'];
              $negara = $result['negara'];
              $pengalaman = $result['pengalaman'];
              $jenis_kelamin = $result['jenis_kelamin'];

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
    <link rel="stylesheet" href="css\style.regisPemandu.css">
</head>
<body>
    <h2>Form Registrasi</h2>
    <form method="POST" action="prosesPemandu.php" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo $id; ?>" name="id" id="">
        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" required  name="username" class="form-control" id="username" value="<?php echo $username;?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" required  name="nama" class="form-control" id="nama"  value="<?php echo $nama;?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="Password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" required  name="password" class="form-control" id="Password" >
            </div>
          </div>

          <div class="mb-3 row">
            <label for="konfirmasiPassword" class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-10">
              <input type="password" required  name="konfPassword" class="form-control" id="konfirmasiPassword"  >
            </div>
          </div>

          <div class="mb-3 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select name="jenis_kelamin" required  id="jenis_kelamin" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option <?php if($jenis_kelamin == 'Laki-laki'){echo 'selected';}?> value="Laki-Laki">Laki - Laki</option>
                    <option <?php if($jenis_kelamin == 'Perempuan'){echo 'selected';}?>  value="Perempuan">Perempuan</option>
                  </select>
            </div>
          </div>
         
          <div class="mb-3 row">
            <label for="negara" class="col-sm-2 col-form-label">Negara</label>
            <div class="col-sm-10">
                <select name="negara" required  class="form-select form-select-sm" aria-label=".form-select-sm example">

                    <option value="Indonesia">Indonesia</option>
                    <option value="Inggris">Inggris</option>
                  </select>
            </div>
          </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" required  name="email" class="form-control" id="email"  value="<?php echo $email;?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="pengalaman" class="form-label">Pengalaman</label>
            <textarea class="form-control" required  name="pengalaman" id="pengalaman" rows="3" ><?php echo $pengalaman;?></textarea>
        </div>
        
        <div class="input-group mb-3">
            <label class="col-sm-2 col-form-label" for="foto">Foto </label>
            <div>
              
              <input type="file"   class="form-control" name="foto"  id="foto" accept="image/*">

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
            <button type="submit" name="aksi" value="tambah"  class="btn btn btn-primary mb-3" >
                <i class="fa fa-plus" aria-hidden="true"></i>
                Submit
            </button>
        <?php
            }
        ?>

<?php
            if(isset($_GET['ubah'])){
        ?>
            <a href="pemandu.php" type="submit" class="btn btn btn-danger mb-3">
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
