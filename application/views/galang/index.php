<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>galang/tampil_galang" class="btn-btn-primary">Tampil Data Galang</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
		<h3>Galang Dana</h3>
		<ul class="list-group">
			<?php foreach ($galang as $glng ) : ?>
		  		<li class="list-group-item"><?php $glng['Username']; ?></li>
		<?php endforeach; ?>
		</ul>
		</div>
	</div>

</div>