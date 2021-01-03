<?= $this->extend('layout/template_main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <?php foreach ($databuku as $buku) : ?>
        <div class="card">
            <img src="<?= $buku['sampul']; ?>" alt="" class="card__img">

            <!-- <div class="card__content">  -->
            <div class="card__data">
                <h1 class="card__title"><?= $buku['judul']; ?></h1>
                <a class="card__preci"><?= $buku['penulis']; ?></a>
                <p class="card__description"><?= $buku['deskripsi']; ?></p>
                <a href="#" class="card__button">Pinjam</a>
            </div>
            <!-- </div> -->
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>