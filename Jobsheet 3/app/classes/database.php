<?php

class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct(){
        $this -> koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa(){
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_mhs($npm, $nama, $alamat){
        mysqli_query($this -> koneksi, "insert into mahasiswa (npm,nama,alamat) values('$npm', '$nama', '$alamat')");
    }

    function edit($npm){
        $data = mysqli_query($this -> koneksi, "select * from mahasiswa where npm='$npm'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function update($npm, $nama, $alamat){
        mysqli_query($this -> koneksi, "update mahasiswa set npm='$npm', nama='$nama', alamat='$alamat' where npm='$npm'");
    }

    function hapus($npm){
        mysqli_query($this -> koneksi, "delete from mahasiswa where npm='$npm'");
    }
    
    
    //data dosen
    function tampil_dosen(){
        $data = mysqli_query($this->koneksi, "select * from dosen");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_dosen($nidn, $nama, $alamat){
        mysqli_query($this -> koneksi, "insert into dosen (nidn,nama,alamat) values('$nidn', '$nama', '$alamat')");
    }

    function edit_dosen($nidn){
        $data = mysqli_query($this -> koneksi, "select * from dosen where nidn='$nidn'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function update_dosen($nidn, $nama, $alamat){
        mysqli_query($this -> koneksi, "update dosen set nidn='$nidn', nama='$nama', alamat='$alamat' where nidn='$nidn'");
    }

    function hapus_dosen($nidn){
        mysqli_query($this -> koneksi, "delete from dosen where nidn='$nidn'");
    }
}