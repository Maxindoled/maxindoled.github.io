<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    <div class="container">
        <br>
        <h5 class="text-dark">Nomor Wa Marketing</h5>
    
        <div class="card">
            <div class="card-body">
            <a style="font-size: small; background-color: #404040;" href="nowa_tambah.php" class="btn text-white">+ Tambah Data</a>
                <br>
                <br>
                <table style="font-size: small;" id="example" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="30" class="text-center">No</th>
                            <th class="text-center">No WA</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Nama AE</th>
                            <th width="120" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"SELECT * FROM nowa ORDER BY nowa_id DESC");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td><?php echo $d['linkwa']; ?></td>
                                <td><?php echo $d['ket']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col text-center">
                                            <!-- <a style="font-size: 8px;" class="btn btn-success" href="perkataan_detail.php?nowa_id=<?=$d['nowa_id']?>" title="Detail"><i class="fa-solid fa-eye"></i></a> -->
                                            
                                            <a style="font-size: 8px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#example2Modal<?php echo $d['nowa_id']; ?>" title="Detail">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>

                                            <a style="font-size: 8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $d['nowa_id']; ?>" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a style="font-size: 8px;" onclick="return konfirmasi()" title="Delete" href="nowa_delete.php?nowa_id=<?php echo $d['nowa_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                        <div class="modal fade" id="example2Modal<?php echo $d['nowa_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Nomor Wa Marketing</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                    <h2><?php echo $d['ket']; ?></h2>
                                                    <hr>
                                                    <h6><?php echo $d['nama']; ?></h6>
                                                    <h5><?php echo $d['linkwa']; ?></h5>
                                                    
                                            </div>
                                        </div>
                                        
                                    </div>
                                                        
                                    <div class="modal-footer">

                                        <button type="button" name="simpanr" id="simpanr" class="btn btn-dark text-white btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                                        <!-- <button type="button" class="btn btn-warning text-white btn-sm"><i class="far fa-save"></i> Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Detail end -->

                        <!-- Modal Edit Start-->
                        <div class="modal fade" id="exampleModal<?php echo $d['nowa_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Edit Nomor Wa Marketing</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="nowa_edit.php" method="POST">
                                        <!-- <form> -->
                                            <input type="hidden" name="nowa_id" value="<?php echo $d['nowa_id'] ?>" />
                                            
                                            <label class="text-left">No Wa</label>
                                            <input type="text" name="linkwa" id="linkwa" class="form-control" value="<?php echo $d['linkwa']; ?>">

                                            <label class="mt-2">Keterangan</label>
                                            <input type="text" name="ket" id="ket" class="form-control" value="<?php echo $d['ket']; ?>">

                                            <label class="mt-2">Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $d['nama']; ?>">

                                            <hr>
                                            <button type="submit" class="btn btn-success mt-4 bg-dark" name="simpanr"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
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