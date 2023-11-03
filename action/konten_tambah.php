<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    
	<div class="container">
		<br>
		<h5>Tambah Content</h5>

		<div class="card">
			<div class="card-body">
			
				<div class="container">
					<form action="konten_act.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Foto<span class="text-danger">*</span></label>
							<p class="text-warning" style="font-size: x-small;">Untuk ukuran gambar kalau bisa <b>4x4</b></p>
							<input style="margin-top: -10px;" type="file" name="foto" class="form-control" required="required">
							<p class="text-success" style="font-size: x-small;">Ekstensi yang diperbolehkan .png | .jpg <b>Asal Jangan Corrupt</b></p>
						</div>
						
						<div class="form-group">
							<label>Keterangan<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="keterangan" required="required">
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