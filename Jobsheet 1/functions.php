<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
    function persegi_panjang($p,$l){
        return $p * $l;
    }
    function lingkaran($r){
        return 3.14 * $r * $r;
    }
    //secara statis
    echo "Secara Statis </br>";
    echo "Luas Persegi Panjang = " . persegi_panjang(5,2) . "</br>";
    echo "Luas Lingkaran = " . lingkaran(7) . "</br>";
    //end secara statis

    echo "</br>";

    //secara dinamis
    echo "Contoh penerapan nilai Dinamis";
    echo '<form method="POST">';
    echo "</br>Masukkan Nilai Persegi Panjang </br>";
    echo "Masukkan p = ";
    echo '<input type="number" name="p" required>';
    echo "</br>Masukkan l = ";
    echo '<input type="number" name="l" required>';
    echo "</br></br>Masukkan Nilai Lingkaran </br>";
    echo "</br>Masukkan r = ";
    echo '<input type="number" name="r" required>';
    echo '</br><input type="submit" value="Cek Nilai">';
    echo "</br>";
    if($_SERVER["REQUEST_METHOD"] === "POST"){
    $p = $_POST["p"];
    $l = $_POST["l"];
    $r = $_POST["r"];
    echo "Luas Persegi Panjang = " . persegi_panjang($p,$l) . "(p = $p , l = $l)</br>";
    echo "Luas Lingkaran = " . lingkaran($r) . "(r = $r)</br>";
    }
    //end secara dinamis
    ?>
</body>
</html>

<!-- buat input type text pada nilai yang ingin dihitung -->