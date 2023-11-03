<?php

    $data = $_GET['team_id'];

    //gunakan fungsi di bawah ini agar session bisa dibuat
    session_start();
    
    //koneksi ke database latihan
    include 'koneksi.php';
    
    //hapus data dari tabel kontak
    $delete = mysqli_query($koneksi, "DELETE FROM team WHERE team_id=".$data);
    
    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    
    //redirect ke halaman index.php
    header('Location: team.php');
    
?>