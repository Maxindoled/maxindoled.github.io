<?php 
include 'koneksi.php';

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ket = $_POST['ket'];
$waktu = $_POST['waktu'];

if(!in_array($ext,$ekstensi) ) {
	header("location:marketing.php");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO marketing VALUES(NULL,'$xx','$ket','$waktu')");
		header("location:marketing.php");
	}else{
		header("location:dashboard.php");
	}
}