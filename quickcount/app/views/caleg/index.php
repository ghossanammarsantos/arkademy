<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

<div class="container">
	<div class="row">
		<div class="col-lg-6 mb-5">
			<h3>Daftar caleg</h3>
			<ul class="list-group">
			<?php foreach ($data['mhs'] as $mhs ) : ?>
			
			  <li class="list-group-item">
			  	<?= $mhs['name']; ?> </br>
			  	Perolehan suara : <?= $mhs['earned_vote']; ?>
			  	
			  	<a href="<?= BASEURL;  ?>/caleg/ubah/<?= $mhs['id']; ?> " class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Tambah</a>
			 
			  </li>
			
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data caleg</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= BASEURL; ?>/caleg/tambah" method="post" accept-charset="utf-8">
       	<input type="hidden" name="id" id="id">
       <div class="form-group">
	    <label for="earned_vote">Masukan Suara</label>
	    <input type="number" class="form-control" id="earned_vote" name="earned_vote">
	  </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
      </div>
    </div>
  </div>
</div>