<?php
    include("koneksi.php");
    if(isset($_POST['simpanr'])){
        // mengambil data dari form
        $nowa_id = $_POST['nowa_id'];
        $linkwa = $_POST['linkwa'];
        $ket = $_POST['ket'];
        $nama = $_POST['nama'];

        // buat query update
        $sql = "UPDATE nowa SET linkwa='$linkwa', ket='$ket', nama='$nama' WHERE nowa_id=$nowa_id";
        $query = mysqli_query($koneksi, $sql);
        // jika query update berhasil
        if( $query ) {
            // beralih ke halaman list-mahasiswa.php
            header('Location: nowa.php');
        } else {
            // jika gagal akan menampilkan pesan
            die("Gagal menyimpan");
        }
    } else {
        die("Akses dilarang");
    } 
?>