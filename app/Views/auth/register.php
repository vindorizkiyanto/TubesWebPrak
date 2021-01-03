<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content_auth'); ?>
<form class="box" action="/auth/createAcc" method="post">
  <h1>Buku Ku | Daftar</h1>

  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-warning" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif; ?>

  <input type="text" name="nama" placeholder="Nama Lengkap" value="<?= old('nama'); ?>">
  <input type="text" name="email" placeholder="Email" value="<?= old('email'); ?>">
  <input type="text" name="notelepon" placeholder="Nomor Telepon" value="<?= old('notelepon'); ?>">
  <input type="text" name="username" placeholder="Username" value="<?= old('username'); ?>">
  <input type="password" name="password" placeholder="Password">
  <input type="password" name="repassword" placeholder="Re-Type Password">
  <input type="submit" value="Create Account">

  <span class="dark-color d-inline-block line-height-2">Sudah Punya akun? <a href="/login">Login</a></span>
</form>
<?= $this->endSection(); ?>