<br>
<br>
<br>
<div class="container">
	<div class="row mt-3">
		<div class="row md-6">
			<div class="card">
  <div class="card-header">
    Contact-us
  </div>
  
</div>

		</div>

	</div>
  <form>
<div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $contact['nama']; ?>">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $contact['email']; ?>">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Subject</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $contact['subject']; ?>">
    </div>
  </div>

<div class="form-group row justify-content-center">
    <label for="staticEmail" class="col-sm-2 col-form-label">Pesan</label>
    <div class="col-sm-10">
      <textarea type="text"  class="form-control" id="" placeholder="<?php echo $contact['pesan']; ?>"></textarea>
    </div>
  </div>

    

</form>
<a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
</div>