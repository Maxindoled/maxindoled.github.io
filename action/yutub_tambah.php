<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    
	<div class="container">
		<br>
		<h5>Tambah Link Youtube</h5>

		<div class="card">
			<div class="card-body">
			
				<div class="container">
					<form action="yutub_act.php" method="post" enctype="multipart/form-data">
                    
						<div class="form-group">
							<label>Link Youtube<span class="text-danger">*</span></label>
                            <p style="margin-top: -10px; font-size: x-small;" class="text-warning"><i class="fa-solid fa-note-sticky text-dark"></i> 
                            &nbsp;Pilih Video Youtube, lalu klik Bagikan, lalu klik Sematkan, 
                            Copy Source Code nya dan lalu Paste kan di Form di bawah ini.
                            </p>
							<input type="text" name="linkyt" class="form-control" required="required">
						</div>
						
						<div class="form-group">
							<label>Keterangan<span class="text-danger">*</span></label>
                            <input name="ket" class="form-control"></i>
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