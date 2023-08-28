<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan For bilangan Genap dari 1 sampai 10</br>";
    for($w = 2; $w<=10; $w+=2){
        echo "$w </br>";
    }

    echo "</br>Perulangan While bilangan Ganjil dari 1 sampai 10</br>";
    $x = 1;
    while ($x<=10) {
        echo "$x</br>";
        $x+=2;
    }

    echo "</br>Perulangan Do while bilangan Prima dari 1 sampai 20</br>";
    $y=1;//variabel y ditempatkan diluar Do agar nilai y tidak kembali kenilai semula atau 2
    do{
        $c=0;//membuat variabel pemancing
        $z=1;//variabel z ditempatkan diluar Do agar nilai z tidak kembali kenilai semula atau 1
        do{
            if($y%$z==0){//memberikan branching jika nilai y dimodulus nilai z bernilai 0
                $c++;
            }
            $z++;
        }while($z<=$y);//lakukan kembali perulangan jika nilai z kurang dari sama dengan y
        if($c == 2){
            echo "$y</br>";
        }
        $y++;
    }while($y<=20);//lakukan kembali perulangan jika nilai y kurang dari sama dengan 20
    ?>
</body>
</html>