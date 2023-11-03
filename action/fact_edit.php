<?php
    include("koneksi.php");
    if(isset($_POST['simpan'])){
        // mengambil data dari form
        $fact_id = $_POST['fact_id'];
        $nomor = $_POST['nomor'];
        $ket = $_POST['ket'];

        // buat query update
        $sql = "UPDATE facts SET nomor='$nomor', ket='$ket' WHERE fact_id=$fact_id";
        $query = mysqli_query($koneksi, $sql);
        // jika query update berhasil
        if( $query ) {
            // beralih ke halaman list-mahasiswa.php
            header('Location: facts.php');
        } else {
            // jika gagal akan menampilkan pesan
            die("Gagal menyimpan");
        }
    } else {
        die("Akses dilarang");
    } 
?>