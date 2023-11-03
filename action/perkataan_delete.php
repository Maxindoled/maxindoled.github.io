<?php

    $data = $_GET['kata_id'];

    //gunakan fungsi di bawah ini agar session bisa dibuat
    session_start();
    
    //koneksi ke database latihan
    include 'koneksi.php';
    
    //hapus data dari tabel kontak
    $delete = mysqli_query($koneksi, "DELETE FROM perkataan WHERE kata_id=".$data);
    
    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    
    //redirect ke halaman index.php
    header('Location: perkataan.php');
    
?>