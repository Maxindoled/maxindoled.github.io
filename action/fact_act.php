<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$nomor=$_POST["nomor"];
$ket=$_POST["ket"];

//Query input menginput data kedalam tabel barang
  $sql="INSERT INTO facts (nomor,ket) values
		('$nomor','$ket')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondket apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>window.alert('Berhasil Simpan Data!!!!')
    window.location='facts.php';
    </script>";
  }
else {
	echo "<script>window.alert('Gagal Simpan Data!!!!')
    window.location='facts.php';
    </script>";

}
?>