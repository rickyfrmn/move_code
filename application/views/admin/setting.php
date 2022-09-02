<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
		  <div class="card-header">
		    Ubah data karyawan
		  </div>
		  <div class="card-body">

		  	<!-- peringatannya nampilin jadi satu keluarnya -->
		  	<!-- <?php if(validation_errors()): ?>
		  	<div class="alert alert-danger" role="alert">
			  <?php echo validation_errors(); ?>
			</div>
		  	<?php endif; ?> -->

		    <form action="" method="post">
		    	<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
						<div class="form-group">
						    <label for="name">Nama</label>
						    <input type="text" name="name" class="form-control" id="name" value="<?php echo $user['name']; ?>">
						    <small class="form-text text-danger"><?php echo form_error('name'); ?></small>
				  		</div>
				  		
				  		
				  		
						  <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah data</button>
					</form>
		  </div>
		</div>

			
		</div>
	</div>


</div>