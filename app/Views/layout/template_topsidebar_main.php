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
            <?php if (session()->get('level') == 'user') { ?>
                | User
            <?php } ?>
        </h4>
    </center>
    <a href="/"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
    <!-- <a href="/listbukudipinjam/<?= session()->get('id'); ?>"><i class="fa fa-book" aria-hidden="true"></i><span>Status Buku</span></a> -->
    <!-- <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Keranjang</span></a>
    <a href="#">
        <div class="dropdown">
            <span><i class="fa fa-hashtag" aria-hidden="true"></i>Kategori</span>
            <div class="dropdown-content">
                <a href="">Pendidikan</a>
                <a href="">Hobi</a>
                <a href="">Otomotif</a>
            </div>
        </div>
    </a> -->
</div>