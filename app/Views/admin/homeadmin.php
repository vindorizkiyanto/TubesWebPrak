<?= $this->extend('layout/template_main'); ?>

<?= $this->section('content'); ?>
<!-- sidebar admin -->
<?= $this->include('layout/template_topsidebar_admin'); ?>
<div class="judul">
	<h1>LIST BUKU PERPUSTAKAAN</h1>
</div>
<a href="/admin/tambahdata" class="tambah">Tambah Buku</a>
<?php if (session()->getFlashdata('pesan')) : ?>
	<div class="alert" role="alert">
		<?= session()->getFlashdata('pesan'); ?>
	</div>
<?php endif; ?>

<table class="table">
	<thead>
		<th>Sampul Buku</th>
		<th>Judul Buku</th>
		<th>Kode Buku</th>
		<th>Deskripsi Buku</th>
		<th>Stok</th>
		<th>Update</th>
		<th>Delete</th>
	</thead>
	<tbody>
		<?php foreach ($databuku as $buku) : ?>
			<tr>
				<td data-label="Sampul Buku"><img src="<?= $buku['sampul']; ?>" alt=""></td>
				<td data-label="Judul Buku"><?= $buku['judul']; ?></td>
				<td data-label="Kode Buku"><?= $buku['kode_buku']; ?></td>
				<td data-label="Deskripsi Buku"><?= $buku['deskripsi']; ?></td>
				<td data-label="Stok"><?= $buku['stok']; ?></td>
				<td data-label="Update"><a href="/admin/editdata/<?= $buku['kode_buku']; ?>" class="button1"><i class="fa fa-undo" aria-hidden="true"></i> Update</a></td>
				<td data-label="Delete">
					<form action="/admin/buku/delete/<?= $buku['id']; ?>" method="post">
						<?= csrf_field(); ?>
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="button2"><i class="fa fa-trash" aria-hidden="true" onclick="return confirm ('Hapus data ini?');"></i>Delete</button>
					</form>
				</td>
			</tr>
		<?php endforeach; ?>

	</tbody>
</table>
<?= $this->endSection(); ?>