<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$subjek=$_POST["subjek"];
$isi=$_POST["isi"];
$penulis=$_POST["penulis"];

//Query input menginput data kedalam tabel barang
  $sql="INSERT INTO about (subjek,isi,penulis) values
		('$subjek','$isi','$penulis')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>window.alert('Berhasil Simpan Data!!!!')
    window.location='about.php';
    </script>";
  }
else {
	echo "<script>window.alert('Gagal Simpan Data!!!!')
    window.location='about.php';
    </script>";

}
?>