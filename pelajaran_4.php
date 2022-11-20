<?php
// PHP OOP Part 4 : Membuat CRUD Dengan OOP PHP Dan MySQL
 
echo "<a href='/'>Halaman Index</a> <br> <br>";

class database{
 
	var $host = "localhost"; // host database
	var $username = "root"; // username database
	var $password = ""; // password database
	var $db = "oop"; // nama database
	var $mysql; // objek database
 
	function __construct(){
		$this->mysql = mysqli_connect($this->host, $this->username, $this->password);
		mysqli_select_db($this->mysql, $this->db);
	}

	function ambil_semua_data(){
		$data = mysqli_query($this->mysql, "select * from user");
		$hasil = [];
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
} 
 

$db = new database();

// list alamat 
$list_alamat = ['"Samarinda"', '"Balikpapan"', '"Bontang"', '"Penajam"', '"Tenggarong"', '"Bengalon"'];

// mengambil 1 alamat secara random
$alamat_1 = $list_alamat[random_int(0, count($list_alamat)-1)];
// menentukan usia secara random dengan nilai terendah 10 dan nilai tertinggi 100
$usia_1 = random_int(10, 100);

// mengambil 1 alamat secara random
$alamat_2 = $list_alamat[random_int(0, count($list_alamat)-1)];

// menentukan usia secara random dengan nilai terendah 10 dan nilai tertinggi 100
$usia_2 = random_int(10, 100);

// query inset data ke dalam database dengan tabel user
$query_insert = "
	INSERT INTO `user` (`nama`, `alamat`, `usia`) VALUES
	(
		'Roni', 
		". $alamat_1 .", 
		". $usia_1 ."
	),
	(
		'Budi', 
		". $alamat_2 .", 
		". $usia_2 ."
	);
";

// query untuk menghapus semua data dari tabel user
$query_delete = "
	DELETE FROM user
";

// fungsi untuk menjalankan query
mysqli_query($db->mysql, $query_delete);
mysqli_query($db->mysql, $query_insert);

?>

<style>
	.px-1 {
		padding-left: 0.5rem; 
		padding-right: 0.5rem;
	}

	.py-1 {
		padding-top: 0.5rem;
		padding-bottom: 0.5rem;
	}
</style>

<table border="1">
	<tr>
		<th class="px-1 py-1">No</th>
		<th class="px-1 py-1">Nama</th>
		<th class="px-1 py-1">Alamat</th>
		<th class="px-1 py-1">Usia</th>
		<!-- <th class="px-1 py-1">Opsi</th> -->
	</tr>
<?php

// mengecek apakah data yg diambil ada
if (count($db->ambil_semua_data()) > 0) {
	
	// dijalankan jika data yg diambil ada
	foreach($db->ambil_semua_data() as $no => $x){
?>
		<tr>
			<td align="center" class="px-1 py-1"><?php echo $no+1; ?></td>
			<td align="center" class="px-1 py-1"><?php echo $x['nama']; ?></td>
			<td align="center" class="px-1 py-1"><?php echo $x['alamat']; ?></td>
			<td align="center" class="px-1 py-1"><?php echo $x['usia']; ?></td>
		</tr>
<?php 
	}
} else {
	// dijalankan jika tidak ada data
?>
	<tr>
		<td colspan="12" align="center" class="px-1 py-1">Tidak ada data</td>
	</tr>
<?php 
}
?>