<?php

    $data = $_GET['acara_id'];

    //gunakan fungsi di bawah ini agar session bisa dibuat
    session_start();
    
    //koneksi ke database latihan
    include 'koneksi.php';
    
    //hapus data dari tabel kontak
    $delete = mysqli_query($koneksi, "DELETE FROM acara WHERE acara_id=".$data);
    
    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    
    //redirect ke halaman index.php
    header('Location: acara.php');
    
?>