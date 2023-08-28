<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <?php
    //contoh penerapan nilai statis
    echo "Contoh penerapan nilai Statis </br>";
    $x = -1;
    echo "Nilai X = $x </br>";
    if($x > 0){
        echo "$x adalah Bilangan Positif";
    }
    else if($x < 0){
        echo "$x adalah Bilangan Negatif";
    }
    else{
        echo "$x adalah Bilangan Bernilai 0";
    }
    //penerapan nilai statis selesai baris sini
    
    echo "</br></br>";
    
    //contoh penerapan nilai dinamis
    echo "Contoh penerapan nilai Dinamis";
    echo '<form method="POST">';
    echo '<input type="number" name="y" required>';
    echo '<input type="submit" value="Cek Nilai">';
    echo "</br>";
    //mengecek nilai y apakah ada atau tidak
    if($_SERVER["REQUEST_METHOD"] === "POST"){
    //mengambil nilai y dari form yang sudah diinput
    $y = $_POST["y"];
        //memeriksa nilai dari y
        if($y > 0){
            echo "Bilangan Positif";
        }
        else if($y < 0){
            echo "Bilangan Negatif";
        }
        else{
            echo "Bilangan Bernilai 0";
        }
    }
    //penerapan nilai dinamis selesai baris sini
    ?>
</body>
</html>