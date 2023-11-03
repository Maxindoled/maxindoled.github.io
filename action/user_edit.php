<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
// mengambil data dari form
	$user_id = $_POST['user_id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

// buat query update
$sql = "UPDATE user SET nama='$nama', email='$email', 
pass='$pass' WHERE user_id=$user_id";
$query = mysqli_query($koneksi, $sql);
// jika query update berhasil
if( $query ) {
// beralih ke halaman list-mahasiswa.php
	header('Location: user.php');
} else {
// jika gagal akan menampilkan pesan
die("Gagal menyimpan");
}
} else {
die("Akses dilarang");
} ?>