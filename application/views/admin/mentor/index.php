        <br><br>
        <br><br>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1> -->

          <!-- <?php var_dump($mahasiswa); ?> -->


	

	<div class="container">
	<h3 class="mt-3">List of People</h3>

	<div class="row">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Search.." name="keyword" autocomplete="off" autofocus>

				  <div class="input-group-append">
				    <input class="btn btn-primary" type="submit" name="submit" >
				  </div>
				</div>
			</form>
		</div>
	</div>
<br><br>
<div class="row">
			<div class="col-md-10">	
			<h5>result <?php echo $total_rows; ?></h5>		
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>nama</th>
						<th>email</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					<?php if (empty($mentor)) : ?>
						<tr>
							<td colspan="4">
								<div class="alert alert-danger" role="alert">
								 Data not found!
								</div>
							</td>
						</tr>
					<?php endif; ?>
					<?php foreach ($mentor as $mtr): ?>
					<tr>
						<th><?php echo ++$start; ?></th>
						<th><?php echo $mtr ['nama']; ?></th>
						<th><?php echo $mtr ['email']; ?></th>
						<td>
							<a href="<?php echo base_url(); ?>mentor/mentor/<?php echo $mhs['id']; ?>" class="badge badge-warning">detail</a>
							<a href="" class="badge badge-success">edit</a>
							<a href="" class="badge badge-danger">delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<?php echo $this->pagination->create_links(); ?>

		</div>
	</div>
</div>


          </div>  
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
