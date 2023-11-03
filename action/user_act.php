<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$nama=$_POST["nama"];
$email=$_POST["email"];
$pass=$_POST["pass"];

//Query input menginput data kedalam tabel barang
  $sql="INSERT INTO user (nama, email, pass) values
		('$nama', '$email', '$pass')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondemail apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>window.alert('Berhasil Membuat Akun')
    window.location='user.php';
    </script>";
  }
else {
	echo "<script>window.alert('Gagal Membuat Akun')
    window.location='user.php';
    </script>";

}
?>