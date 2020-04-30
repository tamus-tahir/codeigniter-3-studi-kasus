<div class="container py-3">

    <a class="btn btn-primary" href="<?= base_url('buku/tambah'); ?>" role="button">Tambah</a>

    <?php if ($this->session->flashdata('berhasil')) : ?>
        <div class="alert alert-primary my-3" role="alert">
            <?= $this->session->flashdata('berhasil'); ?>
        </div>
    <?php endif ?>

    <div class="table-responsive my-3">
        <table class="table table-striped table-bordered text-center" id="my-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($buku as $u) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $u->judul; ?></td>
                        <td><?= $u->jumlah; ?></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary get-detail-buku" data-toggle="modal" data-target="#exampleModal" data-id="<?= $u->id_buku; ?>">
                                <i class="fa fa-eye"></i>
                            </button>
                            <a class="btn btn-outline-warning" href="<?= base_url('buku/ubah/' . $u->id_buku); ?>" role="button">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-outline-danger" href="<?= base_url('buku/hapus/' . $u->id_buku); ?>" onclick="return confirm('Anda Yakin?')" role="button">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>