<?php
// PHP OOP Part 2 : Pengertian Enkapsulasi (Public, Private, Protected)

// Public :     bisa di akses dari luar atau dalam class.

// Private :    private adalah hak akses yang melarang method atau property di akses dari luar class. 
//              jadi private hanya bisa di akses dari dalam class itu sendiri.

// Protected :  properti atau metode dapat diakses di dalam kelas dan oleh kelas yang diturunkan dari kelas itu.

echo "<a href='/'>Halaman Index</a> <br> <br>";

// class manusia
class manusia{

    // property
    var $nama;
    var $warna;
    
    // method manusia
    function __construct()
    {
        echo '<br> menjalankan method construct <br>';
    }

    function set_nama($nama = 'manusia')
    {
        $this->nama = $nama;
        echo $this->tampilkan_nama(); // bisa dijalankan karena berada di dalam class manusia
    }

    function set_warna($warna = 'sawo matang')
    {
        $this->warna = $warna;
        echo $this->warna_kulit(); // bisa dijalankan karena berada di dalam class manusia
    }

    protected function tampilkan_nama(){
        return "Nama saya ".$this->nama." <br/>";
    }
    
    private function warna_kulit(){
        return "Warna kulit saya ".$this->warna." <br/>";
    }

    function __destruct()
    {
        echo '<br> menjalankan method destruct <br>';
    }
    
}

// instansiasi = Proses membuat objek dari class
// instansiasi class manusia
$manusia = new manusia();

// memanggil method set_nama dari class manusia
$manusia->set_nama('Roni');
echo "<br> <br>";

// memanggil method set_warna dari class manusia
$manusia->set_warna('Putih');
echo "<br> <br>";

echo $manusia->nama; // bisa dijalankan karena public
echo "<br> <br>";

echo $manusia->warna; // bisa dijalankan karena public
echo "<br> <br>";
 
// memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama(); // error karena protected
 
// memanggil method warna_kulit dari class manusia
echo $manusia->warna_kulit(); // error karena private