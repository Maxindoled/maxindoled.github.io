<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    <div class="container">
        <br>
        <h5 class="text-dark">Type LED</h5>
    
        <div class="card">
            <div class="card-body">
            <a style="font-size: small; background-color: #404040;" href="perkataan_tambah.php" class="btn text-white">+ Tambah Data</a>
                <br>
                <br>
                <table style="font-size: small;" id="example" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="30" class="text-center">No</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Type LED</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Waktu</th>
                            <th width="120" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"SELECT * FROM perkataan ORDER BY kata_id DESC");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td class="text-center"><img src="perkataan/<?php echo $d['foto'] ?>" width="40" height="40"></td>
                                <td><?php echo $d['subjek']; ?></td>
                                <td><?php echo $d['isi']; ?></td>
                                <td><?php echo $d['waktu']; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col text-center">
                                            <!-- <a style="font-size: 8px;" class="btn btn-success" href="perkataan_detail.php?kata_id=<?=$d['kata_id']?>" title="Detail"><i class="fa-solid fa-eye"></i></a> -->
                                            
                                            <a style="font-size: 8px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#example2Modal<?php echo $d['kata_id']; ?>" title="Detail">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>

                                            <a style="font-size: 8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $d['kata_id']; ?>" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a style="font-size: 8px;" onclick="return konfirmasi()" title="Delete" href="perkataan_delete.php?kata_id=<?php echo $d['kata_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>

                                        <script type="text/javascript" language="JavaScript">
                                            function konfirmasi()
                                            {
                                            tanya = confirm("Anda Yakin Akan Menghapus Data Ini.?");
                                            if (tanya == true) return true;
                                            else return false;
                                            }
                                        </script>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                        <!-- Modal Detail Start-->
                        <div class="modal fade" id="example2Modal<?php echo $d['kata_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Type LED</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <h1><?php echo $d['subjek']; ?></h1>
                                                <hr>
                                                <img src="perkataan/<?php echo $d['foto'] ?>" width="40" height="40">
                                                <p><?php echo $d['isi']; ?></p>
                                                <hr>
                                                <p style="font-size: x-small; margin-bottom: -3px;" class="text-success"><i>Ditambahkan Pada Tanggal</i></p>
                                                <small><i class="fa-solid fa-calendar-days"></i> <?php echo $d['waktu']; ?></small>
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

                        <!-- Modal Edit Start-->
                        <div class="modal fade" id="exampleModal<?php echo $d['kata_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Type LED</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="perkataan_edit.php" method="POST">
                                        <!-- <form> -->
                                            <input type="hidden" name="kata_id" value="<?php echo $d['kata_id'] ?>" />
                                            
                                            <label class="text-left">Subject</label>
                                            <input type="text" name="subjek" id="subjek" class="form-control" value="<?php echo $d['subjek']; ?>">

                                            <label class="mt-2">Isi Text</label>
                                            <input type="text" name="isi" id="isi" class="form-control" value="<?php echo $d['isi']; ?>">

                                            <label class="mt-2">Waktu</label>
                                            <input type="date" name="waktu" id="waktu" class="form-control"value="<?php echo $d['waktu']; ?>">
                                            <input type="submit" class="btn btn-dark mt-2" value="Simpan" name="simpan">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Edit end -->
                        <?php
                    }
        
                    ?>
                </table>

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