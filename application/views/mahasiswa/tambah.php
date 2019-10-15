<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Form Tambah Data mahasiswa
			  </div>
			  <div class="card-body">
			  		<?php if(validation_errors()) : ?>
			  			<div class="alert alert-danger" role="alert">
			  				<?= validation_errors(); ?>
			  			</div>
			  		<?php endif; ?>
			  		<form action="" method="post">
						 <div class="form-group">
						    <label for="nama">Nama </label>
						    <input type="text" name="nama" class="form-control" id="nama" >
						  </div>
						  <div class="form-group">
						    <label for="nrp">NRP </label>
						    <input type="number" name="nrp" class="form-control" id="nrp" >
						  </div>
						  <div class="form-group">
						    <label for="email">E-mail </label>
						    <input type="email" name="email" class="form-control" id="email" >
						  </div>
						  <div class="form-group">
						    <label for="jurusan">Jurusan</label>
						    <select class="form-control" id="jurusan">
						      <option value="Teknik Informatika">Teknik Informatika</option>
						      <option value="Teknik Mesin">Teknik Mesin</option>
						      <option value="Teknik Pangan">Teknik Mesin</option>		      
						    </select>
						  </div>
						  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
			  </div>
			</div>
			
		</div>		
	</div>
</div>