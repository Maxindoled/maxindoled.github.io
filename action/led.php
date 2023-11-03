<?php
include ('header.php');
include ('sidebar.php');
?>


<section class="content-wrapper">
    <div class="container">
        <br>
        <h5 class="text-dark">LED</h5>
        
        <div class="card">
            <div class="card-body">
                <!-- <a style="font-size: small; background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);" href="led_tambah.php" class="btn text-white">+ Tambah Data</a> -->
                <a style="font-size: small; background-color: #404040;" href="led_tambah.php" class="btn text-white">+ Tambah Data</a>
                <br>		
                <br>		
                <table style="font-size: small;" id="example" class="display table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="30" class="text-center">No</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Waktu</th>
                            <th width="120" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"SELECT * FROM led ORDER BY led_id DESC");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td class="text-center"><img src="gambar/<?php echo $d['foto'] ?>" width="40" height="40"></td>
                                <td><?php echo $d['ket']; ?></td>
                                <td><?php echo $d['waktu']; ?></td>
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <a style="font-size: 8px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $d['led_id']; ?>" title="Detail">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>

                                            <a style="font-size: 8px;" onclick="return konfirmasi()" href="led_delete.php?led_id=<?php echo $d['led_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                        <!-- <div class="col">
                                            <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div> -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                        <!-- Modal Detail Start-->
                        <div class="modal fade" id="exampleModal<?php echo $d['led_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail LED</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="img-fluid rounded" src="gambar/<?php echo $d['foto'] ?>" width="140" height="140">
                                                
                                                <p><?php echo $d['ket']; ?></p>
                                                <hr>
                                                <p> <?php echo $d['waktu'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                                                            
                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-dark text-white btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                                        <!-- <button type="button" class="btn btn-warning text-white btn-sm"><i class="far fa-save"></i> Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Detail end -->
                        
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