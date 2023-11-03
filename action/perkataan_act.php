<?php 
include 'koneksi.php';

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$subjek = $_POST['subjek'];
$isi = $_POST['isi'];
$waktu = $_POST['waktu'];

if(!in_array($ext,$ekstensi) ) {
	header("location:perkataan.php");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'perkataan/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO perkataan VALUES(NULL,'$xx','$subjek','$isi','$waktu')");
		header("location:perkataan.php");
	}else{
		header("location:dashboard.php");
	}
}