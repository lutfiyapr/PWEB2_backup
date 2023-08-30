<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/style.css">
</head>
</head>

<body>
<?php
//memanggil class database
include '../classes/database.php';
//instansiasi dtabase
$db = new database;
?>

<div class="wrapper d-flex align-items-stretch">
    <?php
    include '../../asset/sidebar.php';
    ?>
    <div id="content" class="p-4 p-md-5">
    <?php
    include '../../asset/navbar.php';
    ?>

<!--Edit data mulai disini-->

<main>

<a href="tampil_mhs.php" class="btn btn-warning" onclick = "return confirm('Data tidak akan tersimpan! tetap lanjut?');">Kembali</a>
  <br>
  <br>
  <h3>Edit Data Mahasiswa</h3>
<div class="alert alert-warning d-flex align-items-center col-sm-4" role="alert">
  <div>
    <i class="bi bi-exclamation-triangle-fill">&nbsp</i>
      Harap periksa kembali data sebelum <strong>SIMPAN!</strong>
  </div>
</div>

    <div class="table-responsive small">
    <table class="table table-striped table-sm">
    <form method="post" action="proses_mhs.php?aksi=update">
    <?php
    foreach($db -> edit($_GET['npm']) as $d){
    ?>
	<table>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">NPM</td>
          <div class="col-sm-10">
          <input type="hidden" name="id" value="<?php echo $d['npm']?>">
          <td><input type="text" name="npm" id="" value="<?php echo $d['npm']?>" class="form-control"></td>
          </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">Nama</td>
          <div class="col-sm-10">
          <td><input type="text" name="nama" id="" value="<?php echo $d['nama']?>" class="form-control"></td>
          </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label">Alamat</td>
          <div class="col-sm-10">
          <td><textarea name="alamat" id="" cols="30" rows="5" class="form-control"><?php echo $d['alamat']?></textarea></td>
          </div>
          </tr>
        </div>
        <div class="aa">
          <tr>
          <td class="col-sm-2 col-form-label"></td>
          <div class="col-sm-10">
          <td>
            <input type="submit" value="Simpan" class="btn btn-success" onclick = "return confirm('Apakah yakin untuk mengedit data ini?');">
            <input type="reset" value="Reset" class="btn btn-warning">
          </td>
          </div>
          </tr>
        </div>
	</table>
    <?php
    }
    ?>
	</form>
        </table>
      </div>
    </div>
    </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
</body>
</html>