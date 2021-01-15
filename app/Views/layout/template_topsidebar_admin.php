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

    <a href="/admin"><i class="fa fa-list" aria-hidden="true"></i><span>List Buku Perpustakaan</span></a>
    <!-- <a href="/admin/peminjamanbuku"><i class="fa fa-table" aria-hidden="true"></i><span>Data Peminjam</span></a>
    <a href="/admin/verifikasipeminjaman"><i class="fa fa-table" aria-hidden="true"></i><span>Verifikasi Peminjaman</span></a>
    <a href="/admin/verifikasipengembalian"><i class="fa fa-table" aria-hidden="true"></i><span>Verifikasi Pengembalian</span></a> -->

</div>