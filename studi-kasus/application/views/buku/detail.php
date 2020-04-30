<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="<?= base_url('uploads/' . $detailbuku->gambar); ?>" alt="" height="400" class="w-100">
        </div>
        <div class="col-md-8">
            <h4><?= $detailbuku->judul; ?></h4>
            <h5>Jumlah : <?= $detailbuku->jumlah; ?> buku</h5>
            <p><?= $detailbuku->deskripsi; ?></p>
        </div>
    </div>
</div>