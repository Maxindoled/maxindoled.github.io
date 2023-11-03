<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    
	<div class="container">
		<br>
		<h5>Tambah Nomor WA</h5>

		<div class="card">
			<div class="card-body">
			
				<div class="container">
					<form action="nowa_act.php" method="post" enctype="multipart/form-data">
                    
						<div class="form-group">
							<label>No Wa<span class="text-danger">*</span></label>
                            <p style="margin-top: -10px; font-size: x-small;" class="text-dark">Note : Harus dengan +62
                            </p>
							<input type="text" name="linkwa" class="form-control" required="required">
						</div>
						
						<div class="form-group">
							<label>Keterangan<span class="text-danger">*</span></label>
                            <textarea name="ket" class="form-control"></textarea>
						</div>

						<div class="form-group">
							<label>Nama AE<span class="text-danger">*</span></label>
                            <input name="nama" class="form-control" required="required">
						</div>
						<button type="submit" name="" class="btn btn-warning text-white"><i class="fa fa-save"></i>&nbsp;&nbsp; Simpan</button>
                        
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include ('footer.php');
?>