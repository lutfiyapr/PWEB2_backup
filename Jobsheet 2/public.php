<?php
//membuatu class mahasiswa
class mahasiswa{
    //property public
    public $nama;
    private $nim="220102060";

    //public method
    public function tampilkan_nama(){
        //nilai ekembalian
        return "Nama saya adalah Lutfiya Ainurrahman (public)</br>";
    }

    //membuat protected
    protected $prodi = "</br>Prodi saya D3 Teknik Informatika(protected)";

    //membuat private method
    function tampilkan_nim(){
        return "NIM saya " . $this->nim . "(private)";
    }
}
class prodi extends mahasiswa{
    public function tampilkan_prodi(){
        return $this->prodi;
    }
}

//instansiasi objek mahasiswa kedalam variabel mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();
$prodi = new prodi();

//memanggil method tampilkan nama
echo $mahasiswa -> tampilkan_nama();
echo $nim -> tampilkan_nim();
echo $prodi -> tampilkan_prodi();