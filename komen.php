<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
</head>
<body>

  <?php
    //Include file koneksi ke database
    include "action/koneksi.php";

    //menerima nilai dari kiriman form input-barang 
    $nama=$_POST["nama"];
    $mail=$_POST["mail"];
    $subjek=$_POST["subjek"];
    $pesan=$_POST["pesan"];

    //Query input menginput data kedalam tabel barang
      $sql="INSERT INTO komentar (nama,mail,subjek,pesan) values
        ('$nama','$mail','$subjek','$pesan')";

    //Mengeksekusi/menjalankan query diatas	
      $hasil=mysqli_query($koneksi,$sql);

    //Kondisi apakah berhasil atau tidak
      if ($hasil) {
      echo "<script>
      Swal.fire(
        'Terimakasih sudah memberi pesan',
        'Sukses Selalu',
        'success'
      )
        window.location='index.php';
        </script>";
      }
    else {
      echo "<script>
      Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
      });
        window.location='index.php';
        </script>";

    }  

  ?>
  
</body>
</html>