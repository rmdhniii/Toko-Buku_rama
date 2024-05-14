<?php

class buku
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'toko_buku_2';
    private $koneksi;
    private $ambil_data;


public function koneksi()
{
    $this-> koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
    if ($this->koneksi->connect_error) {
        die("koneksi database gagal:". $this->koneksi->connect_error);
    }
}

public function ambil_data($query) 
{
    $this->koneksi();
    $hasil = $this->koneksi->query($query);
    $item = array();
    if ($hasil-> num_rows > 0) {
        while ($row = $hasil-> fetch_assoc()) {
            $item[] = $row;
        }
    }
    return $item;
    }
}
?>