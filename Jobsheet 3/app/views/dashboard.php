<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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


<div class="grid gap-0 column-gap-3">
    <div class="p-2 g-col-6"><h2 class="mb-2"><em>Jobsheet 3 dan 4</em></h2></div>
    <div class="p-2 g-col-6"><p>Pada tugas Praktikum Pemrograman Web 2, untuk jobsheet 3 dan 4 digabungkan dan menghasilkan CRUD(tugas jobsheet 3) yang dipercantik dengan bootstrap (tugas jobsheet 4).</p></div>
     <div class="p-2 g-col-6"><a href="tampil_mhs.php" class="btn btn-primary">Mulai Sekarang</a></div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
</body>
</html>
