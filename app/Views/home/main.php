<?= $this->extend('layout/template_main'); ?>

<?= $this->section('content_main'); ?>
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha512-9BwLAVqqt6oFdXohPLuNHxhx36BVj5uGSGmizkmGkgl3uMSgNalKc/smum+GJU/TTP0jy0+ruwC3xNAk3F759A==" crossorigin="anonymous" />
<input type="checkbox" id="check">
<header>
    <label for="check">
        <i class="fa fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <h3>Buku <span>ku</span></h3>
    </div>
    <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
    </div>

</header>

<div class="sidebar">
    <center>
        <img src="/img/gambar1.png" class="profile_images" alt="">
        <h4>Nama</h4>
    </center>
    <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Profile</span></a>
    <a href="#"><i class="fa fa-book" aria-hidden="true"></i><span>Buku Saya</span></a>
    <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Keranjang</span></a>
</div>
<?= $this->endSection(); ?>