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
        
        //construct
        function __construct(){
            echo "Saya Mahasiswa Teknik Informatika";
            echo "</br></br>";
        }
        function __destruct(){
            echo "</br></br>";
            echo "Politeknik Negeri Cilacap";
        }
        //method tampil nama
        function tampil_nama(){
            //isi method
            return "Nama Saya adalah Lutfiya Ainurrahman</br>";
        }
        
        //method tampil nama
        function tampil_alamat(){
            //isi method
        }
        
        //method tampil mahasiswa
        function tampil_mahasiswa(){
            //isi method
            return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
        }
    }

        //membuat objek nama mahasiswa
    $nama_mahasiswa=new mahasiswa();

    //menampilkan objek ke layar
    echo $nama_mahasiswa->tampil_nama();
    echo $nama_mahasiswa->tampil_mahasiswa();
    ?>
</body>
</html>