<?= $this->extend('layout/template_main'); ?>

<?= $this->section('content'); ?>
<!-- sidebar admin -->
<?= $this->include('layout/template_topsidebar_admin'); ?>
<form class="box" action="/buku/update/<?= $databuku['id']; ?>" method="POST">
    <?= csrf_field(); ?>
    <div class="form-group row">
        <label for="kode_buku" class="col-sm-2 col-form-label">Kode Buku</label>
        <div class="col-sm-10">
            <input type="text" class="form-control  <?= ($validation->hasError('kode_buku')) ? 'is-invalid' : ''; ?>" id="kode_buku" name="kode_buku" value="<?= (old('kode_buku')) ? old('kode_buku') : $databuku['kode_buku']; ?>" autofocus>
            <?= $validation->getError('kode_buku'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= (old('judul')) ? old('judul') : $databuku['judul']; ?>">
            <?= $validation->getError('judul'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $databuku['penulis']; ?>">
            <?= $validation->getError('penulis'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="sampul" class="col-sm-2 col-form-label">Sampul (Berupa link gambar)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" value="<?= (old('sampul')) ? old('sampul') : $databuku['sampul']; ?>">
            <?= $validation->getError('sampul'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Buku</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $databuku['deskripsi']; ?>">
            <?= $validation->getError('deskripsi'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
        <div class="col-sm-10">
            <input type="number" class="form-control <?= ($validation->hasError('stok')) ? 'is-invalid' : ''; ?>" id="stok" name="stok" value="<?= (old('stok')) ? old('stok') : $databuku['stok']; ?>">
            <?= $validation->getError('deskripsi'); ?>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="button1">Ubah Data</button>
            <a href="/admin" class="btn btn-danger">Batal</a>
        </div>
    </div>

</form>
<?= $this->endSection(); ?>