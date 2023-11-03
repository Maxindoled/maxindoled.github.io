<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$linkwa=$_POST["linkwa"];
$ket=$_POST["ket"];
$nama=$_POST["nama"];

//Query input menginput data kedalam tabel barang
  $sql="INSERT INTO nowa (linkwa, ket, nama) values
		('$linkwa','$ket','$nama')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondket apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>window.alert('Berhasil Simpan Data!!!!')
    window.location='nowa.php';
    </script>";
  }
else {
	echo "<script>window.alert('Gagal Simpan Data!!!!')
    window.location='nowa.php';
    </script>";

}
?>