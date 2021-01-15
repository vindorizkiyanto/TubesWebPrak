<?= $this->extend('layout/template_main'); ?>

<?= $this->section('content'); ?>
<!-- sidebar -->
<?= $this->include('layout/template_topsidebar_main'); ?>
<link rel="stylesheet" href="/css/detail.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<div class="judul">
	<h1>STATUS PEMINJAMAN SAYA</h1>
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Peminjaman</th>
			<th>Nama Buku</th>
			<th>Tanggal Peminjaman</th>
			<th>Tanggal Pengembalian</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>
		<?php foreach ($datapinjam as $d) : ?>
			<tr>
				<td><?= $i++; ?></td>
				<td><?= $d['id']; ?></td>
				<td><?= $d['nama_buku']; ?></td>
				<td><?= $d['tgl_pinjam']; ?></td>
				<td><?= $d['tgl_kembali']; ?></td>
				<td><?= $d['status']; ?></td>
				<td><button class="button1"><i class="fa fa-download" aria-hidden="true"></i>Kembalikan Buku</button></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?= $this->endSection(); ?>