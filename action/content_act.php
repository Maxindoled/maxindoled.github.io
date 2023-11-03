<?php 
include 'koneksi.php';

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$keterangan = $_POST['keterangan'];
$waktu = $_POST['waktu'];

if(!in_array($ext,$ekstensi) ) {
	header("location:content.php");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO content VALUES(NULL,'$xx','$keterangan','$waktu')");
		header("location:content.php");
	}else{
		header("location:dashboard.php");
	}
}