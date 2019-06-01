<div class="panel panel-default">
	<div class="panel-heading">
		Tambah Data Galang
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6">
			<?php if(validation_errors()): ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors(); ?>
				</div>
			<?php endif; ?>

				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" name="judul">
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select type="text" class="form-control" name="kategori">
							<option>Balita &amp; Anak Sakit</option>
							<option>Bencana Alam</option>
							<option>Yatim Piatu</option>
							<option>Pembangunan</option>
							<option>Kategori Lainnya</option>
						</select>
					</div>
					<div class="form-group">
						<label>Target (Rp)</label>
						<input type="text" class="form-control" class="uang" name="target">
					</div>
					<div class="form-group">
						<label>Deadline</label>
						<input type="date" class="form-control" name="deadline">
					</div>
					<div class="form-group">
						<label>Cover</label>
						<input type="file" class="form-control" name="cover">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi" rows="10"></textarea>
					</div>
					<div class="form-group">
						<label>Tujuan Donasi</label>
						<select type="text" class="form-control" name="tujuan_donasi">
							<option>Saya Pribadi</option>
							<option>Organisasi/Lembaga</option>
							<option>Keluarga</option>
							<option>Lainnya</option>
						</select>
					</div>
					<button class="btn btn-primary" name="save">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<?php
if (isset($_POST['save']))
{
	$nama =$_FILES['cover']['name'];
	$lokasi =$_FILES['cover']['tmp_name'];
	move_uploaded_file($lokasi, "cover/".$nama);
}
?>

