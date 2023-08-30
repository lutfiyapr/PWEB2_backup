<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
        //penjabaran variabel
        $text = "Selamat Belajar PHP!";

        //menampilkan variabel
        echo "$text</br>";
        //menampilkan variabel UPPERCASE
        echo strtoupper ("$text</br>");
        //menampilkan variabel lowercase
        echo strtolower ("$text</br>");
        //memotong isi variabel(string) pada bagian tertentu
        echo substr($text, 8, 12);
        //kenapa finish di 11?
        //karena setelah menaruh 8 sebagai start, maka huruf (B)elajar bukan lagi huruf ke 8, tetapi menjadi huruf ke 0/reset
    ?>
</body>
</html>