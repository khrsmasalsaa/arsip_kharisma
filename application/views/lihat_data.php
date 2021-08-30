<div style="margin-left: 43px;">
	<h2 class="mt-4">Arsip Surat >> Lihat</h2>
	<p style="margin-bottom: 0;">Nomor : <?= $lihat->nomor_surat ?>
		<br> Kategori : <?= $lihat->kategori ?> <br> Judul : <?= $lihat->judul ?> <br> Waktu Unggah : <?= $lihat->tgl_arsip ?>
	</p>
</div>

<div class="row" style="margin-left: 35px;margin-top:20px; margin-right: 30px;">
	<div class="col-md-12 mb-4">
		<iframe src="<?= base_url('/assets/uploads/surat/').$lihat->berkas ?>" width="850" height="400"></iframe>
	</div>
	<div class="col-md-12 mb-4">
		<a href="<?= base_url('') ?>" class="btn btn-danger"><< Kembali</a>
		<a  href="<?= base_url('welcome/download/'). $lihat->berkas ?>" class="btn btn-primary">Unduh</a>
		<a href="<?= base_url('welcome/edit/').$lihat->id ?>" class="btn btn-warning">Edit/Ganti File</a>
	</div>
</div>