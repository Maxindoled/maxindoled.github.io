<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
// mengambil data dari form
	$about_id = $_POST['about_id'];
	$subjek = $_POST['subjek'];
	$isi = $_POST['isi'];
	$penulis = $_POST['penulis'];

// buat query update
$sql = "UPDATE about SET subjek='$subjek', isi='$isi', 
penulis='$penulis' WHERE about_id=$about_id";
$query = mysqli_query($koneksi, $sql);
// jika query update berhasil
if( $query ) {
// beralih ke halaman list-mahasiswa.php
	header('Location: about.php');
} else {
// jika gagal akan menampilkan pesan
die("Gagal menyimpan");
}
} else {
die("Akses dilarang");
} ?>