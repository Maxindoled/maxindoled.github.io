<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    
	<div class="container">
		<br>
		<h5>Tambah Facts</h5>

		<div class="card">
			<div class="card-body">
			
				<div class="container">
					<form action="fact_act.php" method="post" enctype="multipart/form-data">
                    
						<div class="form-group">
							<label>Angka<span class="text-danger">*</span></label>
							<input type="text" name="nomor" class="form-control" required="required">
						</div>
						
						<div class="form-group">
							<label>Keterangan<span class="text-danger">*</span></label>
                            <textarea name="ket" class="form-control"></textarea>
							<!-- <input type="text" class="form-control" name="isi" required="required"> -->
						</div>

						<button type="submit" name="" class="btn btn-dark text-white"><i class="fa fa-save"></i>&nbsp;&nbsp; Simpan</button>
                        
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include ('footer.php');
?>