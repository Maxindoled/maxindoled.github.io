<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    <div class="container">
        <br>
        <h5 class="text-dark">User</h5>
    
        <div class="card">
            <div class="card-body">
                <a type="button" style="font-size: small; background-color: #404040;" class="btn text-white" data-toggle="modal" 
                data-target="#example0Modal" title="Create">
                    + Tambah User
                </a>

                <!-- Modal Create Start-->
                <div class="modal fade" id="example0Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="register_act.php" method="post">
                                            <div class="form-group">
                                                <input type="text" name="nama" class="form-control mt-2" placeholder="Nickname">
                                
                                                <input type="email" name="email" class="form-control mt-2" placeholder="Email">
                                                
                                                <input type="password" name="pass" class="form-control mt-2" placeholder="password">
                                            </div>
                                            <button style="font-size: small;" type="submit" class="btn btn-dark text-white">
                                                <i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp; Create</button>
                                        </form>                                       
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
                <!-- Modal Create end -->

                <br>
                <br>
                <table style="font-size: small;" id="example" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="30" class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th width="120" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"SELECT * FROM user ORDER BY user_id DESC");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col text-center">
                                            <!-- <a style="font-size: 8px;" class="btn btn-success" href="perkataan_detail.php?user_id=<?=$d['user_id']?>" title="Detail"><i class="fa-solid fa-eye"></i></a> -->
                                            
                                            <a style="font-size: 8px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#example2Modal<?php echo $d['user_id']; ?>" title="Detail">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>

                                            <a style="font-size: 8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $d['user_id']; ?>" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a style="font-size: 8px;" onclick="return konfirmasi()" title="Delete" href="user_delete.php?user_id=<?php echo $d['user_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                        <div class="modal fade" id="example2Modal<?php echo $d['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                    <p><i class="fa-solid fa-user"></i>&nbsp; <?php echo $d['nama']; ?></p>
                                                    <hr>
                                                    <p style="margin-bottom: -5px;"><i class="fa-solid fa-envelope"></i>&nbsp; <?php echo $d['email']; ?></p>
                                                                          
                                                    <p><i class="fa-solid fa-key"></i>&nbsp; <?php echo $d['pass']; ?></p>                                            
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
                        <div class="modal fade" id="exampleModal<?php echo $d['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <!-- <div class="modal-content" style="background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);"> -->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Edit User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="user_edit.php" method="POST">
                                        <!-- <form> -->
                                            <input type="hidden" name="user_id" value="<?php echo $d['user_id'] ?>" />
                                            
                                            <label class="text-left">Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $d['nama']; ?>">

                                            <label class="mt-2">Email</label>
                                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $d['email']; ?>">

                                            <label class="mt-2">Password</label>
                                            <input type="text" name="pass" id="pass" class="form-control" value="<?php echo $d['pass']; ?>">

                                            <hr>
                                            <button type="submit" class="btn btn-success mt-4 bg-dark" name="simpan"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
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