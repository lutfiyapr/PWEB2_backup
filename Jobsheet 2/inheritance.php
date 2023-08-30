<?php
//pemaparan class manusia
class manusia{
    public $nama_saya;
    private $alamat_saya=" Tangerang";
    function panggil_nama($saya){
        $this -> nama_saya = $saya . " (public)";
    }
    protected function panggil_prodi($saya){
        $this -> prodi_saya = $saya;
    }
    private function panggil_nim($saya){
        $this -> nim_saya = $saya;
    }
    function panggil_alamat(){
        return "Alamat saya : " . $this -> alamat_saya . " (private di class)";
    }
}

//class turunan atau sub class dari manusia
class mahasiswa extends manusia{
    public $nama_mahasiswa;
    function panggil_mahasiswa($mahasiswa){
        $this -> nama_mahasiswa = $mahasiswa . " (public extends)";
    }
    function panggil_prodi($mahasiswa){
        $this -> prodi_mahasiswa = $mahasiswa . " (protected extends)";
    }
    function panggil_nim($mahasiswa){
        $this -> nim_mahasiswa = $mahasiswa . " (private extends)";
    }
}

//instansiasi class mahasiswa
$informatika = new mahasiswa();
$alamat_saya = new mahasiswa();
$informatika -> panggil_nama(" Lutfiya");
$informatika -> panggil_mahasiswa(" Ainurrahman Prasetyo");
$informatika -> panggil_prodi(" D3 Teknik Informatika");
$informatika -> panggil_nim(" 220102060");

//tampilkan isi dari property
echo "Nama Depan Saya : " . $informatika -> nama_saya . "</br>";
echo "Nama Belakang Saya : " . $informatika -> nama_mahasiswa . "</br>";
echo "Prodi saya : " . $informatika -> prodi_mahasiswa . "</br>";
echo "Prodi saya : " . $informatika -> nim_mahasiswa . "</br>";
echo $alamat_saya -> panggil_alamat();