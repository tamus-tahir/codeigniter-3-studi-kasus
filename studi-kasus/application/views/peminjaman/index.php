<div class="container py-3">

    <a class="btn btn-primary" href="<?= base_url('peminjaman/tambah'); ?>" role="button">Tambah</a>

    <?php if ($this->session->flashdata('berhasil')) : ?>
        <div class="alert alert-primary my-3" role="alert">
            <?= $this->session->flashdata('berhasil'); ?>
        </div>
    <?php endif ?>

    <div class="table-responsive my-3">
        <table class="table table-striped table-bordered text-center" id="my-table">
            <thead>
                <tr>
                    <th scope="col" rowspan="2">#</th>
                    <th scope="col" colspan="2">Tanggal</th>
                    <th scope="col" rowspan="2">Judul</th>
                    <th scope="col" rowspan="2">NIM</th>
                    <th scope="col" rowspan="2">Status</th>
                    <th scope="col" rowspan="2">Aksi</th>
                </tr>
                <tr>
                    <th scope="col">Pengembalian</th>
                    <th scope="col">Peminjaman</th>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($peminjaman as $p) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= date('d-m-Y', strtotime($p->tanggal_peminjaman)); ?></td>
                        <td><?= $p->status == 'Dikembalikan' ? date('d-m-Y', strtotime($p->tanggal_pengembalian)) : ''; ?></td>
                        <td><?= $p->judul; ?></td>
                        <td><?= $p->nim; ?></td>
                        <td><?= $p->status; ?></td>
                        <td class="text-nowarp">
                            <button type="button" class="btn btn-outline-primary get-detail-peminjaman" data-toggle="modal" data-target="#detail-peminjaman" data-id="<?= $p->id_peminjaman; ?>">
                                <i class="fa fa-eye"></i>
                            </button>
                            <?php if ($p->status == 'Dipinjam') : ?>
                                <a class="btn btn-outline-warning" href="<?= base_url('peminjaman/ubah/' . $p->id_peminjaman); ?>" role="button">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-outline-danger" href="<?= base_url('peminjaman/hapus/' . $p->id_peminjaman); ?>" onclick="return confirm('Anda Yakin?')" role="button">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a class="btn btn-outline-secondary" href="<?= base_url('peminjaman/pengembalian/' . $p->id_peminjaman); ?>" role="button" onclick="return confirm('Anda Yakin?')">
                                    <i class="fa fa-sign-in-alt"></i>
                                </a>
                            <?php endif ?>

                            <?php if ($p->status == 'Dikembalikan') : ?>
                                <a class="btn btn-outline-success" href="<?= base_url('peminjaman/reset/' . $p->id_peminjaman); ?>" role="button" onclick="return confirm('Anda Yakin?')">
                                    <i class="fa fa-retweet"></i>
                                </a>
                            <?php endif ?>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>