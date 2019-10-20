<div class="cotainer">
	<div class="row">
		<div class="col-md-10">
			<div class="col-12">
  				
			<h3>List of Peoples</h3>
			
			<div class="row mb-3">
		        <div class="col-md-5">
		            <form action="<?= base_url('peoples'); ?>" method="post">
		                <div class="input-group">
		                    <input type="text" class="form-control" placeholder="Search Keyword" name="keyword" id="keyword" autocomplete="off" autofocus>
		                    <div class="input-group-append">
		                        <input class="btn btn-primary" type="submit" name="submit">
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
			    <br>
			    <h5>Result : <?= $total_rows; ?></h5>
				<table class="table">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">NO</th>
				      <th scope="col">Name</th>
				      <th scope="col">Address</th>
				      <th scope="col">E-mail</th>
				      <th scope="col" ><center>Action</center></th>
				      
				    </tr>
				  </thead>
				  <tbody>

				  	<?php foreach ($peoples as $people) : ?>
				    <tr>
				    	
				      <th scope="row"><?php  echo ++$start;?></th>
				      <td><?= $people['name']; ?></td>
				      <td><?= $people['address']; ?></td>
				      <td><?= $people['email']; ?></td>
				      <td>
				      	<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $people['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')">Hapus</a>
				      	<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $people['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>
				      	<a href="<?= base_url(); ?>mahasiswa/detail/<?= $people['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
				      </td>
				    </tr>
					<?php endforeach ?>
				 </tbody>
				</table> 
				<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>