<!-- <?php var_dump($mahasiswa); ?> -->
<div class="container">
  <?php if($this->session->flashdata('flash')): ?>
  <div class="row-mt-3">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan
        <strong>berhasil</strong> <?php echo $this->session->flashdata('flash') ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>

  

  <div class="row-mt-3 row-mb-5">
      <div class="col-md-6 ">
        <form action="" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari data karyawan euy" name="keyword">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  <div class="row-mt-5">
  <div class="col">  
  <h3>Daftar karyawan</h3>

  <?php if(empty($mentor)): ?>
    <div class="alert alert-danger" role="alert">Data karyawan noting</div>
  <?php endif; ?>
<ul class="list-group">

  <!-- <?php foreach ($mentor as $mtr) : ?>
  <li class="list-group-item">
    <?php echo $mtr['nama']; ?>
      <a href="<?php echo base_url(); ?>mahasiswa/hapus/<?php echo $mtr['id']; ?>" class="badge badge-danger float-right"onclick="return confirm('yaqueen?');">hapus</a>
      <a href="<?php echo base_url(); ?>mahasiswa/ubah/<?php echo $mtr['id']; ?>" class="badge badge-success float-right">ubah</a>
      <a href="<?php echo base_url(); ?>mahasiswa/detail/<?php echo $mtr['id']; ?>" class="badge badge-primary float-right">detail</a>
    </li>
<?php endforeach; ?> -->

<table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Menu</th>
                <th scope="col">Url</th>
                <th scope="col">Icon</th>
                <th scope="col">Active</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              <?php foreach($mentor as $mtr): ?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $mtr['nama']; ?></td>
                <td><?php echo $mtr['email']; ?></td>
                <td><?php echo $mtr['nohp']; ?></td>
                <td><?php echo $mtr['alamat']; ?></td>
                <td><?php echo date('d F Y',$mtr['date_create']); ?></td>
                
                <td>
                  <a href="" class="badge badge-success">edit</a>
                  <a href="" class="badge badge-danger">delete</a>
                  <a href="<?php echo base_url(); ?>user/detail/<?php echo $mtr['id']; ?>" class="badge badge-primary ">detail</a>
                </td>
                
              </tr>
              <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
  
</ul>
</div>
</div>
</div>

   

    

        
