<?= $this->extend('layout/template_main'); ?>

<?= $this->section('content'); ?>
<!-- sidebar admin -->
<?= $this->include('layout/template_topsidebar_admin'); ?>
<div class="judul">
	<h1>VERIFIKASI PEMINJAMAN</h1>
</div>
<table class="table">
	<thead>
		<th>kode peminjaman</th>
		<th>Username</th>
		<th>Judul Buku</th>
		<th>Kode Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Diterima</th>
		<th>Ditolak</th>
		<th>Bukti Peminjaman</th>
	</thead>
	<tbody>
		<tr>
			<td data-label="Kode Pinjam">1221</td>
			<td data-label="Username">Azriel</td>
			<td data-label="Judul Buku">Naruto,tapmantap</td>
			<td data-label="Kode Buku">121212,000111</td>
			<td data-label="Tanggal Pinjam">02-01-2021</td>
			<td data-label="Tanggal Kembali">10-01-2021</td>
			<td data-label="Diterima"><button class="button1"><i class="fa fa-check" aria-hidden="true"></i>Diterima</button></td>
			<td data-label="Ditolak"><button class="button2"><i class="fa fa-times" aria-hidden="true"></i>Ditolak</button></td>
			<td data-label="Bukti Peminjaman"><input type="file" class="custom-file-input"></td>
		</tr>



	</tbody>
</table>
<?= $this->endSection(); ?>