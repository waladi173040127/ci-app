
<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
	    <div class="row mt-3">
	        <div class="col-md-6">
	            <div class="alert alert-success alert-dismissible fade show" role="alert">
	                Data mahasiswa <b>berhasil</b> <?= $this->session->flashdata('flash'); ?>.
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	        </div>
	    </div> 
    <?php endif; ?>
  		<div class="row">
  			<div class="col-md-6">
			<a href="<?php base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
  			<div class="col-10">
  				<h3>Daftar Mahasiswa</h3>
				<table class="table">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nama</th>
				      <th scope="col">NRP</th>
				      <th scope="col">E-mail</th>
				      <th scope="col">Jurusan</th>
				      <th scope="col" ><center>Menu</center></th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i=0; ?>
				  	<?php foreach ($mahasiswa as $mhs) : ?>
				    <tr>
				    	
				      <th scope="row"><?php  echo $i=$i+1;?></th>
				      <td><?= $mhs['nama']; ?></td>
				      <td><?= $mhs['nrp']; ?></td>
				      <td><?= $mhs['email']; ?></td>
				      <td><?= $mhs['jurusan']; ?></td>
				      <td>
				      	<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')">Hapus</a>
				      	<a href="" class="badge badge-success float-right ml-1">Ubah</a>
				      	<a href="" class="badge badge-primary float-right ml-1">Detail</a>
				      </td>
				    </tr>
					<?php endforeach ?>
				 </tbody>
				</table> 
  			</div>
  		</div>
  	</div>
  	