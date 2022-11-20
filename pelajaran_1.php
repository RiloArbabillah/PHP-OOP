<?php
echo "<a href='/'>Halaman Index</a> <br> <br>";
// OOP merupakan metode pemrograman yang lebih berorientasi pada objek
// PHP OOP Part 1 Pengertian Class, Object, Property dan Method

// class manusia
class manusia{

    // property
    var $nama;
    var $warna;
    
    // method method pada class manusia
    function __construct()
    {
        echo 'menjalankan method construct <br>';
    }

    function set_nama($nama = 'manusia')
    {
        $this->nama = $nama;
    }

    function set_warna($warna = 'sawo matang')
    {
        $this->warna = $warna;
    }

    function tampilkan_nama(){
        return "Nama saya ".$this->nama." <br/>";
    }
    
    function warna_kulit(){
        return "Warna kulit saya ".$this->warna." <br/>";
    }

    function __destruct()
    {
        echo 'menjalankan method destruct <br>';
    }
    
}

// instansiasi = Proses membuat objek dari class
// instansiasi class manusia
$manusia = new manusia();

// memanggil method set_nama dari class manusia
$manusia->set_nama('Roni');

// memanggil method set_warna dari class manusia
$manusia->set_warna('Putih');
 
// memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
 
// memanggil method warna_kulit dari class manusia
echo $manusia->warna_kulit();

echo "<br> <br> <br>". $manusia->tampilkan_nama();