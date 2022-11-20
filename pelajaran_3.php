<?php
// PHP OOP Part 3 : Pewarisan Sifat (Inheritance) Pada OOP PHP

echo "<a href='/'>Halaman Index</a> <br> <br>";

// class parent manusia
class manusia{
 
	// property class manusia
	public $nama_saya;
 
 	// method pada class manusia
	function berinama($saya) {
		$this->nama_saya = $saya;
	}
	
}
 
// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{
 
	// property class teman
	public $nama_teman;
 
 	// method pada class teman
	function berinamateman($teman){
		$this->nama_teman = $teman;
	}
}
 
// instansiasi class teman
$teman = new teman;
 
// method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia
$teman->berinama(" Roni ");
$teman->berinamateman(" Diki ");
 
// menampilkan isi property
echo "Nama Saya :" . $teman->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $teman->nama_teman;
 
?>