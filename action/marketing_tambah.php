<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    
	<div class="container">
		<br>
		<h5>Tambah Marketing</h5>

		<div class="card">
			<div class="card-body">
			
				<div class="container">
					<form action="marketing_act.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Foto<span class="text-danger">*</span></label>
							<input type="file" name="foto" class="form-control" required="required">
							<p class="text-success" style="font-size: x-small;">Ekstensi yang diperbolehkan .png | .jpg <b>Jangan Corrupt</b></p>
						</div>
						
						<div class="form-group">
							<label>Keterangan<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="ket" required="required">
						</div>
				
						<div class="form-group">
							<label>Waktu<span class="text-danger">*</span></label>
							<input type="date" class="form-control" name="waktu" required="required">
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