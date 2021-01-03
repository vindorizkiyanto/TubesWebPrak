<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content_auth'); ?>
<form class="box" action="/auth/authenticate" method="POST">
  <h1>Buku Ku | Login</h1>

  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-warning" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif; ?>

  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" value="Login">

  <span class="dark-color d-inline-block line-height-2">Belum daftar? <a href="/register">Daftar di sini</a></span>
</form>
<?= $this->endSection(); ?>