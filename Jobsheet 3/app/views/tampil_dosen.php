<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Dosen</title>
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

<h3>Data Dosen</h3>
<a href="input_dosen.php" class="btn btn-primary">Tambah Dosen</a>
<br>
<br>
<div class="table-responsive large">
    <table border="1" class="table table-striped table-sm">
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIDN</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach($db -> tampil_dosen() as $x){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a href="edit_dosen.php?nidn=<?php echo $x['nidn'];?>&aksi=edit_dosen" class="btn btn-warning" onclick = "return confirm('Yakin Untuk mengedit data?');">Edit</a>
                <a href="proses_dosen.php?nidn=<?php echo $x['nidn'];?>&aksi=hapus_dosen"class="btn btn-danger" onclick = "return confirm('Yakin menghapus data?');">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
</body>
</html>
