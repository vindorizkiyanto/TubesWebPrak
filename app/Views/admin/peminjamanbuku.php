<?= $this->extend('layout/template_main'); ?>

<?= $this->section('content'); ?>
<!-- sidebar admin -->
<?= $this->include('layout/template_topsidebar_admin'); ?>
<div class="judul">
	<h1>DATA PEMINJAMAN MEMBER</h1>
</div>
<table class="table">
	<thead>
		<th>Kode Pinjam</th>
		<th>Username</th>
		<th>Tanggal Peminjaman</th>
		<th>Tanggal Pengembalian</th>
		<th>List Buku Yag Dipinjam</th>
		<th>Status</th>
		<th>Denda</th>

	</thead>
	<tbody>
		<tr>
			<td data-label="Kode Pinjam">1221</td>
			<td data-label="Username">Azriel</td>
			<td data-label="Tanggal Peminjaman">01-01-2021</td>
			<td data-label="Tanggal Pengembalian">07-01-2021</td>
			<td data-label="List Buku Yag Dipinjam">asasas,asasasa,asasas</td>
			<td data-label="Status">Dipinjam/Dikembalikan</td>
			<td data-label="Denda">Rp12.000,00</button></td>

		</tr>



	</tbody>
</table>
<?= $this->endSection(); ?>