<div class="container">
	<div class="row mt-3">
		<div class="row md-6">
			<div class="card">
  <div class="card-header">
    Detail Mentor
  </div>
  <div class="card-body">
    <h3>nama</h3>
    <h5 class="card-title"><?php echo $mentor['nama']; ?></h5>
    
    <h6 class="card-text"><?php echo $mentor['email']; ?></h6>
    <p class="card-text"><?php echo $mentor['nohp']; ?></p>
    <p class="card-text"><?php echo $mentor['alamat']; ?></p>
    <a href="<?php echo base_url(); ?>nana" class="btn btn-primary">Kembali</a>
  </div>
</div>
		</div>
	</div>
</div>