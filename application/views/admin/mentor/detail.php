<br>
<br>
<br>
<div class="container">
	<div class="row mt-3">
		<div class="row md-8">
			<div class="card">
  <div class="card-header">
    Detail Mentor
  </div>
<!--   <div class="card-body ">
    <h5 class="card-title"><?php echo $mentor['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $mentor['nip']; ?></h6>
    <p class="card-text"><?php echo $mentor['divisi']; ?></p>
    <p class="card-text"><?php echo $mentor['jabatan']; ?></p>
    
  </div> -->

</div>
 
		</div>
	</div>
   <form>
  <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $mentor['nama']; ?>">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $mentor['email']; ?>">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['nohp']; ?>">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea type="text"  class="form-control" id="" placeholder="<?php echo $mentor['alamat']; ?>"></textarea>
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Pendidikan</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['pendidikan']; ?>">
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Keahlian</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['keahlian']; ?>">
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Sertifikasi</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['sertifikasi']; ?>">
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Pengalaman</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['pengalaman']; ?>">
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Punya project startup</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['projek_startup']; ?>">
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Startup</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['bisnis']; ?>">
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Berapa Lama</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['lama']; ?>">
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Sektor Bisnis</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['sektor']; ?>">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
      <textarea type="text"  class="form-control" id="" placeholder="<?php echo $mentor['des']; ?>"></textarea>
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Motivasi</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control"  id="motivasi" placeholder="<?php echo $mentor['motivasi']; ?>"></textarea>
    </div>
  </div>

    <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Waktu Konsultasi</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $mentor['waktu']; ?>">
    </div>
  </div>

</form>
<a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
</div>