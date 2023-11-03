<?php
include ('header.php');
include ('sidebar.php');
?>


<section class="content-wrapper">
    <div class="container">
        <br>
        <h5 class="text-dark">Komentar / Pesan</h5>
        
        <div class="card">
            <div class="card-body">
                <!-- <a style="font-size: small; background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);" href="content_tambah.php" class="btn text-white">+ Tambah Data</a> -->
                <!-- <a style="font-size: small; background-color: #404040;" href="content_tambah.php" class="btn text-white">+ Tambah Data</a> -->
                <br>		
                <br>		
                <table style="font-size: small;" id="example" class="display table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="30" class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Subjek</th>
                            <th class="text-center">Isi Komentar</th>
                            <th width="120" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"SELECT * FROM komentar ORDER BY komen_id DESC");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['mail']; ?></td>
                                <td><?php echo $d['subjek']; ?></td>
                                <td><?php echo $d['pesan']; ?></td>
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <button style="font-size: 8px;" title="Detail" type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $d['komen_id'];?>">
                                                <i class="fa fa-eye"></i>
                                            </button>

                                            <a style="font-size: 8px;" title="Delete" onclick="return konfirmasi()" href="komentar_delete.php?komen_id=<?php echo $d['komen_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>

                                    </div>
                                </td>
    
                                <!-- Modal Start-->
                                <div class="modal fade" id="exampleModal<?php echo $d['komen_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                                        <div class="modal-content">
                                            <div class="modal-header text-white" style="background-color: #404040;">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail Komentar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    
                                                    <p><i class="fa-solid fa-user"></i> <?php echo $d['nama'];?></p>
                                                    <p style="margin-top: -15px;"><i class="fa-solid fa-envelope"></i> <?php echo $d['mail'];?></p>
                                                    
                                                    <hr>
                                                    
                                                    <h5><?php echo $d['subjek'];?></h5>
                                                    
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p><?php echo $d['pesan'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" style="background-color: #404040;" class="btn text-white btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                                                <!-- <button type="button" class="btn btn-warning text-white btn-sm"><i class="far fa-save"></i> Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->

                            </tr>
                        </tbody>
                        <?php
                    }
        
                    ?>
                </table>
                <script type="text/javascript" language="JavaScript">
                    function konfirmasi()
                    {
                    tanya = confirm("Anda Yakin Akan Menghapus Data Ini.?");
                    if (tanya == true) return true;
                    else return false;
                    }
                </script>
            </div>
        </div>
    </div>

    <script>
		let table = new DataTable('#example');
		
		// table.on('click', 'tbody tr', function () {
		// 	let data = table.row(this).data();
		
		// 	alert('You clicked on ' + data[0] + "'s row");
		// });
	</script>


</section>

<?php
include ('footer.php');
?>