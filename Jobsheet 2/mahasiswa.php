<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <?php
    //membuat class
    class mahasiswa{
        //menuliskan property
        var $nim;
        var $nama;
        var $alamat;
        
        //method tampil nama
        function tampil_nama(){
            //isi method
            return "Nama Saya adalah Lutfiya Ainurrahman";
        }
        
        //method tampil nama
        function tampil_alamat(){
            //isi method
        }
    }

        //membuat objek nama mahasiswa
    $nama_mahasiswa=new mahasiswa();

    //menampilkan objek ke layar
    echo $nama_mahasiswa->tampil_nama();


    
    //task
    echo "</br></br>TASK(membuat class Dosen)</br>";
    class dosen{
        var $nidn;
        var $name;
        var $prodi;

        function tampil_nidn(){
            return "NIDN saya adalah 220102060";
        }
        function tampil_name(){
            return "Nama saya adalah Lutfiya Ainurrahman";
        }
        function tampil_prodi(){
            return "Prodi saya adalah D3 Teknik Informatika";
        }
    }
    //membuat objek nama dosen
    $nidn_dosen=new dosen();
    $name_dosen=new dosen();
    $prodi_dosen=new dosen();

    //menampilkan objek ke layar
    echo $nidn_dosen->tampil_nidn() . "</br>";
    echo $name_dosen->tampil_name() . "</br>";
    echo $prodi_dosen->tampil_prodi();
    ?>
</body>
</html>