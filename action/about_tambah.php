<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    
	<div class="container">
		<br>
		<h5>Tambah About</h5>

		<div class="card">
			<div class="card-body">
			
				<div class="container">
					<form action="about_act.php" method="post" enctype="multipart/form-data">
                    
						<div class="form-group">
							<label>Subject<span class="text-danger">*</span></label>
							<input type="text" name="subjek" class="form-control" required="required">
						</div>
						
						<div class="form-group">
							<label>Isi Text<span class="text-danger">*</span></label>
                            <textarea name="isi" class="form-control"></textarea>
							<!-- <input type="text" class="form-control" name="isi" required="required"> -->
						</div>
				
						<div class="form-group">
							<label>Icon Font-Awesome<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="penulis" required="required">
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