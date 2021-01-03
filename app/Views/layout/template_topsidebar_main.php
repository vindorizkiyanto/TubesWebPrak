<input type="checkbox" id="check">
<header>
    <label for="check">
        <i class="fa fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <h3>Buku <span>ku</span></h3>
    </div>
    <div class="right_area">
        <a href="/auth/logout" class="logout_btn">Logout</a>
    </div>

</header>

<div class="sidebar">
    <center>
        <img src="/img/gambar1.png" class="profile_images" alt="">
        <h4>
            <?= session()->get('nama'); ?>
            <?php if (session()->get('level') == 'admin') { ?>
                | Admin
            <?php } ?>
        </h4>
    </center>
    <a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
    <a href="#"><i class="fa fa-book" aria-hidden="true"></i><span>Buku Saya</span></a>
    <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Keranjang</span></a>
    <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Profile</span></a>
</div>