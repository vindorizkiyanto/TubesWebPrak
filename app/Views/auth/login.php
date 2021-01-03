<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content_auth'); ?>
<form class="box" action="" method="post">
  <h1>Login</h1>
  <input type="text" name="" placeholder="Username">
  <input type="password" name="" placeholder="Password">
  <input type="submit" name="" value="Login">
  <span class="dark-color d-inline-block line-height-2">Belum daftar? <a href="/auth/register">Daftar disini</a></span>
</form>
<?= $this->endSection(); ?>