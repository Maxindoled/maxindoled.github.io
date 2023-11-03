<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
// mengambil data dari form
	$kata_id = $_POST['kata_id'];
	$subjek = $_POST['subjek'];
	$isi = $_POST['isi'];
	$waktu = $_POST['waktu'];

// buat query update
$sql = "UPDATE perkataan SET subjek='$subjek', isi='$isi', 
waktu='$waktu' WHERE kata_id=$kata_id";
$query = mysqli_query($koneksi, $sql);
// jika query update berhasil
if( $query ) {
// beralih ke halaman list-mahasiswa.php
	header('Location: perkataan.php');
} else {
// jika gagal akan menampilkan pesan
die("Gagal menyimpan");
}
} else {
die("Akses dilarang");
} ?>